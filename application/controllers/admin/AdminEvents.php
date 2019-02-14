<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminEvents extends CI_Controller{
     function __construct(){
        parent::__construct();
         $this->load->model('admin/event_model', 'm');

         if(!$this->session->userdata('admin'))
             redirect(admin); 
    }
    function index(){
        print_r($this->session->userdata);
        $this->load->view('admin/adminEvent');

    
}
    
 function showAllEvents(){
   
 $data = $this->m->showAllEvents_list();
     echo json_encode($data);
    
     
     
 }  
    
}

?>