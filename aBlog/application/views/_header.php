<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        
        <meta name="description" content="<?=$veri1[0]->description?>">
        <meta name="keywords" content="<?=$veri1[0]->keywords?>">
        <title><?=$sayfa?> <?=$veri1[0]->name?></title>


        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body_bg">
            <div id="pre_header" class="container">
                <div class="row margin-top-10 visible-lg">
                    <div class="col-md-6">
                        <p>
                            <strong></strong>&nbsp;</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>
                            <strong>Email:</strong><?=$this->session->uye_session["email"]?></p>
                    </div>
                </div>
            </div>
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="header" class="container">
                        <div class="row">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html" title="">
                                    <img src="<?=base_url()?>assets/img/logo.png" alt="Logo" />
                                </a>
                            </div>
                            <!-- End Logo -->
                            <ul class="social-icons pull-right hidden-xs">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="GooglePlus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Top Menu -->
                    <div id="hornav" class="container no-padding">
                        <div class="row">
                            <div class="col-md-12 no-padding">
                                <div class="pull-right visible-lg">
                                    <ul id="hornavmenu" class="nav navbar-nav">

                                        



                                        <li>
                                            <a href="<?=base_url()?>Home" class="fa-home">Ana Sayfa</a>
                                        </li>
                                       
                                        <?php

if($this->session->userdata("uye_session")) {

?>

 <li>
                                            <a href="<?=base_url()?>Yazarlar/login" class="fa-user">Profilim</a>
                                            
                                        </li>

                                        <?php } else { ?>



                                        <li>
                                            
                                            
                                            <span class="fa-gears">Kullanıcı Girişi</span>
                                            <ul>                                                
                                                <li>
                                                    <a href="<?=base_url()?>Home/Signup">Kayıt Ol</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>Home/Login">Giriş Yap</a>
                                                </li>
                                               
                                            </ul>
                                        


                                        </li>

                                        <?php } ?>
                                        <li>
                                            <a href="<?=base_url()?>Home/editorler" class="fa-user">Yazılar</a>
                                            
                                        </li>
                                        <li>
                                            <span class="fa-gears">Kategoriler</span>
                                            <ul> 

                                                <?php foreach ($kategoriler as $rs) { ?>

                                                <li>
                                                    <a href="<?=base_url()?>kategori/<?=$rs->Id?>"><?=$rs->adi?></a>
                                                </li>

                                                <?php } ?>
                                                
                                            </ul>
                                            
                                        </li>
                                         <li>
                                            <a href="<?=base_url()?>Home/Blog" class="fa-image">Albümler</a>
                                            
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>Home/AboutUs" class="fa-comment">Hakkımızda</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>Home/Readus" class="fa-comment">Bize Yazın</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>Home/Contact" class="fa-comment">İletişim</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Menu -->
                    <!-- === END HEADER === -->