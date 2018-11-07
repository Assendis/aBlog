<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bekleyen extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		if(! $this->session->userdata('oturum_data'))
		{
			redirect(base_url().'Admin/Login/');
		}
		
		$this->load->model('Database_Model');

	}

	public function urunler()
	{
		$query=$this->db->query("SELECT *FROM kategoriler");
		// $query=$this->db->get("yazilar");
		$data{"veriler"}=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');

		$data["veri"]=$this->Database_Model->get_urunler();


		$this->load->view('Admin/_urunlistele',$data);




		$this->load->view('Admin/_footer');




	}

	public function add()
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
		$this->load->view('Admin/_burunekle');
		$this->load->view('Admin/_footer');
	}



	public function yayinla($id)
	{


	
		$this->db->query("UPDATE yazilar SET durum='onaylandi' WHERE id=$id ");
		$this->session->set_flashdata("sonuc","Yayınlama İşlemi Başarı İle Gerçekleştirildi..");
		redirect(base_url()."Admin/Home/bekleyen");

	}



	

	public function bedit($id)
		{	
			
			$sorgu=$this->db->query("SELECT * FROM kategoriler  ");
			$data["veriler"]=$sorgu->result();
			$data["veri"]=$this->Database_Model->get_urun($id);
			//$data["veri"]=$this->Database_Model->get_urun($id);
			$this->load->view('Admin/_burunduzenle', $data);


			
		}
		public function beditSave($id)
		{
			
			$data =array(
					'yazi'=>$this->input->post('yazi'),
					'baslik'=>$this->input->post('baslik'),
					'resim'=>$this->input->post('resim'),
					'uye_id'=>$this->input->post('uye_id'),
					
					

					
					
				);
			$this->Database_Model->update_data("yazilar", $data,$id);
			$this->session->set_flashdata("sonuc","Düzenle İşlemi Başarı İle Gerçekleştirildi..");
			redirect(base_url().'Admin/Home/bekleyen');
		}
		public function bdelete($id)
		{
			$this->db->query("DELETE FROM yazilar WHERE id=$id");
			$this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı İle Gerçekleştirildi..");
			redirect(base_url().'admin/Home/bekleyen');
		}
		public function bview($id)
		{
			$sorgu=$this->db->query("SELECT * FROM yazilar WHERE durum='yeni'");
			$data["veri"]=$sorgu->result();
			$this->load->view('Admin/_bview', $data);	
		}

}