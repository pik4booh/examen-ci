<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>GROUPE 3</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/Article-List.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/Bootstrap-4---Product-List.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/Canito-nav-Bar.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/Masonry-gallery-cards-responsive.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/PHP-Contact-Form-dark-1.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/PHP-Contact-Form-dark.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
</head>

<body>
    <!-- Start: [Canito] nav Bar -->
    <div class="text-nowrap">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="box-shadow: 0px -4px 19px var(--bs-gray-600);height: 82px;">
            <div class="container">
                <div><a href="#" style="font-size: 30PX;font-weight: bold;width: 200px;height: 200px;"></a></div><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><img src="<?php echo base_url(); ?>assets/img/téléchargement.png" style="width: 74px;">
                <div class="collapse navbar-collapse d-xl-flex justify-content-xl-center" id="navcol-1">
                   
                        <a class="nav-link active" style="height: 44px;font-size: 16px;" href="#">accueil</a>
                        <a class="nav-link active" style="height: 44px;font-size: 16px;" href="<?php echo base_url('welcome/stat');?>">Statistique</a>
                        <a class="nav-link active" style="height: 44px;font-size: 16px;" href="#">Notifications</a>
                        <!-- <li class="nav-item"></li> -->
                    <i class="fa fa-search" style="width: 36.8594px;height: 13px;"></i>
                    <form class="d-sm-block me-auto" target="_self">
                        <div class="form-group mb-3"><label class="form-label" for="search-field"></label><input class="border rounded form-control search-field" type="search" id="search-field" style="background-color: #eaeaea;width: 204px;height: 25px;margin-right: 10px;" name="search"><input class="border rounded form-control search-field" type="search" id="search-field-1" style="background-color: #eaeaea;width: 204px;height: 25px;margin-right: 10px;margin-top: 8px;" name="search"></div>
                    </form>
                    <!-- <a style="height: 44px;font-size: 16px;padding-top: 7px;margin: 50px;" href="#">Statistique</a>
                    <a style="height: 44px;font-size: 16px;padding-top: 7px;" href="#">Notifications</a><a href="#"> -->
                        <?php echo $_SESSION['nom']; ?>
                    <a href="<?php echo base_url('welcome/profil')?>"><i class="fa fa-user" style="font-size: 30px;padding: 53px;"></i></a>
                </div>
            </div>
        </nav>
    </div><!-- End: [Canito] nav Bar -->