<script src="<?=base_url()?>assets/css/ckeditor/ckeditor.js"></script>


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
					<textarea name="yazi" rows="10" cols="58"></textarea>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="baslik"  name="baslik" placeholder="Başlık" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="description"  name="description" placeholder="Açıklama" required>
					</div>

					<div class="form-group">
						

				<select name="kategori">
					<?php foreach($veriler as $rs) { ?>
				  <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
				 <?php } ?>
				</select>
				
					</div>



					
					
                   
        <button type="submit"  id="submit" name="submit" class="btn btn-primary">KULLANICIYI EKLE<a></a></button>
        </form>

    </div>
</div>
</div>



 <script src="<?=base_url()?>assets/css/ckeditor/ckeditor.js"></script>
                    <script>
                        $(function(){
                            CKEDITOR.replace('yazi')
                            $('.textarea').wysihtml5()
                        })
                    </script>
		

