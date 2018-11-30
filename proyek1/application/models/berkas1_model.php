<?php

class berkas1_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function updateDatab($table,$data,$id)
    {
        $this->db->where('id_berkass',$id)->update($table,$data);
    }
    function deleteData($table,$id)
    {
        $this->db->delete($table,$id);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }
    public function getAllDataBerkas1()
    {
        $this->db->order_by('id_berkass', 'ASC');
        $query = $this->db->get('berkas_kematian');
        return $query->result();
    }
    function getDataBerkas1Edit($id){
        return $this->db->query("SELECT * from berkas_kematian where id_berkass = '$id' ")->result();
    }
    function caridata(){
    $c = $this->input->POST ('cari');
    $this->db->like('nik_kematian', $c);
    $query = $this->db->get ('berkas_kematian');
    return $query->result(); 
    }
}