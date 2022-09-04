<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shipping_Model
 *
 * @author Mahmudul Hasan Khan CSE
 */
class Shipping_Model extends CI_Model {
    //put your code here
    
    public function insert_shipping_info($data) {
        
        $value_return = $this->db->insert("tbl_shipping", $data);
        if($value_return > 0){
            $sdata = array();
            $sdata["shipping_id"] = $this->db->insert_id();
            $this->session->set_userdata($sdata);
        }
        return $value_return;
        
    }
}
