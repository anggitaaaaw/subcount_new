<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("usersmodel");
       $this->load->library('session');
		}

 
	public function login_user(){
    
          $username = $this->input->post('username');
          $password = md5($this->input->post('password'));
          $temp_account = $this->usersmodel->check_user($username, $password)->row();
          //echo json_encode($temp_account);
          //echo $password;
         // $num_account = count($temp_account);

          $ip_address = $this->get_client_ip();
          $computer_name = gethostname();
          $data_time = date("Y-m-d H:i:s");
         
              if ($temp_account != null){
                  // kalau ada set session
                  $array_items = array(
                      'id' => $temp_account->nik,
                      'username' => $temp_account->username,
                      'group' => $temp_account->group,
                      'vendor' => $temp_account->vendor,
                      'logged_in' => true
                  );
                  $data = array(
                        'username' => $username,
                        'ip_address' => $ip_address,
                        'computer_name' => $computer_name,
                        'data_time' => $data_time,
                        'status' => 'Success'
                  );
                  //$this->mongo_db->insert('adm_m_login', $data);
                  $this->db->insert('adm_m_login', $data);
                  $this->session->set_userdata($array_items);
                  
                    // redirect(site_url('Welcome/link_dashboard'));
                    echo "berhasil";
              }else{
                  // kalau ga ada diredirect lagi ke halaman login
                  $data = array(
                    'username' => $username,
                    'ip_address' => $ip_address,
                    'computer_name' => $computer_name,
                    'data_time' => $data_time,
                    'status' => 'Failed'
              );
              $this->db->insert('adm_m_login', $data);
              
          }

  }

  public function logout(){
    $this->load->driver('cache');
    $this->session->sess_destroy();
    $this->cache->clean();
    redirect(site_url('welcome'));
  }

  function get_client_ip() {
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      //ip from share internet
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      //ip pass from proxy
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
      $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

public function new_user(){
  $data['nik'] = $this->input->post('nik');
  $data['fullname'] = $this->input->post('fullname');
  $data['username'] = $this->input->post('username');
  $data['password'] = md5($this->input->post('password'));
  $data['position'] = $this->input->post('position');
  $data['group'] = $this->input->post('group');
  $data['vendor'] = $this->input->post('vendor');
  $data['status'] = $this->input->post('status');
 
  $user = $this->usersmodel->getUsers($data['nik'])->row();
    if($user == null){
      $this->db->insert('adm_m_user',$data);
      if ($this->db->affected_rows() != 1) {
        echo "user failed added";
      }else{
        echo "berhasil";
      }
    }else{
      echo "user already exists";
    }
  
  
}

  public function viewuser(){
    $user = $this->usersmodel->viewUsers()->result();
    $data["data"] = $user;
    echo json_encode($data);

  }

    public function delete_user(){
    $nik = $this->input->post('nik');
    $this->usersmodel->deleteUser($nik);
    redirect(site_url('Welcome/adm_master_user'));

  }

  public function edit_user(){
    $nik = $this->input->post('nik');
    $user = $this->usersmodel->getUsers($nik)->row();
    echo json_encode($user);

  }

  public function proses_edit_user(){
      $data['nik'] = $this->input->post('nik');
      $data['fullname'] = $this->input->post('fullname');
      $data['username'] = $this->input->post('username');
      $data['password'] = md5($this->input->post('password'));
      $data['position'] = $this->input->post('position');
      $data['group'] = $this->input->post('group');
      $data['vendor'] = $this->input->post('vendor');
      $data['status'] = $this->input->post('status');
     
      //$user = $this->usersmodel->getUsers($data['nik']);
      
     // if($user == null){
        $edit = $this->usersmodel->editProcess($data, $data['nik']);
        if ($this->db->affected_rows() == 1) {
          echo "1";
        }else{
          echo "0";
        }
      //}el se{
        //echo "user dengan nik tersebut sudah ada";
      //}
  }

  public function new_menu(){
    $data['id_menu'] = $this->input->post('id_menu');
    $data['parent_menu'] = $this->input->post('parent_menu');
    $data['menu_name'] = $this->input->post('menu_name');
    $data['link'] = $this->input->post('link');
    $data['order_number'] = $this->input->post('order_number');
   
    $user = $this->usersmodel->getMenu($data['id_menu'])->row();
    
    if($user == null){
      $this->db->insert('adm_m_menu', $data);
      echo "1";
    }else{
      echo "Menu dengan ID tersebut sudah ada";
    }
  }

  public function view_menu(){
    $user = $this->usersmodel->viewMenu()->result();
    $data["data"] = $user;
    echo json_encode($data);

  }

  public function delete_menu(){
    $id_menu = $this->input->post('id_menu');
    $this->usersmodel->deleteMenu($id_menu);

  }

  public function edit_menu(){
    $id_menu = $this->input->post('id_menu');
    $user = $this->usersmodel->getMenu($id_menu)->row();
    echo json_encode($user);

  }

  public function proses_edit_menu(){
      $data['id_menu'] = $this->input->post('id_menu');
      $data['parent_menu'] = $this->input->post('parent_menu');
      $data['menu_name'] = $this->input->post('menu_name');
      $data['link'] = $this->input->post('link');
      $data['order_number'] = $this->input->post('order_number');
     
      
       $edit = $this->usersmodel->editMenu($data, $data['id_menu']);
       if ($this->db->affected_rows() == 1) {
        echo "1";
      }else{
        echo "0";
      }
   
  }

  public function insert_menu_user(){
    $menu = $this->usersmodel->viewMenu()->result();

    foreach($menu as $m){
    
      $data = array(
        'id_menu' => $m->id_menu,
        'nik' 	=> $this->input->post('nik'),
        'status'		=> "false" 
        );
      $nik = $this->input->post('nik');
      $user = $this->usersmodel->get_menu_user($nik, $m->id_menu)->row();
     
      if($user == null){
        $this->db->insert('adm_m_setuser', $data);
    //  echo "masuk";
      }else{
      //  echo "tidak";
      }

    }
    $setuser = $this->usersmodel->get_menu_setuser($nik)->result();
    echo json_encode($setuser);
    
  }

  public function checked_menu_user(){
    $id_menu = $this->input->post('id_menu');
    $nik = $this->input->post('nik');
    $this->usersmodel->checked_menu_user($id_menu, $nik);
  }

  public function unchecked_menu_user(){
    $id_menu = $this->input->post('id_menu');
    $nik = $this->input->post('nik');
    $this->usersmodel->unchecked_menu_user($id_menu, $nik); 
  }

  public function view_historical_akses(){
    $user = $this->usersmodel->view_historical_akses()->result();
    $data["data"] = $user;
    echo json_encode($data);
  }

  public function delete_historical_akses(){
    $this->db->empty_table('adm_m_login');
  }

  public function tree_menu(){
    //$nik = "32014589623510002";
    $nik = $this->input->post('nik');
    $menu = $this->usersmodel->get_tree_menu($nik)->result();
    echo json_encode($menu);
  }

  public function change_password(){
    $nik = $this->input->post('nik');
    $password = md5($this->input->post('password'));

    $this->db->set('password', $password);
    $this->db->where('nik', $nik);
    $this->db->update('adm_m_user');
    if ($this->db->affected_rows() != 1) {
      echo "0";
    }else{
      echo "1";
    }
  }
}
