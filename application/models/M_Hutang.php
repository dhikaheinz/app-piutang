<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Hutang extends CI_Model {

    function view_data(){
        $this->db->select('*');
        $this->db->from('tb_customer');
        $this->db->join('tr_hutang', 'tr_hutang.id_customer = tb_customer.id_customer', 'left');
        $this->db->order_by('tb_customer.id_customer', 'ASC');
        return $query = $this->db->get();
    }

    function insert_user($data){
        $this->db->insert('users', $data);
    }
    
}