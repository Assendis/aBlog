<div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Main Column -->
                                <div class="col-md-9">
                                    <!-- Main Content -->
                                    <div class="headline">
                                        <h2>İletişim</h2>

                                        <?php if ($this->session->flashdata("mesaj")) { ?>
                                <div class="alert alert-info">
                                    Hata! <a href="#" class="alert-link"></a>
                                    <p><?=$this->session->flashdata("mesaj")?></p>
                                </div>
                         <?php } ?>

                                    </div>
                                    
                                    <br>
                                    <!-- Contact Form -->
                                    <form method="post" action="<?=base_url()?>home/mesaj_kaydet">
                                        <label>Ad-Soyad</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input name="adsoy" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <label>Email
                                            
                                        </label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input name="email" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <label>Telefon</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input name="telefon" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <label>Masajınız</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-8 col-md-offset-0">
                                                <textarea name="mesaj" rows="8" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <p>
                                            <button type="submit" class="btn btn-primary">Gönder</button>
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