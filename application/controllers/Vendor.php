<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("vendormodel");
       $this->load->library('session');
		}
    
    
        public function new_vendor(){
            $data['vendor_code'] = $this->input->post('vendor_code');
            $data['vendor_name'] = $this->input->post('vendor_name');
            $data['vendor_address'] = $this->input->post('vendor_address');
            $data['contact_person'] =$this->input->post('contact_person');
            $data['email'] = $this->input->post('email');
            $data['batch_qty'] = $this->input->post('batch_qty');
            $data['container_qty'] = $this->input->post('container_qty');
            $data['created_by'] = $this->session->userdata('username');
            $data['create_date'] = date('Y-m-d H:m:s');

            //print_r($data);

            $this->db->insert('m_vendor', $data);
            if ($this->db->affected_rows() == 1) {
                echo "1";
              }else{
                echo "0";
              }
    
        }

        public function view_vendor(){
                $vendor = $this->vendormodel->viewVendor()->result();
                $data["data"] = $vendor;
                echo json_encode($data);
        }

        public function delete_vendor(){
            $id = $this->input->post('vendor_code');
            $this->vendormodel->deleteVendor($id);
        }
    
        public function edit_vendor(){
            $id = $this->input->post('vendor_code');
            $label = $this->vendormodel->getVendor($id)->row();
            echo json_encode($label);
        
          }
          
          public function proses_edit_vendor(){
            $data['vendor_code'] = $this->input->post('vendor_code');
            $data['vendor_name'] = $this->input->post('vendor_name');
            $data['vendor_address'] = $this->input->post('vendor_address');
            $data['contact_person'] =$this->input->post('contact_person');
            $data['email'] = $this->input->post('email');
            $data['batch_qty'] = $this->input->post('batch_qty');
            $data['container_qty'] = $this->input->post('container_qty');
            $data['created_by'] = $this->session->userdata('username');
            $data['create_date'] = date('Y-m-d H:m:s');

            $edit = $this->vendormodel->editVendor($data, $data['vendor_code']);
            if ($this->db->affected_rows() == 1) {
                echo "1";
              }else{
                echo "0";
              }
    
        }

        public function select_item_no(){
            $item_no = $this->vendormodel->get_item_no()->result();
            echo json_encode($item_no);
        }
        
        public function select_vendor(){
            $item_no = $this->vendormodel->get_vendor()->result();
            echo json_encode($item_no);
        }

        public function get_item_name(){
            $item = $this->input->post('item_code');
            $item_no = $this->vendormodel->get_item_name($item)->row();
            echo json_encode($item_no);
        }

        public function get_subcount_vendor(){
            $item = $this->input->post('vendor_code');
            $item_no = $this->vendormodel->get_subcount_vendor($item)->row();
            echo json_encode($item_no);
        }

        public function new_set_vendor(){
         $data['item_no'] = $this->input->post('item_no');
         $cek_item = $this->vendormodel->cek_item($data['item_no'])->result();
         if($cek_item == null){
            $data['item_name'] = $this->input->post('item_name');
            $data['vendor_code'] = $this->input->post('vendor_code');
            $data['process_code'] = $this->input->post('process_code');
            $data['leadtime'] = $this->input->post('leadtime');
            $data['qty_batch'] = $this->input->post('batch_qty');
            $data['qty_container'] = $this->input->post('container_qty');
            $data['created_by'] = $this->session->userdata('username');
            $data['created_date'] = date('Y-m-d H:m:s');

            $this->db->insert('m_vendor_set', $data);
            if ($this->db->affected_rows() == 1) {
                echo "1";
              }else{
                echo "0";
              }
            }else{
              echo "ada";
            }
        }

    public function view_set_vendor(){
            $vendor = $this->vendormodel->viewSetVendor()->result();
            $data["data"] = $vendor;
            echo json_encode($data);
    }

    public function delete_set_vendor(){
        $id = $this->input->post('item_no');
        $this->vendormodel->deleteSetVendor($id);
    }

    public function edit_set_vendor(){
        $id = $this->input->post('item_no');
        $label = $this->vendormodel->getSetVendor($id)->row();
        echo json_encode($label);
    
      }

      public function proses_edit_set_vendor(){
        $data['item_no'] = $this->input->post('item_no');
        $data['item_name'] = $this->input->post('item_name');
        $data['vendor_code'] = $this->input->post('vendor_code');
        $data['process_code'] = $this->input->post('process_code');
        $data['leadtime'] = $this->input->post('leadtime');
        $data['qty_batch'] = $this->input->post('batch_qty');
        $data['qty_container'] = $this->input->post('container_qty');
        $data['created_by'] = $this->session->userdata('username');
        $data['created_date'] = date('Y-m-d H:m:s');

        $edit = $this->vendormodel->editSetVendor($data, $data['item_no']);
        if ($this->db->affected_rows() == 1) {
            echo "1";
          }else{
            echo "0";
          }
    }

    public function select_process(){
      $process= $this->vendormodel->get_process()->result();
      echo json_encode($process);
    }

    public function new_driver(){
      $data['plat_no'] = $this->input->post('plat_no');
      $data['vehicle_name'] = $this->input->post('vehicle_name');
      $data['driver_name'] = $this->input->post('driver_name');
      $data['no_telp'] =$this->input->post('no_telp');

      $this->db->insert('m_driver', $data);
      if ($this->db->affected_rows() == 1) {
          echo "1";
        }else{
          echo "0";
        }

  }

  public function view_driver(){
          $vendor = $this->vendormodel->viewDriver()->result();
          $data["data"] = $vendor;
          echo json_encode($data);
  }

  public function delete_driver(){
      $id = $this->input->post('id_driver');
      $this->vendormodel->deleteDriver($id);
  }

  public function edit_driver(){
      $id = $this->input->post('id_driver');
      $label = $this->vendormodel->getDriver($id)->row();
      echo json_encode($label);
  
    }
    
    public function proses_edit_driver(){
      $id = $this->input->post('id_driver');
      $data['plat_no'] = $this->input->post('plat_no');
      $data['vehicle_name'] = $this->input->post('vehicle_name');
      $data['driver_name'] = $this->input->post('driver_name');
      $data['no_telp'] =$this->input->post('no_telp');

      $edit = $this->vendormodel->editDriver($data, $id);
      if ($this->db->affected_rows() == 1) {
          echo "1";
        }else{
          echo "0";
        }

  }

}
