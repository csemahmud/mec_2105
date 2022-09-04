<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order_Details_Model
 *
 * @author Mahmudul Hasan Khan CSE
 */
class Order_Details_Model extends CI_Model {
    //put your code here
    
    public function insert_order_details_info($oddata) {
        $this->db->insert("tbl_order_details", $oddata);
    }
}
