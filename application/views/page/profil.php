
    <div class="container">
        <div class="row" style="margin-top: -101px;">
            <div class="col-md-6 col-lg-4" style="width: 580px;margin-top: 122px;">
                <h2 style="color: rgb(0,0,0);text-align: center;padding: 34px;">MES PRODUITS</h2><!-- Start: Bootstrap 4 - Product List --><div class="container py-5">

  <div class="row">
    <div class="col-lg-8 mx-auto">

      <!-- List group-->
      <ul class="list-group shadow">
      <?php foreach ($listObjetUser as $lou){ ?>
        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h4 class="mt-0 font-weight-bold mb-2"><?php echo $lou['nom']; ?></h4>
              <h6><?php echo $lou['userName']; ?></h6>
              <p class="font-italic text-muted mb-0 small"><?php echo $lou['descri']; ?></p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2"><?php echo $lou['valeur']; ?></h6>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                </ul>
              </div>
            </div><img src="<?php echo base_url(); ?><?php echo $lou['cover']; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->
        </li>
        <!-- End -->
        <?php } ?>
      </ul>
      <!-- End -->
    </div>
  </div>
</div>
<!-- End: Bootstrap 4 - Product List -->
            </div>
            <div class="col-md-6 col-lg-4" style="margin-top: 122px;width: 378px;">
                <div>
                    <!-- Start: PHP-Contact Form #dark -->
                    <div id="contact">
                        <!-- Start: PHP-Contact -->
                        <div class="container" style="color: rgb(255,255,255);background: #ffffff;">
                            <!-- Start: intro -->
                            <div class="intro">
                                <h2 style="color: rgb(0,0,0);">AJOUT PRODUIT</h2>
                            </div><!-- End: intro -->
                            <form id="contact-form" action="<?php echo base_url('client/ajouter'); ?>" method="get">
                                <div class="messages"></div>
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3"><label class="form-label" for="form_name" style="color: rgb(0,0,0);">Nom* </label><input class="form-control" type="text" id="form_name" data-error="Vorname erforderlich." name="nom" required="" placeholder="Bitte Tragen Sie Ihren Vornamen ein *" style="color: rgb(0,0,0);">
                                                <div class="help-block with-errors" style="color: rgb(0,0,0);"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="color: rgb(0,0,0);">
                                            <div class="form-group mb-3" style="color: rgb(0,0,0);"><label class="form-label" for="form_lastname" style="color: rgb(0,0,0);">Descriptions* </label><input class="form-control" type="text" id="form_lastname" data-error="Nachname erforderlich." name="descri" required="" placeholder="Bitte Tragen Sie Ihren Nachname ein *" style="color: rgb(0,0,0);">
                                                <div class="help-block with-errors" style="color: rgb(0,0,0);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="color: rgb(0,0,0);">
                                    <div class="col-md-6" style="color: rgb(0,0,0);"><label class="form-label" for="form_lastname" style="color: rgb(0,0,0);">Categorie* </label>
                                        <select class="form-group mb-3" style="color: rgb(0,0,0);"><label class="form-label" for="form_lastname" style="color: rgb(0,0,0);" name="categ" id="">
                                          <?php foreach ($listCat as $lcat){ ?>
                                          <option value="<?php echo $lcat['idCat']; ?>"><?php echo $lcat['nomCat']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6" style="color: rgb(0,0,0);">
                                        <div class="form-group mb-3" style="color: rgb(0,0,0);"><label class="form-label" for="form_phone" style="color: rgb(0,0,0);">Valeur</label><input class="form-control" type="number" id="form_phone" data-error="Telefonnummer erforderlich" name="valeur" placeholder="Bitte tragen Sie Ihre Telefonnummer ein" style="color: rgb(0,0,0);">
                                            <div class="help-block with-errors" style="color: rgb(0,0,0);"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3"><label class="form-label" for="form_message" style="color: rgb(0,0,0);">Photo* </label><input class="form-control" type="text" id="form_message" data-error="Nachricht erforderlich." rows="4" name="photo" required="" placeholder="Hinterlassen Sie uns eine Nachricht *">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12"><button class="btn btn-success btn-send" value="Senden" type="submit">Ajouter </button></div>
                                </div>
                            </form>
                        </div><!-- End: PHP-Contact -->
                    </div><!-- End: PHP-Contact Form #dark -->
                </div><!-- Start: Footer with social media icons -->
                