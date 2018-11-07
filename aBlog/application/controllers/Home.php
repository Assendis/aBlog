<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->helper('url');


		
		

		$this->load->database();
		$this->load->model('Database_Model');


	}


	public function kayit_ol()
	{
		$data=array(
			'ad'=>$this->input->post('ad'),
			'soyad'=>$this->input->post('soyad'),
			'email'=>$this->input->post('email'),
			'sifre'=>$this->input->post('sifre'),
			
		);
		$this->Database_Model->insert_data("sairler",$data);
		$this->session->set_flashdata("sonuc","İşlem Başarı İle Gerçekleştirildi..");
		redirect(base_url()."Home");

	}


	public function Login_ol()
	{
		
			$email = $this->input->post('email', TRUE);
			$sifre = $this->input->post('sifre', TRUE);
			//Zararlı kodları temizlemek için:
			echo $email = $this->security->xss_clean($email);
			echo $sifre = $this->security->xss_clean($sifre);
			

			$this->load->model('Database_Model');
			$result = $this->Database_Model->login("sairler", $email, $sifre);
			
			if($result)
			{	
				// Kullanici var ise bilgileri diziye aktariyor..
				$sess_array = array(
					'id' => $result[0]->id,
					'email' => $result[0]->email,
					'ad' => $result[0]->ad,
					'soyad' => $result[0]->soyad,
				);
				// Dizi verileri Codeigniter Session kütüphanesi değişkenlerine aktariliyor..	
				$this->session->set_userdata('uye_session', $sess_array);
				
				redirect(base_url().'Home/Login');
			}
			else
			{
				$this->session->set_flashdata("login_error", "Geçersiz Email veya Şifre");
				redirect(base_url().'Home/Login');
			}	
		

		


	}
	public function log_out()
	{
		
		$this->session->unset_userdata('uye_session');
		$this->session->sess_destroy();
		redirect(base_url().'Home/Login');
	}


	
	
	public function index()
	{
		
		$query=$this->db->query("SELECT * FROM yazilar ORDER BY id");
		$data["yazilar"]=$query->result();

		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "anasayfa";
		$data["sayfa"]= "Ana Sayfa";
		//$query=$this->db->query("SELECT * FROM yazilar WHERE grup="yeni"");
		//$data["yeni"]=$query->result();

		$query=$this->db->query("SELECT * FROM yazilar ORDER BY id");
		$data["veriler"]=$query->result();


		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();


		$this->load->view('_header', $data);
		$this->load->view('_slider', $data);
		$this->load->view('_main_container', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function login()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "login";
		$data["sayfa"]= "Login";
		$this->load->view('_header', $data);
		$this->load->view('_login');
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function AboutMe()
	{
		$query=$this->db->get("sairler");
		$data{"veri"}=$query->result();
		$this->load->view('_header');
		$this->load->view('_aboutme', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function Editorler()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "hakkimizda";
		$data["sayfa"]= "Hakkımızda";

		$query=$this->db->get("yazilar");
		$data{"veri"}=$query->result();
		$this->load->view('_header', $data);
		$this->load->view('_editorler', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function Contact()
	{
		$sorgu=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $sorgu->result();
		$data["menu"]= "iletisim";
		$data["sayfa"]= "İletişim";

		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		$this->load->view('_header', $data);
		$this->load->view('_contact', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function Readus()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "bizeyazin";
		$data["sayfa"]= "Bize Yazın";

		$this->load->view('_header', $data);
		$this->load->view('_readus');
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function AboutUs()
	{


		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "hakkimizda";
		$data["sayfa"]= "Hakkımızda";
		$query=$this->db->get("ayarlar");
	
		$this->load->view('_header', $data);
		$this->load->view('_aboutus', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function Signup()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "hakkimizda";
		$data["sayfa"]= "Hakkımızda";
		$this->load->view('_header', $data);
		$this->load->view('_signup');
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function Blog()
	{
		$this->load->view('_header');
		$this->load->view('_blog');
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function Yazar()
	{
		$query=$this->db->get("editorler");
		$data{"veri"}=$query->result();
		$this->load->view('_header');
		$this->load->view('_yazi', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

		public function mesaj_kaydet()
		{
			
			$data =array(
					'adsoy'=>$this->input->post('adsoy'),
					'email'=>$this->input->post('email'),
					'telefon'=>$this->input->post('telefon'),
					'mesaj'=>$this->input->post('mesaj'),
					'ip'=>$_SERVER['REMOTE_ADDR']
				
				);
			$this->Database_Model->insert_data("mesajlar",$data);
			$this->session->set_flashdata("sonuc","Mesajınız gönderilmiştir. En kısa sürede iletişime geçilecektir.");
			redirect(base_url().'Home/Readus');
		}

			public function bilgi_guncelle($id)
		{
			
			$data =array(
					'ad'=>$this->input->post('ad'),
					'email'=>$this->input->post('email'),
					'soyad'=>$this->input->post('soyad'),
					'twitter'=>$this->input->post('twitter'),
					'facebook'=>$this->input->post('facebook'),
					'hakkinda'=>$this->input->post('hakkinda'),
					
				
				);
			$this->Database_Model->update_data("sairler",$data, $id);
			$this->session->set_flashdata("sonuc","Mesajınız gönderilmiştir. En kısa sürede iletişime geçilecektir.");
			redirect(base_url().'Yazarlar/bilgi');
		}


}
