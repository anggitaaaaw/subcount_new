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
        $get_item = $this->labelmodel->select_lpp_no($id_spk);
        echo json_encode($get_item);
    }
 
    public function lpp_qty(){
        $lot_number = $this->input->post('lot_number');
        $get_item = $this->labelmodel->lpp_qty($lot_number)->row();
        echo json_encode($get_item);
    }

    public function save_data(){
        $date = date('dmY');
        $ser = $this->labelmodel->getSerial($date)->row();
        if($ser == null){
            $serial_number = $date."00001";
        }else{
            $num = $ser->serial_number;
            //$numm = explode("-", $num);
            $angka = $num + 1;
            $serial_number = $angka;
        }
        $data['serial_number'] = $serial_number;
        $data['id_spk'] = $this->input->post('id_spk');
        $data['spk_no'] = $this->input->post('no_spk');
        $data['item_id'] = $this->input->post('item_code');
        $data['item_name'] = $this->input->post('deskripsi');
        $data['heatno_a'] = $this->input->post('heatno_a');
        $data['heatno_b'] = $this->input->post('heatno_b');
        $data['weight'] = $this->input->post('weight');
        $data['lpp_qty'] = $this->input->post('lpp_qty');
        $data['lpp_no'] = $this->input->post('lpp_number');
        $data['weight'] = $this->input->post('weight');
        $data['user_created'] = $this->session->userdata('username');
        $data['date_created'] = date('Y-m-d H:m:s');

        $this->db->insert('m_batch', $data);
        if ($this->db->affected_rows() == 1) {
            echo "1";
          }else{
            echo "0";
          }
    
    }

    public function view_label(){
        $label = $this->labelmodel->viewLabel()->result();
        $data["data"] = $label;
        echo json_encode($data);
    
    }

    public function delete_label(){
        $id = $this->input->post('id');
        $this->labelmodel->deleteLabel($id);
    }

    public function edit_label(){
        $id = $this->input->post('id');
        $label = $this->labelmodel->getLabel($id)->row();
        echo json_encode($label);
    
      }

    
      public function proses_edit_label(){
      
        $data['serial_number'] = $this->input->post('id');
        $data['id_spk'] = $this->input->post('id_spk');
        $data['spk_no'] = $this->input->post('no_spk');
        $data['item_id'] = $this->input->post('item_code');
        $data['item_name'] = $this->input->post('deskripsi');
        $data['heatno_a'] = $this->input->post('heatno_a');
        $data['heatno_b'] = $this->input->post('heatno_b');
        $data['weight'] = $this->input->post('weight');
        $data['lpp_qty'] = $this->input->post('lpp_qty');
        $data['lpp_no'] = $this->input->post('lpp_number');
        $data['weight'] = $this->input->post('weight');
        $data['user_created'] = $this->session->userdata('username');
        $data['date_created'] = date('Y-m-d H:m:s');

        $edit = $this->labelmodel->editLabel($data, $data['serial_number']);
        if ($this->db->affected_rows() == 1) {
         echo "1";
       }else{
         echo "0";
       }
    
    }

    public function view_label_barcode(){
        $serial_number = $this->input->post('id');
        $data['label'] = $this->labelmodel->getLabel($serial_number)->row();
        //echo json_encode($label);
        $this->load->view('page/making_label/print_label', $data);

    }
    
}
