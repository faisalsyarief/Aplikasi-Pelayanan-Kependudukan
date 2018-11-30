<?php
class Pindahdomisili1 extends CI_Controller {
    function __construct(){
        parent::__construct();

         $this->load->database();
        $this->load->model('pindahkeluar1_model');

       // $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload');
    }

    function index(){
        $id= $this->uri->segment(3);
			$data=array(
            'title'=>'Data Pindahkeluar1',
            'data_pindahkeluar1' =>$this->pindahkeluar1_model->getAllDataTujuan(),
			
        );
        $this->load->view('admin/pindahdomisili1',$data);
    }
    function editdata($id){
            $data=array(
            'title'=>'Edit Data Pindahkeluar1',
            'data_pindahkeluar1'=>$this->pindahkeluar1_model->getDataTujuanEdit($id),
        );
        $this->load->view('admin/edit_pindahdomisili1',$data);
    } 

      function simpanedit($id){
      $this->form_validation->set_rules('rtrww', 'RT / RW', 'required');
      $this->form_validation->set_rules('prov', 'Provinsi', 'required');
      $this->form_validation->set_rules('kabb', 'Kabupaten', 'required');
      $this->form_validation->set_rules('kecc', 'Kecamatan', 'required');
      $this->form_validation->set_rules('kell', 'Kelurahan', 'required');
      $this->form_validation->set_rules('ps', 'Kode POS', 'required|numeric');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('web/daftar_pindahkeluar1');
      } else {
        $data=array(
            //'id_tujuan'=>$this->session->userdata("ID"),
            //'nik_pindah'=>$this->input->post("nik"),
            'almt_tjuan'=>$this->input->post("almtt"),
            'rt_rww'=>$this->input->post("rtrww"),
            'provinsii'=>$this->input->post("prov"),
            'kabupatenn'=>$this->input->post("kabb"),
            'kecamatann'=>$this->input->post("kecc"),
            'kelurahann'=>$this->input->post("kell"),
            'kode_pos'=>$this->input->post("ps"),
        );
       
        $this->pindahkeluar1_model->updateDatab('data_daerah_tujuan',$data,$id);
        redirect("Pindahdomisili1");
    }
  }

    function hapus(){
        $id['id_tujuan'] = $this->uri->segment(3);
        $this->pindahkeluar1_model->deleteData('data_daerah_tujuan',$id);

        $this->session->set_flashdata('notif','Hapus Data Berhasil');
        redirect("Pindahdomisili1");
    }

    function cari() {
       $data['data_pindahkeluar1']=$this->pindahkeluar1_model->caridata();
       if($data['data_pindahkeluar1']==null) {
          print 'Maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('Pindahdomisili1','kembali');
          }
          else {
             $this->load->view('admin/Pindahdomisili1',$data); 

          }
    }

    function indextambahpindah(){
        $id= $this->uri->segment(3);
      $data=array(
            'title'=>'Data Pindahkeluar1',
            'data_pindahkeluar1' =>$this->pindahkeluar1_model->getAllDataTujuan(),
      
        );
        $this->load->view('admin/tambah_pindah1',$data);
    }

      function simpanedittambah($id){
      $this->form_validation->set_rules('rtrww', 'RT / RW', 'required');
      $this->form_validation->set_rules('prov', 'Provinsi', 'required');
      $this->form_validation->set_rules('kabb', 'Kabupaten', 'required');
      $this->form_validation->set_rules('kecc', 'Kecamatan', 'required');
      $this->form_validation->set_rules('kell', 'Kelurahan', 'required');
      $this->form_validation->set_rules('ps', 'Kode POS', 'required|numeric');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/tambah_pindah1');
      } else {
        $data=array(
            //'id_tujuan'=>$this->session->userdata("ID"),
            //'nik_pindah'=>$this->input->post("nik"),
            'almt_tjuan'=>$this->input->post("almtt"),
            'rt_rww'=>$this->input->post("rtrww"),
            'provinsii'=>$this->input->post("prov"),
            'kabupatenn'=>$this->input->post("kabb"),
            'kecamatann'=>$this->input->post("kecc"),
            'kelurahann'=>$this->input->post("kell"),
            'kode_pos'=>$this->input->post("ps"),
        );
       
        $this->pindahkeluar1_model->updateDatab('data_daerah_tujuan',$data,$id);
        redirect("Pindahdomisili");

        }
    }

    function indexdaftar(){
        $id= $this->uri->segment(3);
      $data=array(
            'title'=>'Data Pindahkeluar1',
            'data_pindahkeluar1' =>$this->pindahkeluar1_model->getAllDataTujuan(),
      
        );
        $this->load->view('web/daftar_pindahkeluar1',$data);
    }
    
    function simpaneditdaftar($id){
      $this->form_validation->set_rules('rtrww', 'RT / RW', 'required');
      $this->form_validation->set_rules('prov', 'Provinsi', 'required');
      $this->form_validation->set_rules('kabb', 'Kabupaten', 'required');
      $this->form_validation->set_rules('kecc', 'Kecamatan', 'required');
      $this->form_validation->set_rules('kell', 'Kelurahan', 'required');
      $this->form_validation->set_rules('ps', 'Kode POS', 'required|numeric');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('web/daftar_pindahkeluar1');
      } else {
        $data=array(
            //'id_tujuan'=>$this->session->userdata("ID"),
            //'nik_pindah'=>$this->input->post("nik"),
            'almt_tjuan'=>$this->input->post("almtt"),
            'rt_rww'=>$this->input->post("rtrww"),
            'provinsii'=>$this->input->post("prov"),
            'kabupatenn'=>$this->input->post("kabb"),
            'kecamatann'=>$this->input->post("kecc"),
            'kelurahann'=>$this->input->post("kell"),
            'kode_pos'=>$this->input->post("ps"),
        );
       
        $this->pindahkeluar1_model->updateDatab('data_daerah_tujuan',$data,$id);
        redirect("Pindahdomisili/indexweb");

        }
    }
}
