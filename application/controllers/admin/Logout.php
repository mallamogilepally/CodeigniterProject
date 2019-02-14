<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
			$this->load->helper(array('url','form','cookie','path'));
		}
		
	public function index()
	{
		$this->session->unset_userdata('admin');
		$this->session->unset_userdata('sessionUserData');
		redirect('login');
		//$this->authentication->logout('welcome');
	}
}