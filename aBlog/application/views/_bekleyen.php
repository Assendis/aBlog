<div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Begin Sidebar Menu -->
        <?php foreach($veri as $rs)
        {
          ?>
                           
                                <div class="col-md-9">
                                   
                                    <!-- Carousel - Example 1 -->
                                    
                                    <!-- End Carousel - Example 2  -->
                                    <div class="clearfix"></div>
                                   
                                    <hr class="margin-top-30">

                                    <div class="row">
                                        
        
                                        <div class="col-md-6 margin-bottom-10 animate fadeInRight animated">
                                            <h3 class="padding-top-10 pull-left"></h3>
                                                <small><?=$rs->yazar?> </small>
                                            </h3>
                                            <div class="clearfix"></div>
                                            <h4>
                                                <em><?=$rs->baslik?></em>
                                            </h4>
                                            <p><?=$rs->yazi?></p>
                                        
                                            </div>
                                        </div>
                                         <button onClick="parent.location='<?=base_url()?>Yazarlar/detay/<?=$rs->id?>'" type="button" class="btn btn-blue">Detay</button>
                                    <button onClick="parent.location='<?=base_url()?>Yazarlar/favori/<?=$rs->id?>'" type="button" class="btn btn-aqua">Favori</button>
                                    </div>
                                   
        <?php } ?>
                            </div>
                        </div>
                    </div>