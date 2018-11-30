<?php

class aktakematian_model extends CI_Model{
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
        $this->db->where('nik_kematian',$id)->update($table,$data);
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
    public function getAllDataKematian()
    {
        $this->db->select('*');
        $this->db->from('akta_kematian');
        $this->db->join('berkas_kematian', 'akta_kematian.nik_kematian = berkas_kematian.nik_kematian');
        $query = $this->db->get();
        return $query->result();
    }
    function getDataKematianEdit($id){
        return $this->db->query("SELECT * from akta_kematian where nik_kematian = '$id' ")->result();
    }
    function caridata(){
    $c = $this->input->POST ('cari');
    $this->db->select('*');
    $this->db->from('akta_kematian');
    $this->db->join('berkas_kematian', 'akta_kematian.nik_kematian = berkas_kematian.nik_kematian');
    $this->db->like('berkas_kematian.nik_kematian', $c);
    $query = $this->db->get();
    return $query->result(); 
    }
}