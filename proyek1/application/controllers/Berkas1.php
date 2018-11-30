<?php
class Berkas1 extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model('berkas1_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload');
    }

    function index(){
            $data=array(
            'title'=>'Data Berkas1',
            'data_berkas1' =>$this->berkas1_model->getAllDataBerkas1(),
            
        );
        $this->load->view('admin/berkas1',$data);
    }

     function tambah(){

      $this->form_validation->set_rules('nikk', 'NIK', 'required|numeric');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/berkas1');
      } else {

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
        $config['remove_spaces']  = FALSE;
      
        $upload_error=array();
        $this->upload->initialize($config);
        for($i=0; $i<count($_FILES['gambar']['name']); $i++)
        {
            $_FILES['userfile']['name']= $_FILES['gambar']['name'][$i];
            $_FILES['userfile']['type']= $_FILES['gambar']['type'][$i];
            $_FILES['userfile']['tmp_name']= $_FILES['gambar']['tmp_name'][$i];
            $_FILES['userfile']['error']= $_FILES['gambar']['error'][$i];
            $_FILES['userfile']['size']= $_FILES['gambar']['size'][$i];
            
            if (!$this->upload->do_upload())
            {
                // fail
               $gambar="";
               $gbkk="";
               $gban="";
               $gbrt="";
               $gbrw="";
               echo $this->upload->display_errors();
              
            }
            else {
              echo $fileName = $_FILES['gambar']['name'][$i];
               $images[$i] = $fileName;
            }
        }
       
        $gambar=$images[0];
        $gbkk=$images[1];
        $gban=$images[2];
        $gbrt=$images[3];
        $gbrw=$images[4];
          
        $data=array(
            //'id_berkass'=>$this->session->userdata('ID'),
            'nik_kematian'=>$this->input->post('nikk'),
            'ftcop_akta_kelahiran'=>$gambar,
            'ftcop_akta_perkawinan'=>$gbkk,
            'ktpp'=>$gban,
            'srt_ket_rt'=>$gbrt,
            'srt_ket_rw'=>$gbrw,
        );
        
        $this->berkas1_model->insertData('berkas_kematian',$data,$id);
        redirect("Berkas1");
        }
    }

    function hapus(){
        $id['id_berkass'] = $this->uri->segment(3);
        $this->berkas1_model->deleteData('berkas_kematian',$id);

        $this->session->set_flashdata('notif','Hapus Berkas Berhasil');
        redirect("Berkas1");
    }

    function editberkas($id){
            $data=array(
            'title'=>'Edit Berkas1',
            'data_berkas1'=>$this->berkas1_model->getDataBerkas1Edit($id),
        );
        $this->load->view('admin/edit_berkas1',$data);
    } 

     function simpanedit($id){

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
        $config['remove_spaces']  = FALSE;
      
        $upload_error=array();
        $this->upload->initialize($config);
        for($i=0; $i<count($_FILES['gambar']['name']); $i++)
        {
            $_FILES['userfile']['name']= $_FILES['gambar']['name'][$i];
            $_FILES['userfile']['type']= $_FILES['gambar']['type'][$i];
            $_FILES['userfile']['tmp_name']= $_FILES['gambar']['tmp_name'][$i];
            $_FILES['userfile']['error']= $_FILES['gambar']['error'][$i];
            $_FILES['userfile']['size']= $_FILES['gambar']['size'][$i];
            
            if (!$this->upload->do_upload())
            {
                // fail
               $gambar="";
               $gbkk="";
               $gban="";
               $gbrt="";
               $gbrw="";
               echo $this->upload->display_errors();
              
            }
            else {
              echo $fileName = $_FILES['gambar']['name'][$i];
               $images[$i] = $fileName;
            }
        }
       
        $gambar=$images[0];
        $gbkk=$images[1];
        $gban=$images[2];
        $gbrt=$images[3];
        $gbrw=$images[4];
          
        $data=array(
            //'id_berkass'=>$this->session->userdata('ID'),
            'nik_kematian'=>$this->input->post('nikk'),
            'ftcop_akta_kelahiran'=>$gambar,
            'ftcop_akta_perkawinan'=>$gbkk,
            'ktpp'=>$gban,
            'srt_ket_rt'=>$gbrt,
            'srt_ket_rw'=>$gbrw,
        );
        
        $this->berkas1_model->updateDatab('berkas_kematian',$data,$id);
        redirect("Berkas1");
    }
    
    function cari() {
       $data['data_berkas1']=$this->berkas1_model->caridata();
       if($data['data_berkas1']==null) {
          print 'Maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('Berkas1','kembali');
          }
          else {
             $this->load->view('admin/berkas1',$data); 

          }
    }
}