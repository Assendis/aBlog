                        <?php
/**
 * Created by PhpStorm.
 * User: Muhammet Emin
 * Date: 11.06.2016
 * Time: 08:21
 */

class Model_new extends CI_Model
{
    public function ($ad,$soyad,$id,$email,$sifre1,$confirm,$kul_adi)
    {
        //$password=md5($password);  //şifreyi veri tabanına şifreli kaydetmek istersek kullanacağız
        $datas=[
            'ad'=>$ad,
            'soyad'=>$soyad,
            'kul_adi'=>$kul_adi,
            'email'=>$email,
            'sifre1'=>$sifre1,
            'confirm'=>$confirm,
            'id'=>$id
        ];

        $insert = $this->db->insert('uyeler',$datas);
        if($insert){  // eğer veri eklenmişse true eklenmemişse false olsun.
            return true;
        }else{
            return false;
        }
    }

    public function emailControl($email){
        $query=$this->db->get_where('uyeler',array('email'=>$email));
        if($query->num_rows()>0)
        {
            return true;    //bu email ile kayıtlı üye varsa true dönder, yoksa false
        }
        else{
            return false;
        }
    }

    public function loginControl($username , $password){
        $query=$this->db->get_where('uyeler',array('username'=>$username,'password'=>$password));
        if($query->num_rows()>0)
        {
            return $query->row(); 
        }
        else{
            return false;   //bu kullanıcı adı ve şifre ile kayıtlı üye varsa true dönder, yoksa false
        }
    }
}