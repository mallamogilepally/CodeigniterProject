<?php
class event_model extends CI_model{ 
    
  function showAllEvents_list(){
        $hasil=$this->db->get('blog_events');
        return $hasil->result();
}
      
}

?>