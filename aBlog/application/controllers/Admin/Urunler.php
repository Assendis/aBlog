<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {
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
		$sorgu=$this->db->query("SELECT * FROM kategoriler ");
		$data["veriler"]=$sorgu->result();

		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
		$this->load->view('Admin/_urunekle', $data);
		$this->load->view('Admin/_footer');
	}


	public function addsave()
	{
		$data=array(
			'yazar'=>$this->input->post('yazar'),
					'yazi'=>$this->input->post('yazi'),
					'baslik'=>$this->input->post('baslik'),
					'resim'=>$this->input->post('resim'),
					'description'=>$this->input->post('description'),
					'kategori'=>$this->input->post('kategori'),
		);
		$this->db->insert("yazilar",$data);
		$this->session->set_flashdata("sonuc","Kullanıcı Ekleme İşlemi Başarı İle Gerçekleştirildi..");
		redirect(base_url()."Admin/Urunler/urunler");

	}

	public function edit($id)
		{	
			
			$sorgu=$this->db->query("SELECT * FROM kategoriler  ");
			$data["veriler"]=$sorgu->result();

			$data["veri"]=$this->Database_Model->get_urun($id);
			$this->load->view('Admin/_urunduzenle', $data);
			
		}
		public function editSave($id)
		{
			
			$data =array(
					'yazar'=>$this->input->post('yazar'),
					'yazi'=>$this->input->post('yazi'),
					'baslik'=>$this->input->post('baslik'),
					'description'=>$this->input->post('description'),
					'resim'=>$this->input->post('resim'),
					
					
				);
			$this->Database_Model->update_data("yazilar", $data,$id);
			$this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı İle Gerçekleştirildi..");
			redirect(base_url().'Admin/Urunler/urunler');
		}
		public function delete($id)
		{
			$this->db->query("DELETE FROM yazilar WHERE id=$id");
			$this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı İle Gerçekleştirildi..");
			redirect(base_url().'admin/Urunler/urunler');
		}
		public function view($id)
		{
			$sorgu=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$this->load->view('Admin/_urunler', $data);	
		}


		public function resim_ekle($id)
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');

		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
		$data["veri"]=$sorgu->result();

		$data["id"]=$id;
		$this->load->view('Admin/_urunresimekle', $data);

		$this->load->view('Admin/_footer');
	}

		public function resim_kaydet($id)
	{
		
				$this->load->view('Admin/_header');
				$this->load->view('Admin/_sidebar');
				$this->load->view('Admin/_bar');

				$data["id"]=$id;

		 		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim'))
                {
                        $error = $this->upload->display_errors();
						$this->session->set_flashdata("mesaj", "Yüklemede hata oluştu :".$error);

                        $this->load->view('Admin/_urunresimekle',$data);
                }
                else
                {
                        $upload_data = $this->upload->data();
                        


                        $data =array(
							'resim'=>$upload_data["file_name"]
						);


						$this->Database_Model->update_data("yazilar", $data,$id);
						redirect(base_url().'Admin/Urunler/urunler');
                        
                }


                $this->load->view('Admin/_footer');
		
	}






	public function galeri_ekle($id)
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');

		$sorgu=$this->db->query("SELECT * FROM urun_resim WHERE urun_id=$id");
		$data["veriler"]=$sorgu->result();

		$data["id"]=$id;
		$this->load->view('Admin/_galeriekle', $data);

		$this->load->view('Admin/_footer');
	}


public function galeri_sil($urunid, $resimid)
	{
		
		$this->db->query("DELETE  FROM urun_resim WHERE Id=$resimid");
		$this->session->set_flashdata("mesaj", "Resim galeriden silindi.");
		redirect(base_url()."Admin/Urunler/galeri_ekle/". $urunid);

		
	}




		public function galeri_kaydet($id)
	{
		
				$this->load->view('Admin/_header');
				$this->load->view('Admin/_sidebar');
				$this->load->view('Admin/_bar');

				$data["id"]=$id;

		 		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim'))
                {
                        $error = $this->upload->display_errors();
						$this->session->set_flashdata("mesaj", "Yüklemede hata oluştu :".$error);

                        redirect(base_url()."Admin/Urunler/galeri_ekle/".$id);
                }
                else
                {
                        $upload_data = $this->upload->data();
                        


                        $data =array(
                        	'urun_id'=>$id,
							'resim'=>$upload_data["file_name"]
						);

                        $this->Database_Model->insert_data("urun_resim",$data);
		
						
						$this->session->set_flashdata("mesaj", "Resim başarıyla eklendi!");
						redirect(base_url()."Admin/Urunler/galeri_ekle/". $id);
                        
                }


                $this->load->view('Admin/_footer');
		
	}



	
}