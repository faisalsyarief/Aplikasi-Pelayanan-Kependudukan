<?php

class berkas_model extends CI_Model{
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
        $this->db->where('id_berkas',$id)->update($table,$data);
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
    public function getAllDataBerkas()
    {
        $this->db->order_by('id_berkas', 'ASC');
        $query = $this->db->get('berkas');
        return $query->result();
    }
    function getDataBerkasEdit($id){
        return $this->db->query("SELECT * from berkas where id_berkas = '$id' ")->result();
    }
    function caridata(){
    $c = $this->input->POST ('cari');
    $this->db->like('nik', $c);
    $query = $this->db->get ('berkas');
    return $query->result(); 
    }
}