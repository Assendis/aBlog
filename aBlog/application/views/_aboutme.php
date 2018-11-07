 <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <div class="col-md-12">


                                    <div class="row margin-bottom-30">
                                       
                                        <div class="col-md-8 animate fadeIn animated">
                                            <!-- Person Details -->

                                            <?php
        foreach($veri as $rs)
        {
          ?>
                                            <div class="col-md-4 col-sm-4 person-details margin-bottom-30">

                                                



                                                <figure>
                                                    <img src="assets/img/theteam/image1.jpg" alt="image1">
                                                    <figcaption>
                                                        <a href="<?=base_url()?>Home/Yazar/<?=$rs->Id?> ?>"><h3 class="margin-bottom-10"><?=$rs->Ad?><?=$rs->Soyad?></a>
                                                            <small>- Yazar</small>
                                                        </h3>
                                                        <span></span>
                                                    </figcaption>
                                                    
                                                </figure>
                                            </div>

                                             <?php
        }
        ?>

                                            <!-- //Portfolio Item// -->
                                            <!-- Person Details -->
                                            
                                            <!-- //Portfolio Item// -->
                                        </div>
                                    </div>
                                    
                                    