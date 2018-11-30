<?php

class login_user extends CI_Model {

private $primary_key='id_user';
private $table_name='user';

function __construct () {
    parent ::__construct ();
    }
    function get_paged_list ($limit=10,$offset=0,
    $order_column='',$order_type='asc')
    {
    if (empty ($order_column) || empty ($order_type))
    $this->db->order_by($this->primary_key,'asc');
    else
    $this->db->order_by($order_column,$order_type);
    return $this->db->get($this->table_name,$limit,$offset);
    }
    function view()
    {
    $query = $this->db->select('id_user,nama_user,username,password')
        ->from('user')
        ->get();
    return $query->result() ;
    }
     function data_login($username,$password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
}