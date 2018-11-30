<?php

class pindahkeluar1_model extends CI_Model{
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
        $this->db->where('id_tujuan',$id)->update($table,$data);
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
    public function getAllDataTujuan()
    {
        $this->db->order_by('id_tujuan', 'ASC');
        $query = $this->db->get('data_daerah_tujuan');
        return $query->result();
    }
    function getDataTujuanEdit($id){
        return $this->db->query("SELECT * from data_daerah_tujuan where id_tujuan = '$id' ")->result();
    }

    function caridata(){
    $c = $this->input->POST ('cari');
    $this->db->like('nik_pindah', $c);
    $query = $this->db->get ('data_daerah_tujuan');
    return $query->result(); 
    }

}