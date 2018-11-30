<?php
class Data_User extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        
        $this->load->model('user_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload');
    }

    function index(){
            $data=array(
            'title'=>'Data User',
            'data_user' =>$this->user_model->getAllDataUser(),
            
        );
        $this->load->view('admin/data_user',$data);
    }

    function edituser($id){
            $data=array(
            'title'=>'Edit Data User',
            'data_user'=>$this->user_model->getDataUserEdit($id),
        );
        $this->load->view('admin/edit_user',$data);
    } 

    function tambah(){
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
                
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar')){
                $gambar="";
        }else{
                $gambar=$this->upload->file_name;
        } 
        $pass=MD5($this->input->post('passwd'));

        $data=array(
            'id_user'=>$this->input->post('ID'),
            'nama_user'=>$this->input->post('nmadmin'),
            'username'=>$this->input->post('username'),
            'password'=>$pass,
            'email'=>$this->input->post('email'),
            'foto_user'=>$gambar,
        );
        $this->user_model->insertData('user',$data);
        $this->session->set_flashdata('notif','Tambah User Berhasil');
        redirect("Data_User");
    }

    function simpanuser($id){
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
                
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar')){
                $gambar="";
        }else{
                $gambar=$this->upload->file_name;
        }

        $pass=MD5($this->input->post('passwd'));

        $data=array(
            'id_user'=>$this->input->post('ID'),
            'nama_user'=>$this->input->post('nmadmin'),
            'username'=>$this->input->post('username'),
            'password'=>$pass,
            'email'=>$this->input->post('email'),
            'foto_user'=>$gambar,
        );
        $this->user_model->updateDatab('user',$data, $id);
        $this->session->set_flashdata('notif','Edit User Berhasil');
        redirect("Data_User");
    }

    function hapus(){
        $id['id_user'] = $this->uri->segment(3);
        $this->user_model->deleteData('user',$id);

        $this->session->set_flashdata('notif','Hapus User Berhasil');
        redirect("Data_User");
    }

    function profile()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('/admin/profile_user');

    }
}