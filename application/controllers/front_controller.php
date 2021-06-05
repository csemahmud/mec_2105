<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of front_controller
 *
 * @author Mahmudul Hasan Khan CSE
 */

class front_controller extends CI_Controller {
    //put your code here/
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
