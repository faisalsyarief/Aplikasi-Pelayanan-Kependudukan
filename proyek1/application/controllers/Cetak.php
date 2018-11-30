<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
	public function index($offset = null)
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		 $this->load->database();
		  $this->load->model('pindahkeluar_model');
		  $this->load->model('pindahkeluar1_model');

		 $id=$this->uri->segment(3);
		 $this->db->select('*');
         $this->db->from('data_daerah');
         $this->db->where('nik_pindah', $id );
	     $query = $this->db->get();
		 $data['cetak_keluar']=$query->result();

		 $nik=$this->uri->segment(4);
		 $this->db->select('*');
         $this->db->from('data_daerah_tujuan');
         $this->db->where('nik_pindah', $nik );
	     $query1 = $this->db->get();
		 $data1['cetak_tujuan']=$query1->result();
		 $this->load->view('web/cetak',array_merge($data,$data1));
		
		}

		public function cetak_kelahiran()
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		 $this->load->database();
		  $this->load->model('aktakelahiran_model');
		  $this->load->model('berkas_model');

		 $nik=$this->uri->segment(3);
		 $this->db->select('*');
         $this->db->from('akta_kelahiran');
         $this->db->where('nik', $nik );
	     $query = $this->db->get();
		 $data['cetak_kelahiran']=$query->result();

		 $id=$this->uri->segment(4);
		 $this->db->select('*');
         $this->db->from('berkas');
         $this->db->where('id_berkas', $id );
	     $query1 = $this->db->get();
		 $data1['cetak_berkaslahir']=$query1->result();
		 $this->load->view('web/cetak_kelahiran',array_merge($data,$data1));
		
		}

		public function acetak_kelahiran()
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		 $this->load->database();
		  $this->load->model('aktakelahiran_model');
		  $this->load->model('berkas_model');

		 $nik=$this->uri->segment(3);
		 $this->db->select('*');
         $this->db->from('akta_kelahiran');
         $this->db->where('nik', $nik );
	     $query = $this->db->get();
		 $data['cetak_kelahiran']=$query->result();

		 $id=$this->uri->segment(4);
		 $this->db->select('*');
         $this->db->from('berkas');
         $this->db->where('id_berkas', $id );
	     $query1 = $this->db->get();
		 $data1['cetak_berkaslahir']=$query1->result();
		 $this->load->view('admin/cetak_kelahiran',array_merge($data,$data1));
		
		}

		public function view_kelahiran()
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		 $this->load->database();
		  $this->load->model('aktakelahiran_model');
		  $this->load->model('berkas_model');

		 $nik=$this->uri->segment(3);
		 $this->db->select('*');
         $this->db->from('akta_kelahiran');
         $this->db->where('nik', $nik );
	     $query = $this->db->get();
		 $data['cetak_kelahiran']=$query->result();

		 $id=$this->uri->segment(4);
		 $this->db->select('*');
         $this->db->from('berkas');
         $this->db->where('id_berkas', $id );
	     $query1 = $this->db->get();
		 $data1['cetak_berkaslahir']=$query1->result();
		 $this->load->view('web/view_kelahiran',array_merge($data,$data1));
		
		}

		public function cetak_kematian()
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		 $this->load->database();
		  $this->load->model('aktakematian_model');
		  $this->load->model('berkas1_model');

		 $nik_kematian=$this->uri->segment(3);
		 $this->db->select('*');
         $this->db->from('akta_kematian');
         $this->db->where('nik_kematian', $nik_kematian );
	     $query = $this->db->get();
		 $data['cetak_kematian']=$query->result();

		 $id=$this->uri->segment(4);
		 $this->db->select('*');
         $this->db->from('berkas_kematian');
         $this->db->where('id_berkass', $id );
	     $query1 = $this->db->get();
		 $data1['cetak_berkasmati']=$query1->result();
		 $this->load->view('web/cetak_kematian',array_merge($data,$data1));
		
		}

		public function acetak_kematian()
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		 $this->load->database();
		  $this->load->model('aktakematian_model');
		  $this->load->model('berkas1_model');

		 $nik_kematian=$this->uri->segment(3);
		 $this->db->select('*');
         $this->db->from('akta_kematian');
         $this->db->where('nik_kematian', $nik_kematian );
	     $query = $this->db->get();
		 $data['cetak_kematian']=$query->result();

		 $id=$this->uri->segment(4);
		 $this->db->select('*');
         $this->db->from('berkas_kematian');
         $this->db->where('id_berkass', $id );
	     $query1 = $this->db->get();
		 $data1['cetak_berkasmati']=$query1->result();
		 $this->load->view('admin/cetak_kematian',array_merge($data,$data1));
		
		}

		public function view_kematian()
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		 $this->load->database();
		  $this->load->model('aktakematian_model');
		  $this->load->model('berkas1_model');

		 $nik_kematian=$this->uri->segment(3);
		 $this->db->select('*');
         $this->db->from('akta_kematian');
         $this->db->where('nik_kematian', $nik_kematian );
	     $query = $this->db->get();
		 $data['cetak_kematian']=$query->result();

		 $id=$this->uri->segment(4);
		 $this->db->select('*');
         $this->db->from('berkas_kematian');
         $this->db->where('id_berkass', $id );
	     $query1 = $this->db->get();
		 $data1['cetak_berkasmati']=$query1->result();
		 $this->load->view('web/view_kematian',array_merge($data,$data1));
		
		}
}