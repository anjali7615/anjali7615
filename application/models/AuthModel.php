<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {
   
    function signup1($param){
        $data = array(
            'name' => $param['Name'],
            'email' => $param['Email'],
            'password' => $param['Password']
                );
		$result=$this->db->insert('signup', $data);
		if($result)
			return TRUE;
		else
			return FALSE;
    }
    
}