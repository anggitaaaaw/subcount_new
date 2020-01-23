<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Labelmodel extends CI_Model {
	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
	
	function get_select_spk() {

        $sql = "SELECT spk_number, id_spk FROM `trx_lot` WHERE id_spk IN ( SELECT id_spk FROM `trx_bst_fcs` WHERE kode_fcs_destination = 'PL-01' ) GROUP BY spk_number";
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
        $sql = "select distinct b.lot_number, b.qty_lot FROM trx_bst_fcs a join trx_lot b on a.id_spk = b.id_spk join m_item c on a.id_finishgood = c.id join trx_spk d on b.spk_number = d.spk_number where a.kode_fcs_destination = 'PL-01' and a.id_spk = '$id_spk'";
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

    function viewLabelSn(){
        $this->db->select('*');
        $this->db->from('m_batch');
        $this->db->group_by('spk_no');
        
        return $this->db->get();
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
        $this->db->where('serial_number', $id);
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
        $this->db->from('m_batch_temp');
        $this->db->like('serial_number', $sn);
        $this->db->order_by('serial_number', 'desc');
        $this->db->limit(1);
        return $this->db->get();
    }

    function getBatch($sn){
        $this->db->select('qty_batch, qty_container, vendor_code');
        $this->db->from('m_vendor_set');
        $this->db->where('item_no', $sn);
       return $this->db->get();
    }

    function getLpp($sn){
        $this->db->select('*');
        $this->db->from('m_batch_temp');
        $this->db->where('lpp_no', $sn);
       return $this->db->get();
    }

    

}
/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */
