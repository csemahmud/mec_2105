<?php if( ! defined('BASEPATH')) exit('No Direct Script access Allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shipping_Controller
 *
 * @author Mahmudul Hasan Khan CSE
 */
class Shipping_Controller extends CI_Controller {
    //put your code here
    
    public function save_shipping_info() {

        $data = array();
        $data["s_first_name"] = $this->input->post("s_first_name", TRUE);
        $data["s_last_name"] = $this->input->post("s_last_name", TRUE);
        $data["s_email"] = $this->input->post("s_email", TRUE);
        $data["s_mobile"] = $this->input->post("s_mobile", TRUE);
        $data["s_phone"] = $this->input->post("s_phone", TRUE);
        $data["s_fax"] = $this->input->post("s_fax", TRUE);
        $data["s_company"] = $this->input->post("s_company", TRUE);
        $data["s_address"] = $this->input->post("s_address", TRUE);
        $data["s_city"] = $this->input->post("s_city", TRUE);
        $data["s_country"] = $this->input->post("s_country", TRUE);
        $data["s_zip_code"] = $this->input->post("s_zip_code", TRUE);
        $sdata = array();
        if($this->shipping_model->insert_shipping_info($data) > 0){
            $sdata["alert"] = "SAVED Shipping Information Successfully .";
        } else {
            $sdata["alert"] = "Could NOT Save Shipping Information";
        }
        $this->session->set_userdata($sdata);
        redirect("payment_controller");
        
    }
    
    public function shipping_same_as_billing() {

        $sdata = array();
        $customer_id = $this->session->userdata("customer_id");
        if($customer_id != NULL) {
            $data = array();
            $data["s_first_name"] = $this->input->post("s_first_name", TRUE);
            $data["s_last_name"] = $this->input->post("s_last_name", TRUE);
            $data["s_email"] = $this->input->post("s_email", TRUE);
            $data["s_mobile"] = $this->input->post("s_mobile", TRUE);
            $data["s_phone"] = $this->input->post("s_phone", TRUE);
            $data["s_fax"] = $this->input->post("s_fax", TRUE);
            $data["s_company"] = $this->input->post("s_company", TRUE);
            $data["s_address"] = $this->input->post("s_address", TRUE);
            $data["s_city"] = $this->input->post("s_city", TRUE);
            $data["s_country"] = $this->input->post("s_country", TRUE);
            $data["s_zip_code"] = $this->input->post("s_zip_code", TRUE);
            $sdata = array();
            if($this->shipping_model->insert_shipping_info($data) > 0){
                $sdata["alert"] = "SAVED Shipping Information Successfully .";
            } else {
                $sdata["alert"] = "Could NOT Save Shipping Information";
            }
        } else {
            $sdata["alert"] = "No Customer is Logged in.";
        }
        $this->session->set_userdata($sdata);
        redirect("payment_controller");
        
    }

}