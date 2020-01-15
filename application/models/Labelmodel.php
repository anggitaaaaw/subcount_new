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
        $this->db->select('trx_lot.lot_number, trx_lot.qty_lot');
		$this->db->from('trx_lot');
		$this->db->join('trx_bst_fcs', 'trx_lot.id_spk = trx_bst_fcs.id_spk');
		$this->db->where('trx_bst_fcs.id_spk', $id_spk);
        return $this->db->get();
    }

    function lpp_qty($lot_number){
        $this->db->select('qty_lot');
		$this->db->from('trx_lot');
	    $this->db->where('lot_number', $lot_number);
        return $this->db->get();
    }

}
/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */
