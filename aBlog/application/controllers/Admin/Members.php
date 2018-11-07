<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {
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

	public function profil()
	{
		$query=$this->db->get("ayarlar");
		$data{"veri"}=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
		$this->load->view('Admin/_ayarlar',$data);
		$this->load->view('Admin/_footer');
	}

	public function kullanicilar()
	{
		$query=$this->db->get("members");
		$data{"veri"}=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
		$this->load->view('Admin/_table',$data);
		$this->load->view('Admin/_footer');
	}

	public function index()
	{

		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
		$this->load->view('Admin/_main_container');
		$this->load->view('Admin/_footer');
	}

	public function add()
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
		$this->load->view('Admin/_add');
		$this->load->view('Admin/_footer');
	}


	public function addsave()
	{
		$data=array(
			'ad'=>$this->input->post('ad'),
			'soyad'=>$this->input->post('soyad'),
			'email'=>$this->input->post('email'),
			'sifre'=>$this->input->post('sifre'),
			'kul_adi'=>$this->input->post('kul_adi'),
			'iletisim'=>$this->input->post('iletisim'),
		);
		$this->Database_Model->insert_data("members",$data);
		$this->session->set_flashdata("sonuc","Kullanıcı Ekleme İşlemi Başarı İle Gerçekleştirildi..");
		redirect(base_url()."Admin/Members/Kullanicilar");

	}

	public function edit($id)
		{	
			
			$sorgu=$this->db->query("SELECT * FROM members WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$this->load->view('Admin/_edit', $data);
			
		}

		public function editSave($id)
		{
			
			$data =array(
					'ad'=>$this->input->post('ad'),
					'soyad'=>$this->input->post('soyad'),
					'email'=>$this->input->post('email'),
					'sifre'=>$this->input->post('sifre'),
					'kul_adi'=>$this->input->post('kul_adi'),
					'iletisim'=>$this->input->post('iletisim'),
				);
			$this->Database_Model->update_data("members", $data,$id);
			$this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı İle Gerçekleştirildi..");
			redirect(base_url().'Admin/members/Kullanicilar');
		}
		public function delete($id)
		{
			$this->db->query("DELETE FROM members WHERE Id=$id");
			$this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı İle Gerçekleştirildi..");
			redirect(base_url().'admin/members/Kullanicilar');
		}
		public function view($id)
		{
			$sorgu=$this->db->query("SELECT * FROM members WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$this->load->view('Admin/_view', $data);	
		}

}