<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usersmodel extends CI_Model {
	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
	
	function editProcess($data, $nik) {

		//return $this->mongo_db->where(array('nik' => $nik))->set($data)->update('adm_m_user');
		
         $this->db->where('nik', $nik);
         $this->db->update('adm_m_user', $data);
	} 
	function viewUsers() {
		//return $this->mongo_db->get('adm_m_user');
		$this->db->select('*');
        $this->db->from('adm_m_user');
        return $this->db->get();
	}
	function getUsers($nik) {
		//return $this->mongo_db->where(array('nik' => $nik))->get('adm_m_user');
		$this->db->select('*');
		$this->db->from('adm_m_user');
		$this->db->where('nik', $nik);
        return $this->db->get();
		
	}
	function deleteUser($nik) {
		//return $this->mongo_db->where(array('nik' => $nik))->delete('adm_m_user');
		$this->db->where('nik', $nik);
		$this->db->delete('adm_m_user');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
			
	}
	function getMenu($id_menu) {
		//return $this->mongo_db->where(array('id_menu' => $id_menu))->get('adm_m_menu');
		$this->db->select('*');
		$this->db->from('adm_m_menu');
		$this->db->where('id_menu', $id_menu);
        return $this->db->get();
		
	}
	function viewMenu() {
	//	return $this->mongo_db->get('adm_m_menu');
		$this->db->select('*');
		$this->db->from('adm_m_menu');
        return $this->db->get();
	}
	function deleteMenu($id_menu) {
		//return $this->mongo_db->where(array('id_menu' => $id_menu))->delete('adm_m_menu');
		$this->db->where('id_menu', $id_menu);
		$this->db->delete('adm_m_menu');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
			
	}
	function editMenu($data, $id_menu) {
		//return $this->mongo_db->where(array('id_menu' => $id_menu))->set($data)->update('adm_m_menu');
		$this->db->where('id_menu', $id_menu);
        $this->db->update('adm_m_menu', $data);
	} 
	function delete_menu_user($id_menu, $nik) {
		//return $this->mongo_db->where(array('nik' => $nik, 'id_menu' => $id_menu))->delete('adm_m_setuser');
		$this->db->where('nik', $nik);
		$this->db->where('id_menu', $id_menu);
		$this->db->delete('adm_m_setuser');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
			
	}

	function get_menu_user($nik, $id_menu){
		//return $this->mongo_db->where(array( 'nik' => $nik, 'id_menu' => $id_menu ))->get('adm_m_setuser');
		$this->db->select('*');
		$this->db->from('adm_m_setuser');
		$this->db->where('nik', $nik);
		$this->db->where('id_menu', $id_menu);
        return $this->db->get();
	}

	function get_menu_setuser($nik){
		//return $this->mongo_db->where(array( 'nik' => $nik ))->get('adm_m_setuser');
		$this->db->select('*');
		$this->db->from('adm_m_setuser');
		$this->db->join('adm_m_menu', 'adm_m_setuser.id_menu = adm_m_menu.id_menu');
		$this->db->where('adm_m_setuser.nik', $nik);
        return $this->db->get();
	}

	function checked_menu_user($id_menu, $nik){
		//return $this->mongo_db->where(array('id_menu' => $id_menu,'nik' => $nik))->set(array('status' => "true"))->update('adm_m_setuser');
		$this->db->set('status', 'true');
		$this->db->where('id_menu', $id_menu);
		$this->db->where('nik', $nik);
		$this->db->update('adm_m_setuser');
	}

	function unchecked_menu_user($id_menu, $nik){
		//return $this->mongo_db->where(array('id_menu' => $id_menu,'nik' => $nik))->set(array('status' => "false"))->update('adm_m_setuser');
		$this->db->set('status', 'false');
		$this->db->where('id_menu', $id_menu);
		$this->db->where('nik', $nik);
		$this->db->update('adm_m_setuser');
	}

	function check_user($username, $password){
		//return $this->mongo_db->where(array( 'username' => $username, 'password' => $password ))->get('adm_m_user');
		$this->db->select('*');
		$this->db->from('adm_m_user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
        return $this->db->get();
	}

	function view_historical_akses(){
		//return $this->mongo_db->get('adm_m_login');
		$this->db->select('*');
		$this->db->from('adm_m_login');
        return $this->db->get();
	}

	function get_tree_menu($nik){
		$this->db->select('*');
		$this->db->from('adm_m_setuser');
		$this->db->join('adm_m_menu', 'adm_m_setuser.id_menu = adm_m_menu.id_menu');
		$this->db->where('adm_m_setuser.nik', $nik);
		$this->db->where('adm_m_setuser.status', 'true');
		$this->db->order_by('adm_m_setuser.id_menu', 'ASC');
        return $this->db->get();
	}
}
/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */
