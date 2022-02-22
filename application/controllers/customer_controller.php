<?php if(! defined('BASEPATH')) exit('No Direct Script access Allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of customer_controller
 *
 * @author Mahmudul Hasan Khan CSE
 */
class Customer_Controller extends CI_Controller {
    //put your code here
    
    public function check_email($customer_email) {
        echo count($this->customer_model->select_customers_by_email($customer_email));
    }
}
