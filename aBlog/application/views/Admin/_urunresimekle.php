



<div class="container">
<div class="col-md-5">
    <div class="form-area">  
         </br></br>
							
         				<?php if ($this->session->flashdata("mesaj")) { ?>
								<div class="alert alert-info">
                                	Hata! <a href="#" class="alert-link"></a>
                                	<p><?=$this->session->flashdata("mesaj")?></p>
                            	</div>
                         <?php } ?>






                           </br></br>

        *Yüklenebilecek resim dosyası türleri : gif|jpg|png
        Max. Boyut : 1024x1024, 1000Kb	 

        <form role="form" enctype="multipart/form-data" action="<?=base_url()?>Admin/Urunler/resim_kaydet/<?=$id?>" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Eklenecek Resmi Seçiniz</h3>
                    
    				<div class="form-group">
						<input type="file" class="form-control"  name="resim" placeholder="Yükleme İçin Gözat" required>
					</div>
					
					
                   
        <button type="submit"  id="submit" name="submit" class="btn btn-primary pull-right" ">RESİM EKLE</button>
        </form>
        <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="200" weight="200">
    </div>
</div>
</div>


