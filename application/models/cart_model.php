<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart_model
 *
 * @author Mahmudul Hasan Khan CSE
 */
class Cart_Model extends CI_Model {
    //put your code here
    
    public function select_categories_by_publication_status($ct_publiction_status) {
        return $this->category_model->select_categories_by_publication_status($ct_publiction_status);
    }
    
    public function select_manufacturers_by_publication_status($mn_publiction_status) {
        return $this->manufacturer_model->select_manufacturers_by_publication_status($mn_publiction_status);
    }
}
