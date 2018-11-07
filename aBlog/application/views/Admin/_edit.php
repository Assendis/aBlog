
<?php
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
?>

<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" action="<?=base_url()?>Admin/Members/editSave/<?=$veri[0]->id?>" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">KULLANICI GÜNCELLE</h3>
                    
    				<div class="form-group">
						<input type="text" class="form-control" id="name" value="<?=$veri[0]->ad?>" name="ad" placeholder="Adı" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="soyad" value="<?=$veri[0]->soyad?>" name="soyad" placeholder="Soyadı" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="sifre" value="<?=$veri[0]->sifre?>" name="sifre1" placeholder="Şifre" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="kul_adi" value="<?=$veri[0]->kul_adi?>" name="kul_adi" placeholder="Kullanıcı Adı" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" value="<?=$veri[0]->email?>" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="iletisim" value="<?=$veri[0]->iletisim?>" name="iletisim" placeholder="İletisim" required>
					</div>
					
                   
        <button type="submit"  id="submit" name="submit" class="btn btn-primary pull-right" ">KULLANICI GÜNCELLE<a></a></button>
        </form>
    </div>
</div>
</div>

<?php
		$this->load->view('Admin/_footer');
		
?>