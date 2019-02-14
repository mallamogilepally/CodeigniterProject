<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
     function __construct(){
         
        parent::__construct();
         if(!$this->session->userdata('admin'))
             redirect(admin); 
    }
    function index(){
        $this->load->view('admin/dashboard');
       print_r($this->session->userdata);
    
}
}

?>