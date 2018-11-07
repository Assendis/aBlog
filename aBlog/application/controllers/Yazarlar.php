<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yazarlar extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		if(! $this->session->userdata('uye_session'))
		{
			redirect(base_url().'Home/Login/');
		}
		

		$this->load->model('Database_Model');

	}
	
	public function yazarlar()
	{
		$query=$this->db->get("yazarlar");
		$data{"veri"}=$query->result();
		$this->load->view('_header');
		$this->load->view('_main_container');
		$this->load->view('_aboutme', $data);
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

	public function gonderim()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "login";
		$data["sayfa"]= "Gönderim";


		$id=$this->session->uye_session["id"];

		$query=$this->db->query("SELECT *FROM yazilar WHERE uye_id=$id");
		$data["veri"]= $query->result();
		$this->load->view('_header', $data);
		$this->load->view('_gonderim', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function AboutMe()
	{
		$query=$this->db->get("editorler");
		$data{"veri"}=$query->result();
		$this->load->view('_header');
		$this->load->view('_aboutme', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function bilgi()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "bilgi";
		$data["sayfa"]= "Bilgi";
		//$query=$this->db->get("ayarlar");
		//$data["veri"]=$query->result();
		//$data["sayfa"]="İletişim";
		$query=$this->db->get("sairler");
		$data{"veri"}=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('_bilgi', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function favori()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "favori";
		$data["sayfa"]= "Favorilerim";
		$this->load->view('_header', $data);
		$this->load->view('_favori');
		$this->load->view('_base');
		$this->load->view('_footer');
	}

public function detay($id)
	{
		$query=$this->db->query("SELECT *FROM yazilar WHERE id=$id ");
		$data["veri1"]= $query->result();
		$data["menu"]= "detay";
		$data["sayfa"]= "Detay";

		$data["veri"]= $query->result();

		$this->load->view('_header', $data);
		$this->load->view('_detay', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}


	public function bekleyen()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "gonderi";
		$data["sayfa"]= "Bekleyen Gönderiler";


		$id=$this->session->uye_session["id"];

		$query=$this->db->query("SELECT *FROM yazilar WHERE uye_id=$id AND durum='yeni'");
		$data["veri"]= $query->result();

		

		
		$data["sayfa"]="Hakkımızda";
		$this->load->view('_header', $data);
		$this->load->view('_bekleyen', $data);
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function gonderi()
	{  $query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri1"]= $query->result();
		$data["menu"]= "gonderi";
		$data["sayfa"]= "Gönderiler";
		$this->load->view('_header', $data);
		$this->load->view('_gonderi');
		$this->load->view('_base');
		$this->load->view('_footer');
	}

	public function gonderiyayinla()
	{
		$data =array(
					'baslik'=>$this->input->post('baslik'),
					'yazi'=>$this->input->post('mesaj'),
					'resim'=>$this->input->post('resim'),
					'yazar'=>$this->session->uye_session["ad"],
					'uye_id'=>$this->input->post('userId'),
					
				
				);
			$this->Database_Model->insert_data("yazilar",$data);
			$this->session->set_flashdata("sonuc","Mesajınız onaylanması için gönderilmiştir. En kısa sürede iletişime geçilecektir.");
			redirect(base_url().'Yazarlar/gonderi');



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


		public function sepete_ekle($id)
		{
			$data=array(
		'durum' => $this->input->post('durum'),
		'yazi' => $this->input->post('yazi'),
		'baslik' => $this->input->post('baslik'),
		'uye_id'=> $this->session->uye_session["id"],
		'yazar' => $this->input->post('yazar'),
		'resim' => $this->input->post('resim'),
		'aciklama' => $this->input->post('aciklama'),
		
		);
		
		

		$this->db->insert("sepet",$data);
		$this->session->set_flashdata("mesaj","Urun Sepete Eklendi");
		redirect(base_url().'Yazarlar/detay/'.$this->input->post('urunid'));

		}

		public function sepetim()
		{
			
		
			$query=$this->db->query("SELECT *FROM ayarlar");
		    $data['veri1']= $query->result();
		    $data['sayfa']="Sepetim";
			$data['menu']="sepetim";

			$id=$this->session->uye_session["id"];

			$query=$this->db->query("SELECT * FROM sepet WHERE uye_id=$id AND durum='yeni' ");
	    	$data['veriler']= $query->result();
			
			
			 
			 $this->load->view('_header',$data);
			 $this->load->view('_favori',$data);
			 $this->load->view('_base',$data);
			 $this->load->view('_footer');
			
		}


	
}
