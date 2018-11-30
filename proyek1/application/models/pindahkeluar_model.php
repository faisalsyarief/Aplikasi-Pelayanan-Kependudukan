<?php

class pindahkeluar_model extends CI_Model{
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
        $this->db->where('nik_pindah',$id)->update($table,$data);
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
    public function getAllDataPindahkeluar()
    {
        $this->db->order_by('nik_pindah', 'ASC');
        $query = $this->db->get('data_daerah');
        return $query->result();
    }
    function getDataPindahkeluarEdit($id){
        return $this->db->query("SELECT * from data_daerah where nik_pindah = '$id' ")->result();
    }

    function caridata(){
    $c = $this->input->POST ('cari');
    $this->db->like('nik_pindah', $c);
    $query = $this->db->get ('data_daerah');
    return $query->result(); 
    }
 
}