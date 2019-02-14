<?php
class Register extends CI_Controller
{
    function index(){
        $this->load->view('admin/register.php');
    }
    function addAdmin(){
        
        $username = $this->input->post('adminemail');
        $username = $this->input->post('adminpaswrd');
    }
}

?>