<form method="post" action="<?=base_url()?>Yazarlar/sepete_ekle">
<div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <div class="col-md-12">
                                    <h2><?=$veri[0]->yazar?></h2>
                                    <div class="row">
                                        <div class="col-md-6 animate fadeIn animated">
                                            <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt="about-me" class="margin-top-10">
                                            <ul class="list-inline about-me-icons margin-vert-20">
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-6 margin-bottom-10 animate fadeInRight animated">
                                            
                                            <h3 class="padding-top-10 pull-left">
                                                <small>Açıklama: <?=$veri[0]->aciklama?></small>
                                            </h3>
                                     
                                        <input type="hidden" name="urunid" value="<?=$veri[0]->id?>">
                                       
                                            <div class="clearfix"></div>
                                            <h4>
                                                <em>Başlık: <?=$veri[0]->baslik?></em>
                                            </h4>
                                            <p><?=$veri[0]->yazi?></p>
                                        </div>
                                        <input type="hidden" name="userId" value="<?php echo $this->session->uye_session["id"]; ?>">
                                        <input type="hidden" name="baslik" value="<?=$veri[0]->baslik?>">
                                        <input type="hidden" name="yazi" value="<?=$veri[0]->yazi?>">
                                        <input type="hidden" name="yazar" value="<?=$veri[0]->yazar?>">
                                    </div>

                                    <button type="submit" class="btn btn-aqua">Favori</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </form>