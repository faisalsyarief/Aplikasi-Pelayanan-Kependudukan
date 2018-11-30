<?php
class Pindahdomisili extends CI_Controller{
    function __construct(){
        parent::__construct();
        
         $this->load->database();
        $this->load->model('pindahkeluar_model');
        $this->load->model('pindahkeluar1_model');
        $this->load->helper(array('form', 'url', 'html'));
        
        $this->load->library('upload','table');
    }

    function index(){
			$data=array(
            'title'=>'Data Pindahkeluar',
            'data_pindahkeluar' =>$this->pindahkeluar_model->getAllDataPindahkeluar(),
            'data_pindahkeluar1' =>$this->pindahkeluar1_model->getAllDataTujuan(),
			
        );
        $this->load->view('admin/pindahdomisili',$data);
    }

    function editpindah($id){
            $data=array(
            'title'=>'Edit Pindahkeluar',
            'data_pindahkeluar'=>$this->pindahkeluar_model->getDataPindahkeluarEdit($id),
        );
        $this->load->view('admin/edit_pindahdomisili',$data);
    } 
    
    function tambah(){
      $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkpl', 'Nama Kepala Keluarga', 'required');
      $this->form_validation->set_rules('nm', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('rtrw', 'RT / RW', 'required');
      $this->form_validation->set_rules('prop', 'Provinsi', 'required');
      $this->form_validation->set_rules('kab', 'Kabupaten', 'required');
      $this->form_validation->set_rules('kec', 'Kecamatan', 'required');
      $this->form_validation->set_rules('kel', 'Kelurahan', 'required');
      $this->form_validation->set_rules('pos', 'Kode POS', 'required|numeric');
      $this->form_validation->set_rules('telp', 'Telp', 'required|numeric');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/tambah_pindah');
      } else {

        $data=array(
            'nik_pindah'=>$this->input->post('nik'),
            'nm_lengkap'=>$this->input->post('nm'),
            'nm_kpl_keluarga'=>$this->input->post("nmkpl"),
            'alamat'=>$this->input->post("almt"),
            'rt_rw'=>$this->input->post("rtrw"),
            'propinsi'=>$this->input->post("prop"),
            'kabupaten'=>$this->input->post("kab"),
            'kecematan'=>$this->input->post("kec"),
            'kelurahan'=>$this->input->post("kel"),
            'kd_pos'=>$this->input->post("pos"),
            'telp'=>$this->input->post("telp"),
        );

        $nik_pindah=$this->input->post("nik");
        $this->pindahkeluar_model->insertData('data_daerah',$data);
        $sql="insert data_daerah_tujuan(nik_pindah) values (?)";
        $this->db->query($sql,array($nik_pindah));
        redirect("Pindahdomisili1/indextambahpindah");
        }
    }
    
    function simpanedit($id){
      $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkpl', 'Nama Kepala Keluarga', 'required');
      $this->form_validation->set_rules('nm', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('rtrw', 'RT / RW', 'required');
      $this->form_validation->set_rules('prop', 'Provinsi', 'required');
      $this->form_validation->set_rules('kab', 'Kabupaten', 'required');
      $this->form_validation->set_rules('kec', 'Kecamatan', 'required');
      $this->form_validation->set_rules('kel', 'Kelurahan', 'required');
      $this->form_validation->set_rules('pos', 'Kode POS', 'required|numeric');
      $this->form_validation->set_rules('telp', 'Telp', 'required|numeric');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/Pindahdomisili');
      } else {


        $data=array(
            'nik_pindah'=>$this->input->post('nik'),
            'nm_lengkap'=>$this->input->post('nm'),
            'nm_kpl_keluarga'=>$this->input->post("nmkpl"),
            'alamat'=>$this->input->post("almt"),
            'rt_rw'=>$this->input->post("rtrw"),
            'propinsi'=>$this->input->post("prop"),
            'kabupaten'=>$this->input->post("kab"),
            'kecematan'=>$this->input->post("kec"),
            'kelurahan'=>$this->input->post("kel"),
            'kd_pos'=>$this->input->post("pos"),
            'telp'=>$this->input->post("telp"),
        );
        $nik_pindah=$this->input->post("nik");
        $this->pindahkeluar_model->updateDatab('data_daerah',$data,$id);
        $sql="insert data_daerah_tujuan(nik_pindah) values (?)";
        $this->db->query($sql,array($nik_pindah));
        $this->session->set_flashdata('notif','Edit Berhasil');
        redirect("Pindahdomisili");
      }
    }

