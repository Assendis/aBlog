<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model("Admin_Model");
		$this->load->database();
	
	}

	public function index()
	{
		
		$this->load->view('Admin/_login');
	}
	public function Login_ol()
	{
		
			$email = $this->input->post('email', TRUE);
			$sifre = $this->input->post('password', TRUE);
			//Zararlı kodları temizlemek için:
			echo $email = $this->security->xss_clean($email);
			echo $sifre = $this->security->xss_clean($sifre);
			
			$result = $this->Admin_Model->login("members", $email,$sifre);
			
			if($result)
			{	
				// Kullanici var ise bilgileri diziye aktariyor..
				$oturum_dizi = array(
					'id' => $result[0]->id,
					'email' => $result[0]->email,
					'ad' => $result[0]->ad,
					'soyad' => $result[0]->soyad,
				);
				// Dizi verileri Codeigniter Session kütüphanesi değişkenlerine aktariliyor..	
				$this->session->set_userdata('oturum_data', $oturum_dizi);
				
				redirect('/admin/home/');
			}
			else
			{
				$this->session->set_flashdata("login_error", "Geçersiz Email veya Şifre");
				redirect(base_url().'admin/Login/');
			}	
		

		


	}
	public function log_out()
	{
		
		$this->session->unset_userdata('oturum_data');
		$this->session->sess_destroy();
		redirect(base_url().'Admin/Login/');
	}

}