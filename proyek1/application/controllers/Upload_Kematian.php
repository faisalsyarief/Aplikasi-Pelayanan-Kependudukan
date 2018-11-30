<?php
class Upload_Kematian extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model('berkas1_model');

        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload');
    }

    function index(){
            $data=array(
            'title'=>'Data Berkas1',
            'data_berkas1' =>$this->berkas1_model->getAllDataBerkas1(),
            
        );
        $this->load->view('web/upload_kematian',$data);
    }

    function index1(){
            $data=array(
            'title'=>'Data Berkas1',
            'data_berkas1' =>$this->berkas1_model->getAllDataBerkas1(),
            
        );
        $this->load->view('admin/upload_kematian',$data);
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
            //'nik_kematian'=>$this->input->post('nikk'),
            'ftcop_akta_kelahiran'=>$gambar,
            'ftcop_akta_perkawinan'=>$gbkk,
            'ktpp'=>$gban,
            'srt_ket_rt'=>$gbrt,
            'srt_ket_rw'=>$gbrw,
        );
        
        $this->berkas1_model->updateDatab('berkas_kematian',$data,$id);
        redirect("Aktakematian/indexweb");
    }

    function simpanedit1($id){

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
            //'nik_kematian'=>$this->input->post('nikk'),
            'ftcop_akta_kelahiran'=>$gambar,
            'ftcop_akta_perkawinan'=>$gbkk,
            'ktpp'=>$gban,
            'srt_ket_rt'=>$gbrt,
            'srt_ket_rw'=>$gbrw,
        );
        
        $this->berkas1_model->updateDatab('berkas_kematian',$data,$id);
        redirect("Aktakematian");
    }
}