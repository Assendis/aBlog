


<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" action="<?=base_url()?>Admin/Members/addsave" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">YAZI EKLE</h3>
                    
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="ad" placeholder="Adı" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyadı" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="sifre" name="sifre" placeholder="Şifre" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="kul_adi" name="kul_adi" placeholder="Kullanıcı Adı" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="iletisim" name="iletisim" placeholder="İletisim" required>
					</div>
					
                   
        <button type="submit"  id="submit" name="submit" class="btn btn-primary pull-right" ">KULLANICIYI EKLE<a></a></button>
        </form>
    </div>
</div>
</div>


