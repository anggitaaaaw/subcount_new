<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Label extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("labelmodel");
       $this->load->library('session');
	}

    public function select_spk(){
        $select = $this->labelmodel->get_select_spk();
        echo json_encode($select);
    }

    public function item_deskripsi(){
        $id_spk = $this->input->post('id_spk');
        $get_item = $this->labelmodel->get_item_deskripsi($id_spk);
        echo json_encode($get_item);
    }

    public function get_heat_no(){
        $id_spk = $this->input->post('id_spk');
        $get_item = $this->labelmodel->get_heat_no($id_spk);
        echo json_encode($get_item);
    }

    public function select_lpp_no(){
        $id_spk = $this->input->post('id_spk');
        $get_item = $this->labelmodel->select_lpp_no($id_spk)->result();
        echo json_encode($get_item);
    }
 
    public function lpp_qty(){
        $lot_number = $this->input->post('lot_number');
        $get_item = $this->labelmodel->lpp_qty($lot_number)->row();
        echo json_encode($get_item);
    }
}