    function hapus(){
        $id['nik_pindah'] = $this->uri->segment(3);
        $this->pindahkeluar_model->deleteData('data_daerah',$id);

        $this->session->set_flashdata('notif','Hapus Data Berhasil');
        redirect("Pindahdomisili");
    }

    function cari() {
       $data['data_pindahkeluar']=$this->pindahkeluar_model->caridata();
       if($data['data_pindahkeluar']==null) {
          print 'Maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('Pindahdomisili','kembali');
          }
          else {
             $this->load->view('admin/Pindahdomisili',$data); 

          }
    }

    function indexdaftar(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'=>'Data Pindahkeluar',
            'data_pindahkeluar' =>$this->pindahkeluar_model->getAllDataPindahkeluar(),
            'data_pindahkeluar1' =>$this->pindahkeluar1_model->getAllDataTujuan(),
      
        );
        $this->load->view('web/daftar_pindahkeluar',$data);
    }
    function indexweb()
    {
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->view('/web/pindahkeluar');
    }

    function daftarpindahkeluar(){
      $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkpl', 'Nama Kepala Keluarga', 'required');
      $this->form_validation->set_rules('nm', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('rtrw', 'RT / RW', 'required');
      $this->form_validation->set_rules('prop', 'Provinsi', 'required');
      $this->form_validation->set_rules('kab', 'Kabupaten', 'required');
      $this->form_validation->set_rules('kec', 'Kecamatan', 'required');
      $this->form_validation->set_rules('kel', 'Kelurahan', 'required');
      $this->form_validation->set_rules('pos', 'Kode POS', 'required|numeric');
      $this->form_validation->set_rules('telp', 'Telp', 'required|numeric');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('web/daftar_pindahkeluar');
      } else {

        $data=array(
            'nik_pindah'=>$this->input->post('nik'),
            'nm_lengkap'=>$this->input->post('nm'),
            'nm_kpl_keluarga'=>$this->input->post("nmkpl"),
            'alamat'=>$this->input->post("almt"),
            'rt_rw'=>$this->input->post("rtrw"),
            'propinsi'=>$this->input->post("prop"),
            'kabupaten'=>$this->input->post("kab"),
            'kecematan'=>$this->input->post("kec"),
            'kelurahan'=>$this->input->post("kel"),
            'kd_pos'=>$this->input->post("pos"),
            'telp'=>$this->input->post("telp"),
        );

        $nik_pindah=$this->input->post("nik");
        $this->pindahkeluar_model->insertData('data_daerah',$data);
        $sql="insert data_daerah_tujuan(nik_pindah) values (?)";
        $this->db->query($sql,array($nik_pindah));
        redirect("Pindahdomisili1/indexdaftar");
        }
    }

    function cariweb() {
       $data['cetak_pindahkeluar']=$this->pindahkeluar_model->caridata();
       if($data['cetak_pindahkeluar']==null) {
          print 'Maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('Pindahdomisili/indexmonitoring','kembali');
          }
          else {
             $this->load->view('web/caricetak_pindahkeluar',$data); 

          }
    }

    function bantuanpindahkeluar()
      {
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->view('/web/bantuan_pindahkeluar');
      }

    function indextambah()
      {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('/admin/tambah_pindah');

      }
      function indexmonitoring() {
        $data['cetak_pindahkeluar'] = $this->pindahkeluar_model->getAllDataPindahkeluar();
        $this->load->view('web/cetak_pindahkeluar',$data);
  
    }
    function indexmonitoringadmin() {
        $data['cetak_pindahkeluar'] = $this->pindahkeluar_model->getAllDataPindahkeluar();
        $this->load->view('admin/cetak_pindahkeluar',$data);
  
    }
    function cariadmin() {
       $data['cetak_pindahkeluar']=$this->pindahkeluar_model->caridata();
       if($data['cetak_pindahkeluar']==null) {
          print 'Maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('Pindahdomisili/cariadmin','kembali');
          }
          else {
             $this->load->view('admin/cetak_pindahkeluar',$data); 

          }
    }

}