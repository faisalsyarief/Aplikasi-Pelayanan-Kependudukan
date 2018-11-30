 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
{
    parent::__construct();
    #load_library dan helper yang dibutuhkan
    $this->load->library(array('table','form_validation'));
    $this->load->helper(array('form','url'));
    $this->load->model('login_user','',TRUE);
    $this->load->library('session');
    $this->load->helper('date');
}
public function login() {
        $this->load->model('login_user');
//          ambil detail data
            $result = $this->login_user->data_login($this->input->post('username'), MD5($this->input->post('password')));

            if ($result) {
            $data = array();
            foreach($result as $row) {
                //create the session
                $data = array(
                    'ID' => $row->id_user,
                    'NAMA'=>$row->nama_user,
                    'USERNAME'=>$row->username,
                    'PSWD'=>$row->password,
                    'EMAIL' => $row->email,
                    'FOTO' => $row->foto_user,
                );
//            redirect ke halaman sukses
            $this->session->set_userdata($data);
            redirect('user');
            }
             return TRUE;
            
        } else {
            echo "<script>alert('Anda Yakin Admin Aplikasi Ini: Cek Username dan Password!');history.go(-1);</script>";
//            tampilkan pesan error
                 $data['error'] = 'Invalid Username/Password!';
                 $this->load->view('/web/login', $data);
        }
    }

    public  function logout() {
        $this->session->sess_destroy();
        
        redirect('home');
    }
    
    public function index()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('/admin/index');
    }
}