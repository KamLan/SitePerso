<?php
  include 'header.php';
 ?>
   <div class="col-md-12 topband-img">
     <img src="img/landing-imagev2.jpg" alt="">
   </div>
   <div class="col-md-12 pagetitleh1about">
     <h1>
       <?php echo $about_title; ?>
     </h1>
   </div>
  <div class="container about-page">
    <div class="col-md-12">
      <h2>
        <?php echo $about_fw; ?>
      </h2>
      <p>
        <?php echo $about_prez; ?>
      </p>
    </div>
    <div class="col-md-12">
      <div class="col-md-6">
        <h2>
          <?php echo $about_xp_title; ?>
        </h2>
        <div class="col-md-12">
          <a href="#"  data-toggle="modal" data-target="#adeccoM">
            <img src="img/adeccologo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-12">
          <a href="#" data-toggle="modal" data-target="#citynM">
            <img src="img/cityn.png" alt="">
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <h2>
          <?php echo $about_st_title; ?>
        </h2>
        <div class="col-md-12">
          <a href="#" data-toggle="modal" data-target="#ossM">
            <img src="img/osslogo.png" alt="">
          </a>
        </div>
        <div class="col-md-12">
          <a href="#" data-toggle="modal" data-target="#epsiM">
            <img src="img/epsi-logo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-12">
          <a href="files/toeic.pdf" target="_blank">
            <img src="img/logo-TOEIC.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="adeccoM" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $about_modal_AGF_title; ?></h4>
      </div>
      <div class="modal-body">
        <p><?php echo $about_modal_AGF_prez; ?></p>
        <p><?php echo $about_modal_AGF_mission; ?></p>
        <p><?php echo $about_modal_AGF_tech; ?></p>
        <p><?php echo $about_modal_AGF_cms; ?></p>
        <p><?php echo $about_modal_AGF_fram ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<div id="citynM" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $about_modal_Cit_title; ?></h4>
      </div>
      <div class="modal-body">
        <p><?php echo $about_modal_Cit_prez; ?></p>
        <p><?php echo $about_modal_Cit_mission; ?></p>
        <p><?php echo $about_modal_Cit_tech; ?></p>
        <p><?php echo $about_modal_Cit_fram; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<div id="ossM" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $about_modal_oss_title; ?></h4>
      </div>
      <div class="modal-body">
        <p>
          <?php echo $about_modal_oss_prez; ?>
        </p>
        <p>
          <a href="http://www.opensourceschool.fr/" target="_blank">
            <?php echo $button_moreInfo; ?>
          </a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<div id="epsiM" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $about_modal_epsi_title; ?></h4>
      </div>
      <div class="modal-body">
        <p>
          <?php echo $about_modal_epsi_prez; ?>
        </p>
        <p>
          <a href="http://www.epsi.fr/" target="_blank">
            <?php echo $button_moreInfo; ?>
          </a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<?php
  include 'footer.php';
