<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function menus(){
		$this->load->helper('url');
		$this->load->view('menus');
	}

	//MODUL DASHBOARD
	public function link_dashboard(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	//MODUL ADMINISTRATOR
	public function adm_master_user(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/administrator/master_user');
		$this->load->view('footer');
	}

	public function adm_setting_menu(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/administrator/setting_menu');
		$this->load->view('footer');
	}

	public function adm_setting_user(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/administrator/setting_user');
		$this->load->view('footer');
	}

	public function adm_historical_akses(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/administrator/historical_akses');
		$this->load->view('footer');
	}

	//MODUL MAKING LABEL
	public function create_label_batch(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('labelmodel');
		$this->labelmodel->delete_m_batch();
		$this->load->view('page/making_label/create_label_batch');
		$this->load->view('footer');
	}

	public function create_label_batch_input(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/making_label/create_label_batch_input');
		$this->load->view('footer');
	}

	public function receiving_disubcount(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('labelmodel');
		$this->labelmodel->delete_trx_ven_receive_temp();
		$this->load->view('page/making_label/receiving_disubcount');
		$this->load->view('footer');
	}

	public function receiving_disubcount_input(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('labelmodel');
		$this->labelmodel->delete_trx_ven_receive_temp();
		$this->load->view('page/making_label/receiving_disubcount_input');
		$this->load->view('footer');
	}

	public function delivery_note(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/making_label/delivery_note');
		$this->load->view('footer');
	}

	public function delivery_note_input(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('labelmodel');
		$this->labelmodel->delete_dn();
		$this->load->view('page/making_label/delivery_note_input');
		$this->load->view('footer');
	}

	public function vendor_delivery(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/making_label/vendor_delivery');
		$this->load->view('footer');
	}

	public function vendor_delivery_input($dn_no){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('labelmodel');
		$data['label'] = $this->labelmodel->trx_ven_receive_det($dn_no)->result();
		$this->load->view('page/making_label/vendor_delivery_input', $data);
		$this->load->view('footer');
	}

	public function print_sj(){
		$this->load->helper('url');
		$this->load->view('page/making_label/print_sj');
	}

	public function print_packinglist(){
		$this->load->helper('url');
		$this->load->model('labelmodel');
		$data['label'] = $this->labelmodel->view_dn_temp()->result();
		$this->load->view('page/making_label/print_packinglist', $data);
	}

	public function print_pl_vd(){
		$this->load->helper('url');
		$this->load->model('labelmodel');
		$data['label'] = $this->labelmodel->view_pl_vd()->result();
		$this->load->view('page/making_label/print_packinglist', $data);
	}

	public function print_packing_list($dn_no){
		$this->load->helper('url');
		$this->load->model('labelmodel');
		$data['label'] = $this->labelmodel->view_dnno_det($dn_no)->result();
		$this->load->view('page/making_label/print_packinglist', $data);
	}

	public function print_label($spk = null){
		if($spk == null){
			echo "Coba klik lagi tombol reprintnya";
		}else{
		$this->load->helper('url');
		$this->load->model('labelmodel');
		$data['label'] = $this->labelmodel->viewLabelSpk($spk);
	//	print_r($data);
		$this->load->view('page/making_label/print_label', $data);
		}
	}

	public function print_label_ven_del($spk ){
	
		$this->load->helper('url');
		$this->load->model('labelmodel');
		$data['label'] = $this->labelmodel->viewLabelSpkVen($spk);
		//print_r($data);
		$this->load->view('page/making_label/print_label_ven', $data);
	
	}

	public function print_label2(){
		$this->load->helper('url');
		$this->load->view('page/making_label/print_label2');
	}

	public function print_dn(){
		$this->load->helper('url');
		$this->load->model('labelmodel');
		$data['label'] = $this->labelmodel->view_dn_temp()->result();
		$this->load->view('page/making_label/print_dn', $data);
	}

	public function incoming_wip(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/making_label/incoming_wip');
		$this->load->view('footer');
	}

	public function report_trans(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/making_label/report_trans');
		$this->load->view('footer');
	}

	//MODUL MASTER DATA
	public function mst_vendor(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/master_data/mst_vendor');
		$this->load->view('footer');
	}

	public function master_remarks(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/master_data/mst_remarks');
		$this->load->view('footer');
	}

	public function mst_setting_vendor(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/master_data/setting_vendor');
		$this->load->view('footer');
	}

	public function mst_driver(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/master_data/mst_driver');
		$this->load->view('footer');
	}


}