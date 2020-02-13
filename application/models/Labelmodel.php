<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Labelmodel extends CI_Model {
	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
	
     function get_select_spk() {

        $sql = "SELECT spk_number, id_spk FROM `trx_lot` WHERE id_spk IN ( SELECT id_spk FROM `trx_bst_fcs` WHERE kode_fcs_destination = 'PL-01' ) and spk_number NOT IN (SELECT distinct spk_no from m_batch) GROUP BY spk_number";
        $result = $this->db->query($sql)->result();
        return $result;
    }
    
    function get_item_deskripsi($id_spk){
        $sql = "SELECT item_code, item_name FROM `m_item` WHERE id IN ( SELECT id_finishgood FROM `trx_bst_fcs` WHERE id_spk = '$id_spk' )";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function get_heat_no($id_spk){
        $sql = "SELECT heat_no_a, heat_no_b FROM `trx_spk` WHERE id = '$id_spk' ";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function select_lpp_no($id_spk){
        $sql = "select distinct b.lot_number, b.qty_lot FROM trx_bst_fcs a join trx_lot b on a.id_spk = b.id_spk join m_item c on a.id_finishgood = c.id join trx_spk d on b.spk_number = d.spk_number where a.kode_fcs_destination = 'PL-01' and a.id_spk = '$id_spk' and b.lot_number NOT IN (SELECT DISTINCT lpp_no from m_batch where id_spk = '$id_spk')";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function move_m_batch(){
        $sql = "INSERT INTO `m_batch`(`serial_number`, `id_spk`, `spk_no`, `item_id`, `item_name`, `heatno_a`, `heatno_b`, `lpp_no`, `lpp_qty`, `weight`, `user_created`, `date_created`) SELECT `serial_number`, `id_spk`, `spk_no`, `item_id`, `item_name`, `heatno_a`, `heatno_b`, `lpp_no`, `lpp_qty`, `weight`, `user_created`, `date_created` FROM `m_batch_temp`";
        $result = $this->db->query($sql);
        return $result;
    }
    function delete_m_batch(){
        $sql = "TRUNCATE m_batch_temp";
        $result = $this->db->query($sql);
        return $result;
    }

    function delete_trx_ven_receive_temp(){
        $sql = "TRUNCATE trx_ven_receive_temp";
        $result = $this->db->query($sql);
        return $result;
    }

    function lpp_qty($lot_number){
        $this->db->select('qty_lot');
		$this->db->from('trx_lot');
	    $this->db->where('lot_number', $lot_number);
        return $this->db->get();
    }

    function viewLabel(){
        $this->db->select('*');
        $this->db->from('m_batch_temp');
        return $this->db->get();
    }

    function viewLabelSpk($spk){
      $sql = "SELECT DISTINCT a.*, b.spk_start, b.spk_end, c.vendor_name, c.vendor_code, d.qty_batch, e.process_name from m_batch a join trx_spk b on a.spk_no = b.spk_number join m_vendor c on SUBSTR(a.serial_number, 3, 6) = c.vendor_code JOIN m_vendor_set d on d.vendor_code = c.vendor_code and a.item_id = d.item_no LEFT JOIN m_prosesproduksi e on e.process_code = d.process_code  where a.spk_no = '$spk' ";

      $result = $this->db->query($sql)->result();
      return $result;
    }

    function viewLabelSn(){
     $sql ='select distinct c.vendor_name, b.qty_batch, b.qty_container, a.* from m_batch a join m_vendor_set b on a.item_id = b.item_no join m_vendor c on b.vendor_code = c.vendor_code group by a.spk_no asc';
        
     $result = $this->db->query($sql)->result();
     return $result;
    }

    function viewLabelAll($sn){
        $this->db->select('*');
        $this->db->from('m_batch');
        $this->db->where('spk_no', $sn);
        
        return $this->db->get();
    }

    function getLabel($id){
        $this->db->select('*');
        $this->db->from('m_batch_temp');
        //$this->db->where('serial_number', $id);
        return $this->db->get();
    }

    function deleteLabel($id) {
		$this->db->where('serial_number', $id);
		$this->db->delete('m_batch_temp');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
			
    }
    
    function editLabel($data, $id) {
		//return $this->mongo_db->where(array('id_menu' => $id_menu))->set($data)->update('adm_m_menu');
		$this->db->where('serial_number', $id);
        $this->db->update('m_batch_temp', $data);
    } 
    
    function getSerial($sn){
        $this->db->select('*');
        $this->db->from('m_batch');
        $this->db->like('serial_number', $sn);
        $this->db->order_by('serial_number', 'desc');
        $this->db->limit(1);
        return $this->db->get();
    }

    function getlppNo($sn){
        $this->db->select('*');
        $this->db->from('m_batch');
        $this->db->like('lpp_no', $sn);
        $this->db->order_by('lpp_no', 'desc');
        $this->db->limit(1);
        return $this->db->get();
    }

    function getBatch($sn){
       $this->db->select('m_vendor_set.*, m_vendor.vendor_name');
       $this->db->from('m_vendor_set');
       $this->db->join('m_vendor', 'm_vendor.vendor_code = m_vendor_set.vendor_code');
       $this->db->where('m_vendor_set.item_no', $sn);
       return $this->db->get();
    }

    function getLpp($sn){
        $this->db->select('*');
        $this->db->from('m_batch_temp');
        $this->db->where('lpp_no', $sn);
       return $this->db->get();
    }

    function select_driver(){
        $this->db->select('*');
        $this->db->from('m_driver');
       return $this->db->get();
    }

    function view_del_note($scan){
        $sql ="select distinct c.vendor_name, c.vendor_code, b.qty_batch, a.* from m_batch a join m_vendor_set b on a.item_id = b.item_no join m_vendor c on b.vendor_code = c.vendor_code where a.serial_number = '$scan' ";
        
        $result = $this->db->query($sql)->result();
        return $result;
    }
    
    function get_dn_no($sn){
        $this->db->select('*');
        $this->db->from('trx_deliverynote');
        $this->db->like('dn_no', $sn);
        $this->db->order_by('dn_no', 'desc');
        $this->db->limit(1);
        return $this->db->get();
    }

    function cek_spk($spk_no){
        $this->db->select('*');
        $this->db->from('trx_deliverynote');
        $this->db->where('spk_no', $spk_no);
       
        return $this->db->get();
    }

    function cek_spk_temp($spk_no){
        $this->db->select('*');
        $this->db->from('trx_deliverynote_temp');
        $this->db->where('spk_no', $spk_no);
       
        return $this->db->get();
    }

    function cek_dn_temp(){
        $this->db->select('*');
        $this->db->from('trx_deliverynote_temp');
       
        return $this->db->get();
    }
    function cek_sn($spk_no){
        $this->db->select('*');
        $this->db->from('trx_deliverynote_temp');
        $this->db->where('serial_id', $spk_no);
       
        return $this->db->get();
    }

    function view_dn_temp(){
        $this->db->select('*');
        $this->db->from('trx_deliverynote_temp'); 
        $this->db->join('m_vendor', 'm_vendor.vendor_code = trx_deliverynote_temp.vendor_code');
        return $this->db->get();
    }

    function view_dn_det(){
        $this->db->select('*');
        $this->db->from('trx_deliverynote'); 
        $this->db->join('m_vendor', 'm_vendor.vendor_code = trx_deliverynote_temp.vendor_code');
        $this->db->where('trx_deliverynote.dn_no');
        return $this->db->get();
    }

    function move_dn(){
        $this->db->select('*');
        $this->db->from('trx_deliverynote_temp'); 
        return $this->db->get();
    }

    function delete_dn(){
        $sql = "TRUNCATE trx_deliverynote_temp";
        $result = $this->db->query($sql);
        return $result;
    }

    function view_dn(){
        $this->db->select('*');
        $this->db->from('trx_deliverynote'); 
        $this->db->join('m_vendor', 'm_vendor.vendor_code = trx_deliverynote.vendor_code');
        $this->db->group_by('trx_deliverynote.dn_no');
        return $this->db->get();
    }

    function view_dnno_det($dn_no){
        $this->db->select('*');
        $this->db->from('trx_deliverynote'); 
        $this->db->join('m_vendor', 'm_vendor.vendor_code = trx_deliverynote.vendor_code');
        $this->db->join('m_batch', 'trx_deliverynote.serial_id = m_batch.serial_number');
        $this->db->where('trx_deliverynote.dn_no', $dn_no);
        return $this->db->get();
    }

    function view_ven_receive_temp($dn_no){
        $this->db->select('*');
        $this->db->from('trx_deliverynote'); 
        $this->db->join('trx_ven_receive_temp', 'trx_ven_receive_temp.batch_no = trx_deliverynote.serial_id');
        $this->db->where('trx_deliverynote.dn_no', $dn_no);
        return $this->db->get();
    }

    function edit_qty($batch_no){
        $this->db->select('*');
        $this->db->from('trx_ven_receive');
        $this->db->where('batch_no', $batch_no);
        return $this->db->get();
    }

    
    function find_spk(){
        $this->db->select('spk_no');
        $this->db->from('trx_deliverynote_temp'); 
        $this->db->limit(1);
        return $this->db->get();
    }

    function jml_lpp($spk_no){
        $sql = "SELECT COUNT(lpp_no) AS jml_lpp FROM m_batch where spk_no = '$spk_no'";
        $result = $this->db->query($sql);
        return $result;
        
    }

    function jml_row(){
        $sql = "SELECT COUNT(spk_no) AS jml_spk FROM trx_deliverynote_temp";
        $result = $this->db->query($sql);
        return $result;
        
    }

    function view_search_dn($status_delivery, $kategori, $search){
        $this->db->select('*');
        $this->db->from('trx_deliverynote'); 
        $this->db->join('m_vendor', 'm_vendor.vendor_code = trx_deliverynote.vendor_code');
        $this->db->where('trx_deliverynote.status_dn', $status_delivery);
        if($kategori == 'dn_no'){
            $this->db->like('trx_deliverynote.dn_no', $search);
        }else if($kategori == 'product_no'){
            $this->db->like('trx_deliverynote.item_code', $search);
        }
        $this->db->group_by('trx_deliverynote.dn_no');
        return $this->db->get();
    }

    function editQty($data, $id) {
		//return $this->mongo_db->where(array('id_menu' => $id_menu))->set($data)->update('adm_m_menu');
		$this->db->where('batch_no', $id);
        $this->db->update('trx_ven_receive_temp', $data);
    } 

    function move_trx_ven_receive(){
      
        $sql = "INSERT INTO `trx_ven_receive`(`dn_date`, `dn_no`, `batch_no`, `qty_real`, `weight_real`, `qty_actual`, `weight_actual`, `qty_balance`, `weight_balance`, `receive_date`, `receive_user`) SELECT `dn_date`, `dn_no`, `batch_no`, `qty_real`, `weight_real`, `qty_actual`, `weight_actual`, `qty_balance`, `weight_balance`, `receive_date`, `receive_user` FROM `trx_ven_receive_temp`";
        $result = $this->db->query($sql);
        return $result;
    }

    function cek_trx_ven(){
        $sql = "SELECT * FROM trx_ven_receive_temp WHERE qty_actual IS NULL ";
        $result = $this->db->query($sql);
        return $result;
    }

    function trx_ven_receive(){
        $this->db->select('*');
        $this->db->from('trx_deliverynote'); 
        $this->db->join('trx_ven_receive', 'trx_ven_receive.batch_no = trx_deliverynote.serial_id');
        $this->db->group_by('trx_ven_receive.dn_no');
        return $this->db->get();
    }

    function trx_ven_receive_det($dn_no){
        $this->db->select('*');
        $this->db->from('trx_deliverynote'); 
        $this->db->join('trx_ven_receive', 'trx_ven_receive.batch_no = trx_deliverynote.serial_id');
        $this->db->where('trx_ven_receive.dn_no', $dn_no);
        return $this->db->get();
    }

    function view_dn_no(){
        $sql = "SELECT dn_no FROM `trx_deliverynote` WHERE dn_no NOT IN (SELECT distinct dn_no from trx_ven_receive) GROUP BY dn_no";
        $result = $this->db->query($sql);
        return $result;
    }

    function view_vendor_delivery(){
        $this->db->select('*');
        $this->db->from('trx_deliverynote'); 
        $this->db->join('trx_ven_receive', 'trx_ven_receive.batch_no = trx_deliverynote.serial_id');
        $this->db->join('m_vendor_set', 'm_vendor_set.item_no = trx_deliverynote.item_code');
        $this->db->group_by('trx_ven_receive.dn_no');

        return $this->db->get();
    }

    function trx_ven_delivery_det($dn_no){
        $this->db->select('*');
        $this->db->from('trx_deliverynote'); 
        $this->db->join('trx_ven_receive', 'trx_ven_receive.batch_no = trx_deliverynote.serial_id');
        $this->db->where('trx_ven_receive.dn_no', $dn_no);
        return $this->db->get();
    }

}
/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */
