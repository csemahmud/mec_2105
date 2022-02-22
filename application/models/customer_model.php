<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer_Model
 *
 * @author Mahmudul Hasan Khan CSE
 */
class Customer_Model extends CI_Model {
    //put your code here
    
    public function select_customers_by_email($customer_email) {
        $this->db->select("*");
        $this->db->from("tbl_customer");
        $this->db->where("customer_email", $customer_email);
        return $this->db->get()->result();
    }
}
