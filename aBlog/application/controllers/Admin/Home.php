<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		if(! $this->session->userdata('oturum_data'))
		{
			redirect(base_url().'Admin/Login/');
		}
		$this->load->database();
		$this->load->model('Database_Model');


	}
	
	public function index()
	{

		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
		$this->load->view('Admin/_main_container');
		$this->load->view('Admin/_footer');
	}

	

	public function Mesajlar()
	{

		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');

		$query=$this->db->query("SELECT * FROM mesajlar");
		$data["veri"]=$query->result();

		$this->load->view('Admin/_mesajlar', $data);
		$this->load->view('Admin/_footer');
	}

	public function Tablolar()
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
		$this->load->view('Admin/_main_container');
		$this->load->view('Admin/_footer');
	}


	public function ayarlar()
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$this->load->view('admin/_ayarlar', $data);
		$this->load->view('Admin/_footer');
	}



public function bekleyen()
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');

		$query=$this->db->query("SELECT * FROM yazilar WHERE durum='yeni' ");
		$data["veri"]=$query->result();

		$this->load->view('admin/_bekleyen', $data);
		$this->load->view('Admin/_footer');
	}

	public function ayarlarguncelle($id)
	{
	
			$data =array(
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'mobile'=>$this->input->post('mobile'),
					'description'=>$this->input->post('description'),
					'city'=>$this->input->post('city'),
					'password'=>$this->input->post('password'),
					'adress'=>$this->input->post('adress'),
					'aboutme'=>$this->input->post('aboutme'),
					'contact'=>$this->input->post('contact'),
					'facebook'=>$this->input->post('facebook'),
					'twitter'=>$this->input->post('twitter'),
					'instagram'=>$this->input->post('instagram'),
					'smtpserver'=>$this->input->post('smtpserver'),
					'smtpport'=>$this->input->post('smtpport'),
					'smtpemail'=>$this->input->post('smtpemail'),
					
				);

			$this->Database_Model->update_data("ayarlar", $data,$id);
			redirect(base_url().'Admin/Home/ayarlar');
		
	}








}
