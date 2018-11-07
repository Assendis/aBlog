<div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Main Column -->
                               <div id="content">
                        <div class="container">
                            <div class="container">
                                <div class="row margin-vert-30">
                                    <!-- Login Box -->
                                    
                                     <form action="<?=base_url()?>Home/bilgi_guncelle/<?=$veri[0]->id?>" class="signup-page" method="post">
                                      
                                        <label>Ad</label>
                                        <input value="<?=$veri[0]->ad?>" id="ad" name="ad" class="form-control margin-bottom-20" type="text">
                                        <label>Soyad</label>
                                        <input value="<?=$veri[0]->soyad?>" id="soyad" name="soyad" class="form-control margin-bottom-20" type="text">
                                        <label>Email Adresi</label>
                                        <input value="<?=$veri[0]->email?>" id="email" name="email" class="form-control margin-bottom-20" type="text">
                                        <label>Facebook</label>
                                        <input value="<?=$veri[0]->facebook?>" id="facebook" name="facebook" class="form-control margin-bottom-20" type="text">
                                        <label>Twitter</label>
                                        <input value="<?=$veri[0]->twitter?>" id="twitter" name="twitter" class="form-control margin-bottom-20" type="text">
                                        <label>Hakkımda</label>
                                        <input value="<?=$veri[0]->hakkinda?>" id="hakkinda" name="hakkinda" class="form-control margin-bottom-20" type="text">
                                        
                                       
                                        
                                        <div class="row">
                                            
                                            <div class="col-lg-4 text-right">
                                                <button class="btn btn-primary" type="submit">GÜNCELLE</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                        
                                    </div>
                                    <!-- End Login Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                                <!-- End Main Column -->
                            </div>
                        </div>
                    </div>