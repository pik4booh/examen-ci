
    <p style="height: 75px;margin: 50px;font-size: 37px;letter-spacing: 1px;font-weight: bold;">LISTE PRODUIT</p><!-- Start: Masonry gallery cards responsive -->
    <div>
        <!-- Start: cards -->
        <div class="row" data-masonry="{&quot;percentPosition&quot;: true }">
        <?php foreach ($listOtherObjet as $loo) {?>

            <!-- Start: card-1 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <!-- Start: card -->
                <div class="card">
                    <picture type="" srcset=""><img class="card-img-top p-3" src="<?php echo base_url(); ?><?php echo $loo['cover']; ?>" alt="" style="border-radius: 24px; object-fit: cover"></picture><!-- Start: texto -->
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $loo['nom']; ?><br></h4>
                        <h6><?php echo $loo['userName']; ?></h6>
                        <p class="card-text text-muted"><?php echo $loo['descri']; ?><br></p><a href="">Link</a>
                    </div><!-- End: texto -->
                </div><!-- End: card -->
            </div><!-- End: card-1 -->
            </div><!-- End: card-1 -->
            </div><!-- End: card-1 -->

        <?php } ?>
        </div>
        </div>
            <!-- Start: Footer with social media icons -->


            