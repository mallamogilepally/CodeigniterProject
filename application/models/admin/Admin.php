<?php
class Admin extends CI_model{
    function validate(){
        $arr['email'] = $this->input->post('adminemail');
        $arr['password'] = $this->input->post('adminpaswrd');
        
       return $this->db->get_where('admin', $arr)->row();
    }
}
?>