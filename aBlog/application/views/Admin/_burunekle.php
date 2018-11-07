


<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" action="<?=base_url()?>Admin/Urunler/addsave" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">YAZI EKLE</h3>
                    
    				<div class="form-group">
						<input type="text" class="form-control" id="yazar"  name="yazar" placeholder="Yazar Adı" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="yazi"  name="yazi" placeholder="Yazı" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="baslik"  name="baslik" placeholder="Başlık" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="description"  name="description" placeholder="Açıklama" required>
					</div>
					<div class="form-group">
						<input type="file" class="form-control" id="resim"  name="resim" placeholder="Resim" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="kategori"  name="kategori" placeholder="Kategori" required>
					</div>
					
                   
        <button type="submit"  id="submit" name="submit" class="btn btn-primary pull-right" ">KULLANICIYI EKLE<a></a></button>
        </form>
    </div>
</div>
</div>





