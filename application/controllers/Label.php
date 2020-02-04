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

    public function get_serial_id($vendor_code){
        $date = date('ym');
        $n = $vendor_code.$date;
        $ser = $this->labelmodel->getSerial($n)->row();
        if($ser == null){
            $serial_number = $n."00001";
        }else{
            $str = strlen($ser->serial_number);
            $sub = substr($ser->serial_number,$str-6,6);
            $num = $sub + 1;
            $depan = substr($ser->serial_number,0,$str-6);
            $serial_number = $depan.$num;
        }

         return $serial_number;
    }
    public function save_data(){
        $data['vendor_code'] = $this->input->post('vendor_code');
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

        $user = $this->labelmodel->getLpp($data['lpp_no'])->row();
        if($user == null){
            $this->db->insert('m_batch_temp', $data);
            if ($this->db->affected_rows() == 1) {
                echo "1";
            }else{
                echo "0";
            }
        }else{
              echo "2";
              
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
     
        $data['serial_number'] = $this->input->post('serial_id');
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
         print_r($data);
       }
    
    }

    public function batch_qty(){
        $item_no = $this->input->post('item_no');
        $label = $this->labelmodel->getBatch($item_no)->row();
        echo json_encode($label);
    }

    public function view_label_barcode(){
        $serial_number = $this->input->post('id');
        $data['label'] = $this->labelmodel->getLabel($serial_number)->result();
        //echo json_encode($label);
        $this->load->view('page/making_label/print_label', $data);

    }
    
    public function view_label_sn(){
        $label = $this->labelmodel->viewLabelSn();
        $data["data"] = $label;
        echo json_encode($data);
       }
       public function view_label_all(){
        $serial_number = $this->input->post('serial_number');
        $label = $this->labelmodel->viewLabelAll($serial_number)->result();
        echo json_encode($label);
       }

    public function move_data(){
       $temp = $this->labelmodel->viewLabel()->result();
       foreach($temp as $t){
           $vendor_code = $t->vendor_code;
        $data['serial_number'] = $this->get_serial_id($vendor_code);
        $data['id_spk'] = $t->id_spk;
        $data['spk_no'] = $t->spk_no;
        $data['item_id'] = $t->item_id;
        $data['item_name'] = $t->item_name;
        $data['heatno_a'] = $t->heatno_a;
        $data['heatno_b'] = $t->heatno_b;
        $data['weight'] = $t->weight;
        $data['lpp_qty'] = $t->lpp_qty;
        $data['lpp_no'] = $t->lpp_no;
        $data['user_created'] = $t->user_created;
        $data['date_created'] = $t->date_created;

        $this->db->insert('m_batch', $data);
       }
       echo  $data['spk_no'];
        $this->labelmodel->delete_m_batch();
    }

    public function delete_data(){
        $this->labelmodel->delete_m_batch();

    }

    public function select_plat_no(){
        $label = $this->labelmodel->select_driver()->result();
        echo json_encode($label);
    }

    public function select_driver_name(){
        $label = $this->labelmodel->select_driver()->result();
        echo json_encode($label);
    }

    public function view_del_note(){
        $label = $this->labelmodel->view_dn_temp()->result();
        $data["data"] = $label;
        echo json_encode($data);
    }

    public function get_dn_no($vendor_code){
        $date = date('ym');
        $n = 'DN'.$vendor_code.$date;
        $ser = $this->labelmodel->get_dn_no($n)->row();
        if($ser == null){
            $serial_number = $n."00001";
        }else{
            $str = strlen($ser->serial_id);
            $sub = substr($ser->serial_id,$str-6,6);
            $num = $sub + 1;
            $depan = substr($ser->serial_id,0,8);
            $serial_number = 'DN'.$depan.$num;
        }

         return $serial_number;
    }

    public function save_dn_temp(){
        $scan = $this->input->post('serial_id');
        $label = $this->labelmodel->view_del_note($scan);
        $data['dn_no'] = $this->get_dn_no($label[0]->vendor_code);
        $data['serial_id'] = $label[0]->serial_number;
        $data['vendor_code'] = $label[0]->vendor_code;
        $data['plat_no'] = $this->input->post('plat_no');
        $data['driver_name'] = $this->input->post('driver_name');
        $data['spk_no'] = $label[0]->spk_no;
        $data['lpp_no'] = $label[0]->lpp_no;
        $data['item_code'] = $label[0]->item_id;
        $data['item_name'] = $label[0]->item_name;
        $data['heatno_a'] = $label[0]->heatno_a;
        $data['heatno_b'] = $label[0]->heatno_b;
        $data['lpp_qty'] = $label[0]->lpp_qty;
        $data['status_dn'] = 'open';
        $data['created_by'] = $this->session->userdata('username');
        $data['created_date'] = date('Y-m-d H:m:s');

        $cek_spk = $this->labelmodel->cek_spk($label[0]->spk_no)->row();
        $cek_sn = $this->labelmodel->cek_sn($label[0]->serial_number)->row();
        if($cek_spk != null){
            if($cek_sn == null){
                $this->db->insert('trx_deliverynote_temp', $data);
                if ($this->db->affected_rows() == 1) {
                    echo "1";
                }else{
                    echo "0";
                }
            }else{
                echo "Serial ID sudah ada";
            }
        }else{
            if($cek_spk == null){
                $this->db->insert('trx_deliverynote_temp', $data);
                if ($this->db->affected_rows() == 1) {
                    echo "1";
                }else{
                    echo "0";
                }
            }
            echo "SPK no tidak boleh berbeda";
        }

    }

    public function create_dn(){
        $dn = $this->labelmodel->move_dn()->result();
        foreach($dn as $d){
            $data['dn_no'] = $d->dn_no;
            $data['serial_id'] = $d->serial_id;
            $data['vendor_code'] = $d->vendor_code;
            $data['plat_no'] = $d->plat_no;
            $data['driver_name'] = $d->driver_name;
            $data['spk_no'] = $d->spk_no;
            $data['lpp_no'] = $d->lpp_no;
            $data['item_code'] = $d->item_code;
            $data['item_name'] = $d->item_name;
            $data['heatno_a'] = $d->heatno_a;
            $data['heatno_b'] = $d->heatno_b;
            $data['lpp_qty'] = $d->lpp_qty;
            $data['status_dn'] = $d->status_dn;
            $data['created_by'] = $d->created_by;
            $data['created_date'] = $d->created_date;

            $this->db->insert('trx_deliverynote', $data);
        }
        $this->labelmodel->delete_dn();
    }

    public function view_deliverynote(){
        $label = $this->labelmodel->view_dn()->result();
        $data["data"] = $label;
        echo json_encode($data);
    }

    public function view_dn_det(){
        $dn_no = $this->input->post('dn_no');
        $label = $this->labelmodel->view_dn_det($dn_no)->result();
        echo json_encode($label);
    }

    public function cek_jml(){
        $spk_no = $this->labelmodel->find_spk()->row();
        $jml_lpp = $this->labelmodel->jml_lpp($spk_no->spk_no)->row();
        $jml_row = $this->labelmodel->jml_row()->row();

        if($jml_lpp->jml_lpp == $jml_row->jml_spk){
            echo "1";
        }else{
            echo "0";
        }
    }

    public function view_search_dn($status_delivery, $kategori, $search_by){
        $label = $this->labelmodel->view_search_dn($status_delivery, $kategori, $search_by)->result();
        $data["data"] = $label;
        echo json_encode($data);
    }

    public function select_dn_no(){
        $label = $this->labelmodel->view_dn()->result();
        echo json_encode($label);
    }

    public function plat_driver(){
        $dn_no = $this->input->post('dn_no');
        $label = $this->labelmodel->view_dn_det($dn_no)->result();
        echo json_encode($label);
    }

    public function view_dn_tbl($dn_no){
        $label = $this->labelmodel->view_dn_det($dn_no)->result();
        $data['data'] = $label;
        echo json_encode($data);
    }

}
