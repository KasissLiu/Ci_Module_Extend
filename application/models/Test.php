<?php
class Test extends CI_Model{
    
    private $tbl_name = 'admin';
    
    public function __construct(){
        $this->load->database();
    }
    
    
    public function atest()
    {
        $db = $this->db;
      $query = $db->get($this->tbl_name);
      $result = $query->result_array();
      var_dump($result);
      
    }
}