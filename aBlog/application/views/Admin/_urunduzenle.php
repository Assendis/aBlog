<script src="<?=base_url()?>assets/css/ckeditor/ckeditor.js"></script>
<?php
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/_bar');
?>

<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" action="<?=base_url()?>Admin/Urunler/editSave/<?=$veri[0]->id?>" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">YAZIYI GÜNCELLE</h3>
                    
    				
					
					
					
					
					<div class="form-group">
					<textarea name="description" rows="5" cols="50"><?=$veri[0]->description?></textarea>
					</div>
					<div class="form-group">
					<textarea name="description" rows="5" cols="50"><?=$veri[0]->baslik?></textarea>
					</div>
					<div class="form-group">
					<textarea name="yazi" rows="30" cols="200"><?=$veri[0]->yazi?></textarea>
					</div>
					
					<div class="form-group">
						<input type="file" class="form-control" id="resim" value="<?=$veri[0]->resim?>" name="resim" placeholder="Resim">
					</div>
					<div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control">
                                            	<option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadil?></option>
                                            	<?php foreach($veriler as $rs) {?>
                                                   <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
                                                <?php } ?>
                                                
                                            </select>
                                        </div>

					
					
                   
        <button type="submit"  id="submit" name="submit" class="btn btn-primary">YAZIYI GÜNCELLE<a></a></button>
        </form>
    </div>
</div>
</div>

<?php
		$this->load->view('Admin/_footer');
?>

		 <script src="<?=base_url()?>assets/css/ckeditor/ckeditor.js"></script>
                    <script>
                        $(function(){
                            CKEDITOR.replace('yazi')
                            $('.textarea').wysihtml5()
                        })
                    </script>
		



