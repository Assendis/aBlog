<div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Register Box -->
                                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                    <form action="<?=base_url()?>Home/kayit_ol" class="signup-page" method="post">
                                        <div class="signup-header">
                                            <h2>Yeni hesap oluşturun.</h2>
                                            <p>Zaten üye misiniz?
                                                <a href="<?=base_url()?>Home/Login">TIKLAYIN</a></p>
                                        </div>
                                        <label>Ad</label>
                                        <input id="ad" name="ad" class="form-control margin-bottom-20" type="text">
                                        <label>Soyad</label>
                                        <input id="soyad" name="soyad" class="form-control margin-bottom-20" type="text">
                                        <label>Email Adresi
                                            <span class="color-red">*</span>
                                        </label>
                                        <input id="email" name="email" class="form-control margin-bottom-20" type="text">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Şifre
                                                    <span class="color-red">*</span>
                                                </label>
                                                <input id="sifre" name="sifre" class="form-control margin-bottom-20" type="password">
                                            </div>
                                           
                                        </div>
                                        <hr>
                                        <div class="row">
                                            
                                            <div class="col-lg-4 text-right">
                                                <button class="btn btn-primary" type="submit">KAYIT OL</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Register Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>