<?php


class Database_Model extends CI_Model {
public function __construct()
	{
		parent::__construct();
		
	}

		public function insert_data($table, $data)
		{
			$this->db->insert($table, $data);
			return true;
		}
		public function update_data($table, $data, $id)
		{
			$this->db->where("Id",$id);
			$this->db->update($table,$data);

			return true;
		}

		function get_urunler()
    {
        $query = $this->db->query('SELECT yazilar.*, kategoriler.adi as katadil
        FROM yazilar
        INNER JOIN kategoriler ON yazilar.kategori=kategoriler.Id order by adi ' );
        return $query->result();
    }

    	function get_urun($id)
    {
        $query = $this->db->query('SELECT yazilar.*, kategoriler.adi as katadil
        FROM yazilar
        INNER JOIN kategoriler ON yazilar.kategori=kategoriler.Id
        WHERE yazilar.id='.$id);
        return $query->result();
    }

    public function login($tablo, $email, $sifre)
	{


		
		$this->db->select('*');
		$this->db->from($tablo);
		$this->db->where('email', $email);
		$this->db->where('sifre', $sifre);
		
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
		
	}


	function sepet_urunler($id)
	{
		$query=$this->db->query('SELECT sepet.*,yazilar.resim as urunresmi, yazilar.adi as urunadi, yazilar.yazi as yazyazi)
		FROM sepet 
		LEFT JOIN yazilar ON yazilar.Id=sepet.urun_id
		WHERE sepet.uye_id='.$id);	
		return $query->result();
	}
	



}