



<div class="container">
<div class="col-md-5">
    <div class="form-area">  
         </br></br>
							
         				<?php if ($this->session->flashdata("mesaj")) { ?>
								<div class="alert alert-info">
                                	 
                                	<p><?=$this->session->flashdata("mesaj")?></p>
                            	</div>
                         <?php } ?>






                           </br></br>

        *Yüklenebilecek resim dosyası türleri : gif|jpg|png
        Max. Boyut : 1024x1024, 1000Kb	 
        
        <form role="form" enctype="multipart/form-data" action="<?=base_url()?>Admin/Urunler/galeri_kaydet/<?php echo $id?>" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Eklenecek Resmi Seçiniz</h3>
                    
    				<div class="form-group">
						<input type="file" class="form-control"  name="resim" placeholder="Yükleme İçin Gözat" required>
					</div>
					
					
                   
        <button type="submit"  id="submit" name="submit" class="btn btn-primary"> RESİM EKLE </button>
        </form>
        <?php foreach ($veriler as $rs) { ?>
        <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="200" weight="200">
        <a class="btn btn-danger" href="<?=base_url()?>Admin/Urunler/galeri_sil/<?=$id?>/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizden eminmisiniz?');">Sil</a>
        <?php } ?>
    </div>
</div>
</div>


