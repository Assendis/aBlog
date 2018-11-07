 
<?php

if($this->session->userdata("uye_session")) {

?>

<div class="panel-body" >



<div id="content">
                        <div class="container">
                            <div class="container">
                                <div class="row margin-vert-30">
                                    <!-- Login Box -->
                                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                        <form class="login-page" action="<?=base_url()?>Home/log_out" method="post">
                                            <div class="login-header margin-bottom-30">
                                                <h3>KULLANICI PROFİLİ</h3>
                                            </div>
                                            

                                           
                                            
                                            <a href="<?=base_url()?>Yazarlar/bilgi"><h4>Hesap Bilgilerim</h4></a>
                                            <a href="<?=base_url()?>Yazarlar/sepetim"><input type="hidden" name="userId" value="<?php echo $this->session->uye_session["id"]; ?>"><h4>Favorilerim</h4></a>
                                            <a href="<?=base_url()?>Yazarlar/gonderi"><h4>Gönderi Yaz</h4></a>
                                            <a href="<?=base_url()?>Yazarlar/gonderim"><input type="hidden" name="userId" value="<?php echo $this->session->uye_session["id"]; ?>"><h4>Gönderilerim</h4></a>
                                            
                                            <button type="submit" class="btn btn-primary" >ÇIKIŞ</button>
                                           
                                        </form>
                                    </div>
                                    <!-- End Login Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




                                            

<?php } else { ?>

         <div id="content">
                        <div class="container">
                            <div class="container">
                                <div class="row margin-vert-30">
                                    <!-- Login Box -->
                                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                        <form class="login-page" action="<?=base_url()?>Home/login_ol" method="post">
                                            <div class="login-header margin-bottom-30">
                                                <h2>Hesabına Giriş Yap</h2>
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input name="email" placeholder="email" class="form-control" type="text">
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                <input name="sifre" placeholder="sifre" class="form-control" type="password">
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <button class="btn btn-primary pull-right" type="submit">GİRİŞ YAP</button>
                                                </div>
                                            </br>
                                            </div>

                                            <hr>
                                            <h4>Şifreni mi unuttun?</h4>
                                            <p>Şifreni sıfırlamak için
                                                <a href="<?=base_url()?>yazarlar/sifremi_unuttum">buraya</a> tıkla.</p>
                                        </form>
                                    </div>
                                    <!-- End Login Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
<?php } ?>