<?php
class Aktakematian extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model('aktakematian_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url','html'));
        
        $this->load->library('upload','table');

    }

    function index(){
			$data=array(
            'title'=>'Data Kematian',
            'data_kematian' =>$this->aktakematian_model->getAllDataKematian(),
			
        );
        $this->load->view('admin/aktakematian',$data);
    }

    function editkematian($id){
            $data=array(
            'title'=>'Edit Kematian',
            'data_kematian'=>$this->aktakematian_model->getDataKematianEdit($id),
        );
        $this->load->view('admin/edit_kematian',$data);
    } 

    function updatekematian($id){
            $data=array(
            'title'=>'Edit Kematian',
            'data_kematian'=>$this->aktakematian_model->getDataKematianEdit($id),
        );
        $this->load->view('admin/update_kematian',$data);
    } 

    function tambah(){
      $this->form_validation->set_rules('nikk', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkepl', 'Nama Ayah', 'required');
      $this->form_validation->set_rules('nmibu', 'Nama Ibu', 'required');
      $this->form_validation->set_rules('nml', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('tmpt', 'Tempat Lahir', 'required');
      $this->form_validation->set_rules('ank', 'Anak Ke', 'required|numeric');
      $this->form_validation->set_rules('tmptk', 'Tempat Kematian', 'required');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/aktakematian');
      } else {

        $data=array(
            'nik_kematian'=>$this->input->post('nikk'),
            'nm_kepala'=>$this->input->post('nmkepl'),
            'nm_ibu'=>$this->input->post('nmibu'),
            'nama_lengkap'=>$this->input->post('nml'),
            'jenis_klm'=>$this->input->post('jns'),
            'tanggl_lahir'=>$this->input->post("tgll"),
            'tmpt_lahir'=>$this->input->post("tmpt"),
            'agama'=>$this->input->post("agm"),
            'alamt'=>$this->input->post("alamt"),
            'ankke'=>$this->input->post("ank"),
            'tgl_kematian'=>$this->input->post("tglk"),
            'sebab_kematian'=>$this->input->post("sbb"),
            'tmpt_kematian'=>$this->input->post("tmptk"),
            'tgl_daftarr'=>date("Y-m-d H:i:s"),
            'statuss'=>$this->input->post("statuss"),
        );
        $nik_kematian=$this->input->post("nikk");
        $this->aktakematian_model->insertData('akta_kematian',$data);
        $sql="insert berkas_kematian(nik_kematian) values (?)";
        $this->db->query($sql,array($nik_kematian));

        $this->session->set_flashdata('notif','Pendaftaran Berhasil');
        redirect("Aktakematian");
        }
    }

    function simpanedit($id){
      $this->form_validation->set_rules('nikk', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkepl', 'Nama Ayah', 'required');
      $this->form_validation->set_rules('nmibu', 'Nama Ibu', 'required');
      $this->form_validation->set_rules('nml', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('tmpt', 'Tempat Lahir', 'required');
      $this->form_validation->set_rules('ank', 'Anak Ke', 'required|numeric');
      $this->form_validation->set_rules('tmptk', 'Tempat Kematian', 'required');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/aktakematian');
      } else {

        $data=array(
            'nik_kematian'=>$this->input->post('nikk'),
            'nm_kepala'=>$this->input->post('nmkepl'),
            'nm_ibu'=>$this->input->post('nmibu'),
            'nama_lengkap'=>$this->input->post('nml'),
            'jenis_klm'=>$this->input->post('jns'),
            'tanggl_lahir'=>$this->input->post("tgll"),
            'tmpt_lahir'=>$this->input->post("tmpt"),
            'agama'=>$this->input->post("agm"),
            'alamt'=>$this->input->post("alamt"),
            'ankke'=>$this->input->post("ank"),
            'tgl_kematian'=>$this->input->post("tglk"),
            'sebab_kematian'=>$this->input->post("sbb"),
            'tmpt_kematian'=>$this->input->post("tmptk"),
            'tgl_ambil'=>$this->input->post("tgll"),
            'statuss'=>$this->input->post("statuss"),
        );
        $this->aktakematian_model->updateDatab('akta_kematian',$data, $id);
        $this->session->set_flashdata('notif','Edit Berhasil');
        redirect("Aktakematian");
      }
    }

    function hapus(){
        $id['nik_kematian'] = $this->uri->segment(3);
        $this->aktakematian_model->deleteData('akta_kematian',$id);

        $this->session->set_flashdata('notif','Hapus Data Berhasil');
        redirect("Aktakematian");
    }

    function cari() {
       $data['data_kematian']=$this->aktakematian_model->caridata();
       if($data['data_kematian']==null) {
          print 'Maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('Aktakematian','kembali');
          }
          else {
             $this->load->view('admin/aktakematian',$data); 

          }
    }

    function indexdaftar(){
            $data=array(
            'title'=>'Data Kematian',
            'data_kematian' =>$this->aktakematian_model->getAllDataKematian(),
            
        );
        $this->load->view('web/daftar_kematian',$data);
    }

    function indexdaftar1(){
            $data=array(
            'title'=>'Data Kematian',
            'data_kematian' =>$this->aktakematian_model->getAllDataKematian(),
            
        );
        $this->load->view('admin/daftar_kematian',$data);
    }

    function daftarkematian(){
      $this->form_validation->set_rules('nikk', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkepl', 'Nama Ayah', 'required');
      $this->form_validation->set_rules('nmibu', 'Nama Ibu', 'required');
      $this->form_validation->set_rules('nml', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('tmpt', 'Tempat Lahir', 'required');
      $this->form_validation->set_rules('ank', 'Anak Ke', 'required|numeric');
      $this->form_validation->set_rules('tmptk', 'Tempat Kematian', 'required');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('web/daftar_kematian');
      } else {
        $data=array(
            'nik_kematian'=>$this->input->post('nikk'),
            'nm_kepala'=>$this->input->post('nmkepl'),
            'nm_ibu'=>$this->input->post('nmibu'),
            'nama_lengkap'=>$this->input->post('nml'),
            'jenis_klm'=>$this->input->post('jns'),
            'tanggl_lahir'=>$this->input->post("tgll"),
            'tmpt_lahir'=>$this->input->post("tmpt"),
            'agama'=>$this->input->post("agm"),
            'alamt'=>$this->input->post("alamt"),
            'ankke'=>$this->input->post("ank"),
            'tgl_kematian'=>$this->input->post("tglk"),
            'sebab_kematian'=>$this->input->post("sbb"),
            'tmpt_kematian'=>$this->input->post("tmptk"),
            'tgl_daftarr'=>date("Y-m-d H:i:s"),
            'statuss'=>$this->input->post("sts"),
        );
        $nik_kematian=$this->input->post("nikk");
        $this->aktakematian_model->insertData('akta_kematian',$data);
        $sql="insert berkas_kematian(nik_kematian) values (?)";
        $this->db->query($sql,array($nik_kematian));
        redirect("Upload_Kematian");
      }
    }

    function daftarkematian1(){
      $this->form_validation->set_rules('nikk', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkepl', 'Nama Ayah', 'required');
      $this->form_validation->set_rules('nmibu', 'Nama Ibu', 'required');
      $this->form_validation->set_rules('nml', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('tmpt', 'Tempat Lahir', 'required');
      $this->form_validation->set_rules('ank', 'Anak Ke', 'required|numeric');
      $this->form_validation->set_rules('tmptk', 'Tempat Kematian', 'required');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('web/daftar_kematian');
      } else {
        $data=array(
            'nik_kematian'=>$this->input->post('nikk'),
            'nm_kepala'=>$this->input->post('nmkepl'),
            'nm_ibu'=>$this->input->post('nmibu'),
            'nama_lengkap'=>$this->input->post('nml'),
            'jenis_klm'=>$this->input->post('jns'),
            'tanggl_lahir'=>$this->input->post("tgll"),
            'tmpt_lahir'=>$this->input->post("tmpt"),
            'agama'=>$this->input->post("agm"),
            'alamt'=>$this->input->post("alamt"),
            'ankke'=>$this->input->post("ank"),
            'tgl_kematian'=>$this->input->post("tglk"),
            'sebab_kematian'=>$this->input->post("sbb"),
            'tmpt_kematian'=>$this->input->post("tmptk"),
            'tgl_daftarr'=>date("Y-m-d H:i:s"),
            'statuss'=>$this->input->post("sts"),
        );
        $nik_kematian=$this->input->post("nikk");
        $this->aktakematian_model->insertData('akta_kematian',$data);
        $sql="insert berkas_kematian(nik_kematian) values (?)";
        $this->db->query($sql,array($nik_kematian));
        redirect("Upload_Kematian/index1");
      }
    }

    function cariweb() {
       $data['monitoring_kematian']=$this->aktakematian_model->caridata();
       if($data['monitoring_kematian']==null) {
          print 'Maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('Aktakematian/indexmonitoring','kembali');
          }
          else {
             $this->load->view('web/carimonitoring_kematian',$data); 

          }
    }

    function bantuankematian()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('/web/bantuan_kematian');
    }

    function indexweb()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('/web/kematian');
    }

    function indexmonitoring() {
        $data['monitoring_kematian'] = $this->aktakematian_model->getAllDataKematian();
        $this->load->view('web/monitoring_kematian',$data);
  
    }
}