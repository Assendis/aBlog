<div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Begin Sidebar Menu -->
                              
                                <div class="col-md-9">
                                    <h2>Yazılar</h2>
                                    <!-- Carousel - Example 1 -->
                                    <div id="carousel-example-1" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-1" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel-example-1" data-slide-to="2" class=""></li>
                                        </ol>
                                        <!-- Wrapper for slides -->
                                                                            
                               
                            
                                        <div class="carousel-inner">
                                       
        <?php
                            $say=0;
                            $aktf=null;
                            foreach($veriler as $rs)
                            {
                                $say++;
                                if($say==1)
                                    $aktf="active";
                                else
                                    $aktf=null;
                                ?>
                                            <div class="item <?=$aktf?>">
                                                <a href="<?=base_url()?>yazarlar/detay/<?=$rs->id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>"></a>
                                            </div>

                                           <?php } ?>  
                                
                                           
                                        </div>
                                         
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-example-1" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-1" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                    
                                    <!-- End Carousel - Example 1  -->
                                    
                                    <hr class="margin-top-30">
                                    <!-- Carousel - Example 2 -->
                                    
                                    <!-- End Carousel - Example 2  -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>