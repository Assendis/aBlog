<script src="<?=base_url()?>assets/css/ckeditor/ckeditor.js"></script>


<div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Genel</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">E-Mail</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab" aria-expanded="false">Sosyal</a>
                                </li>
                                <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Hakkımızda</a>
                                </li>
                                <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">İletişim</a>
                                </li>
                            </ul>
                            <form role="form" action="<?=base_url()?>Admin/Home/ayarlarguncelle/<?=$veri[0]->Id?>" method="post">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>Genel Ayarlar</h4></br>
                                    <div class="form-group">
                                            <label>Adı</label>
                                            <input type="text" name="name" value="<?=$veri[0]->name?>" placeholder="Ad-Soyad" class="form-control">
                                            <label>Description</label>
                                            <input type="text" name="description" value="<?=$veri[0]->description?>" placeholder="Ad-Soyad" class="form-control">
                                            <label>Adres</label>
                                            <input type="text" name="adress" value="<?=$veri[0]->adress?>" placeholder="Ad-Soyad" class="form-control">
                                            <label>Telefon</label>
                                            <input type="text" name="mobile" value="<?=$veri[0]->mobile?>" placeholder="Ad-Soyad" class="form-control">
                                            <label>Şehir</label>
                                            <input type="text" name="city" value="<?=$veri[0]->city?>" placeholder="Ad-Soyad" class="form-control">

                                            
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>E-Mail Ayarları</h4>
                                        <div class="form-group">
                                            <label>Smtp Server</label>
                                            <input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>" placeholder="Ad-Soyad" class="form-control">
                                            <label>Smtp Email</label>
                                            <input type="text" name="smtpemail" value="<?=$veri[0]->smtpemail?>" placeholder="Ad-Soyad" class="form-control">
                                            <label>Port</label>
                                            <input type="text" name="smtpport" value="<?=$veri[0]->smtpport?>" placeholder="Ad-Soyad" class="form-control">
                                            <label>Şifre</label>
                                            <input type="text" name="password" value="<?=$veri[0]->password?>" placeholder="Ad-Soyad" class="form-control">
                                            
                                        </div>                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Sosyal Ağlar</h4>
                                            <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" value="<?=$veri[0]->facebook?>" placeholder="Ad-Soyad" class="form-control">
                                            <label>İnstagra</label>
                                            <input type="text" name="instagram" value="<?=$veri[0]->instagram?>" placeholder="Ad-Soyad" class="form-control">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" value="<?=$veri[0]->twitter?>" placeholder="Ad-Soyad" class="form-control">
                                            
                                            
                                        </div>                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Hakkımızda</h4>
                                <div class="form-group">
                                    <textarea name="editor1" value="<?=$veri[0]->aboutme?>" id="editor1" rows="10" cols="58"><?=$veri[0]->aboutme?></textarea></div>
                                    

                    <script>
                        $(function(){
                            CKEDITOR.replace('editor1')
                            $('.textarea').wysihtml5()
                        })
                    </script>






                                <div class="tab-pane fade" id="settings">
                                    <h4>İletişim</h4>
<div class="form-group">
                                    <textarea name="editor2" id="editor2" value="<?=$veri[0]->contact?>" rows="10" cols="58"><?=$veri[0]->contact?></textarea>                                </div>                                </div>
                             <script>
                        $(function(){
                            CKEDITOR.replace('editor2')
                            $('.textarea').wysihtml5()
                        })
                    </script>



                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit"  id="submit" name="submit" class="btn btn-primary">GÜNCELLE<a></a></button>
                        </div>
                    </form>


                         
                    <script>
                        $(function(){
                            CKEDITOR.replace('editor1')
                            $('.textarea').wysihtml5()
                        })
                    </script>
        

        