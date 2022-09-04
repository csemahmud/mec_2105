<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order_Model
 *
 * @author Mahmudul Hasan Khan CSE
 */
class Order_Model extends CI_Model {
    //put your code here
    
    public function insert_order_info($data) {
        $value_return = $this->db->insert("tbl_order", $data);
        if($value_return > 0){
            $order_id = $this->db->insert_id();
            $oddata = array();
            $oddata["order_id"] = $order_id;
            $contents = $this->cart->contents();
            foreach ($contents as $v_content) {
                $oddata["product_id"] = $v_content["id"];
                $oddata["order_price"] = $v_content["price"];
                $oddata["subtotal_quantity"] = $v_content["qty"];
                $this->order_details_model->insert_order_details_info($oddata);
            }
            
            $sql = "UPDATE `tbl_product`, `tbl_order_details`"
                    ." SET `tbl_product`.`product_quantity`"
                    ."=`tbl_product`.`product_quantity` - `tbl_order_details`.`subtotal_quantity`"
                    ." WHERE `tbl_product`.`product_id` = `tbl_order_details`.`product_id`"
                    ." AND `tbl_order_details`.`order_id` = '$order_id'";
            
            $this->db->query($sql);
            
            $sql = "UPDATE `tbl_product`, `tbl_order_details`"
                    ." SET `tbl_product`.`sold_quantity`"
                    ."=`tbl_product`.`sold_quantity` + `tbl_order_details`.`subtotal_quantity`"
                    ." WHERE `tbl_product`.`product_id` = `tbl_order_details`.`product_id`"
                    ." AND `tbl_order_details`.`order_id` = '$order_id'";
            
            $this->db->query($sql);
        }
        return $value_return;
    }
}
