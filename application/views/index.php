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
    <!-- Start: ♣ Login form Page BS4 ♣ -->
    <div class="container-fluid">
        <div class="row mh-100vh">
            <!-- Start: Background image -->
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background: url(&quot;assets/img/téléchargement.png&quot;) no-repeat;background-size: cover;width: 296.667px;height: 317px;">
                <!-- Start: Credit photo -->
                <p class="ms-auto small text-dark mb-2"><em>Photo by&nbsp;</em><br></p><!-- End: Credit photo -->
            </div><!-- End: Background image -->
            <!-- Start: Login block -->
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" data-aos="fade-left" data-aos-duration="750" id="login-block" style="width: 607.667px;height: 640px;">
                <!-- Start: Login container -->
                <div class="m-auto w-lg-75 w-xl-50">
                    <!-- Start: Login form -->
                    <form method="post" action="<?php echo base_url('welcome/login')?>">
                        <!-- Start: Email -->
                        <div class="form-group mb-3"><label class="form-label text-secondary">Email</label><input class="form-control" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email"></div><!-- End: Email -->
                        <!-- Start: Password -->
                        <div class="form-group mb-3"><label class="form-label text-secondary">Password</label><input class="form-control" type="password" required=""></div><!-- End: Password -->
                        <!-- Start: Submit --><button class="btn btn-info mt-2" type="submit" style="background: rgb(252,0,0);border-color: rgb(255,255,255);color: rgb(255,255,255);">Log In</button><!-- End: Submit -->
                    </form><!-- End: Login form -->
                    <!-- Start: Forgot password -->
                    <p class="mt-3 mb-0"><a class="text-info small" href="inscription.html">INSCRIPTION</a></p><!-- End: Forgot password -->
                    <div>
                        <p style="color: var(--bs-red);font-weight: bold;font-size: 20px;text-align: center;margin-top: 46px;">ERREUR</p>
                    </div>
                </div><!-- End: Login container -->
            </div><!-- End: Login block -->
        </div>
    </div><!-- End: ♣ Login form Page BS4 ♣ -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark-1.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark.js"></script>
</body>

</html>