<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendormodel extends CI_Model {
	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
     
     function viewVendor(){
        $this->db->select('*');
        $this->db->from('m_vendor');
        
        return $this->db->get();
    }

    function getVendor($id){
        $this->db->select('*');
        $this->db->from('m_vendor');
        $this->db->where('vendor_code', $id);
        return $this->db->get();
    }

    function deleteVendor($id) {
		$this->db->where('vendor_code', $id);
		$this->db->delete('m_vendor');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
			
    }
    
    function editVendor($data,$id) {
		$this->db->where('vendor_code', $id);
        $this->db->update('m_vendor', $data);
    } 

    function get_item_no(){
        $this->db->select('item_code');
        $this->db->from('m_item');
       
        return $this->db->get();
    }

    function get_vendor(){
        $this->db->select('vendor_code, vendor_name');
        $this->db->from('m_vendor');
       
        return $this->db->get();
    }

    function get_item_name($no){
        $this->db->select('item_name');
        $this->db->from('m_item');
        $this->db->where('item_code', $no);
       
        return $this->db->get();
    }

    function get_subcount_vendor($no){
        $this->db->select('batch_qty, container_qty');
        $this->db->from('m_vendor');
        $this->db->where('vendor_code', $no);
       
        return $this->db->get();
    }

    function viewSetVendor(){
        $this->db->select('m_vendor_set.*, m_prosesproduksi.process_name');
        $this->db->from('m_vendor_set');
        $this->db->join('m_prosesproduksi', 'm_vendor_set.process_code = m_prosesproduksi.process_code');
        
        return $this->db->get();
    }

    function getSetVendor($id){
        $this->db->select('m_vendor_set.*, m_vendor.vendor_name, m_prosesproduksi.process_name');
        $this->db->from('m_vendor_set');
        $this->db->join('m_prosesproduksi', 'm_vendor_set.process_code = m_prosesproduksi.process_code');
        $this->db->join('m_vendor', 'm_vendor.vendor_code = m_vendor_set.vendor_code');
        $this->db->where('m_vendor_set.item_no', $id);
        return $this->db->get();
    }

    function deleteSetVendor($id) {
		$this->db->where('item_no', $id);
		$this->db->delete('m_vendor_set');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
			
    }
    
    function editSetVendor($data,$id) {
		$this->db->where('item_no', $id);
        $this->db->update('m_vendor_set', $data);
    } 

    function get_process(){
        $this->db->distinct();
        $this->db->select('process_code, process_name');
        $this->db->from('m_prosesproduksi');
        $this->db->group_by('process_code');
        return $this->db->get();
    }
    
    function cek_item($item_no, $vendor_code){
        $this->db->select('*');
        $this->db->from('m_vendor_set');
        $this->db->where('item_no', $item_no);
        $this->db->where('vendor_code', $vendor_code);
        
        return $this->db->get();
    }

    function viewDriver(){
        $this->db->select('*');
        $this->db->from('m_driver');
        
        return $this->db->get();
    }

    function getDriver($id){
        $this->db->select('*');
        $this->db->from('m_driver');
        $this->db->where('id_driver', $id);
        return $this->db->get();
    }

    function deleteDriver($id) {
		$this->db->where('id_driver', $id);
		$this->db->delete('m_driver');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
			
    }
    
    function editDriver($data,$id) {
		$this->db->where('id_driver', $id);
        $this->db->update('m_driver', $data);
    } 



}
/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */
