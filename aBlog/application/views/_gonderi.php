<script src="<?=base_url()?>assets/css/ckeditor/ckeditor.js"></script>

<div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Main Column -->
                                <div class="col-md-9">
                                    <!-- Main Content -->
                                    <div class="headline">
                                        <h2>Bir Gönderi Yazın</h2>

                                        <?php if ($this->session->flashdata("mesaj")) { ?>
                                <div class="alert alert-info">
                                    Hata! <a href="#" class="alert-link"></a>
                                    <p><?=$this->session->flashdata("mesaj")?></p>
                                </div>
                         <?php } ?>

                                    </div>
                                    
                                    <br>
                                    <!-- Contact Form -->
                                    <form method="post" action="<?=base_url()?>Yazarlar/gonderiyayinla">
                                        <label>Başlık</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input name="baslik" class="form-control" type="text">
                                            </div>
                                        </div>
                                      
                                                <input type="hidden" name="userId" value="<?php echo $this->session->uye_session["id"]; ?>">
                                        <label>Yazı</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-8 col-md-offset-0">
                                                <textarea id="mesaj" name="mesaj" rows="8" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div>

                                        <div class="form-group">
                        <input type="file" class="form-control"  name="resim" placeholder="Yükleme İçin Gözat" required>
                                         </br></br></br>

                                         <input name="id" type="hidden" value="<?=$this->session->uye_session["id"]?>">


                                        <p>
                                            <button type="submit" class="btn btn-primary">Yayınla</button>
                                        </p>
                                    </form>
                                    <!-- End Contact Form -->
                                    <!-- End Main Content -->
                                </div>
                                <!-- End Main Column -->
                                <!-- Side Column -->
                                
                                    <!-- End About -->
                                </div>
                                <!-- End Side Column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


             <script src="<?=base_url()?>assets/css/ckeditor/ckeditor.js"></script>
                    <script>
                        $(function(){
                            CKEDITOR.replace('mesaj')
                            $('.textarea').wysihtml5()
                        })
                    </script>
        