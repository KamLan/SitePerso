<?php
include 'header.php';
?>
<div class="col-md-12 topband-img">
  <img src="img/aurorav2.jpg" alt="">
</div>
<div class="col-md-12 pagetitleh1project">
  <h1>
    <?php echo $projects_title; ?>
  </h1>
</div>
<div class="col-md-12 container projects">
  <div class="col-md-4">
    <h3>
      <?php echo $project_cat1_title; ?>
    </h3>
    <div class="row">
      <div class="col-md-12">
        <p>
          <strong>
            <a href="#" data-toggle="modal" data-target="#raspberryP">
              <?php echo $rasp_montages; ?>
            </a>
          </strong>
        </p>
      </div>
      <div class="col-md-12">
        <p>
          <strong>
            <a href="#" data-toggle="modal" data-target="#raspberryDomo">
              <?php echo $domotic_build; ?>
            </a>
          </strong>
        </p>
      </div>
      <div class="col-md-12">
        <p>
          <strong>
            <a href="#" data-toggle="modal" data-target="#AGFintegration">
              <?php echo $adecco_integration; ?>
            </a>
          </strong>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <h3>
      <?php echo $project_cat2_title; ?>
    </h3>
    <div class="row">
      <div class="col-md-12">
        <p>
          <strong>
            <a href="http://www.cabinetgyneco.com" target="_blank">
              <?php echo $cab_gyne_website; ?>
            </a>
          </strong>
        </p>
      </div>
      <div class="col-md-12">
        <p>
          <strong>
            <a href="#" data-toggle="modal" data-target="#javaAPIReader">
              <?php echo $back_java_api; ?>
            </a>
          </strong>
        </p>
      </div>
      <div class="col-md-12">
        <p>
          <strong>
            <a href="#" data-toggle="modal" data-target="#MobileAPIReader">
              <?php echo $apli_mobile_ionic; ?>
            </a>
          </strong>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <h3>
      <?php echo $project_cat3_title; ?>
    </h3>
    <div class="row">
      <div class="col-md-12">
        <p>
          <strong>
            <a href="#" data-toggle="modal" data-target="#webservicej2ee">
              <?php echo $webservice_javajee; ?>
            </a>
          </strong>
        </p>
      </div>
      <div class="col-md-12">
        <p>
          <strong>
            <a href="#" data-toggle="modal" data-target="#webservicephp">
              <?php echo $webservice_phpcakephp; ?>
            </a>
          </strong>
        </p>
      </div>
    </div>
  </div>
</div>

<div id="raspberryP" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $rasp_montages_title; ?> </h4>
      </div>
      <div class="modal-body">
        <p><?php echo $rasp_montages_text; ?></p>
        <p><?php echo $rasp_montages_plus; ?></p>
        <p><a href="files/Rapport_de_stage.pdf" target="_blank"><?php echo $rasp_montages_file; ?></a> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<div id="raspberryDomo" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $domotic_build_title; ?> </h4>
      </div>
      <div class="modal-body">
        <p><?php echo $domotic_build_text; ?></p>
        <p><?php echo $rasp_montages_plus; ?></p>
        <p><a href="files/Rapport_de_stage.pdf" target="_blank"><?php echo $rasp_montages_file; ?></a> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<div id="AGFintegration" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $adecco_integration_title; ?> </h4>
      </div>
      <div class="modal-body">
        <p><?php echo $adecco_integration_text; ?></p>
        <ul>
          <li>
            <a href="http://www.groupe-adecco.fr/ceo1month/france/" target="_blank">
              CEO for One Month
            </a>
          </li>
          <li>
            <a href="https://www.groupe-adecco.fr/powerofwork/home/" target="_blank">
              Power of Work
            </a>
          </li>
          <li>
            <a href="http://www.adecco.fr/entreprise" target="_blank">
              Nouvel Accueil Entreprise
            </a>
          </li>
          <li>
            <a href="http://www.adecco.fr/entreprise/boostez-recrutements" target="_blank">
              Boostez vos recrutements
            </a>
          </li>
          <li>
            <a href="http://www.adecco.fr/entreprise/luttons-ensemble" target="_blank">
              Luttons ensemble
            </a>
          </li>
          <li>
            <a href="http://www.adecco.fr/entreprise/travailleurs-handicapes" target="_blank">
              Travailleurs handicapés
            </a>
          </li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="javaAPIReader" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $back_java_api_title; ?> </h4>
      </div>
      <div class="modal-body">
        <p><?php echo $back_java_api_text; ?></p>
        <img src="img/capt-backendjava.png" alt="">
        <p><?php echo $back_java_api_status ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<div id="MobileAPIReader" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $apli_mobile_ionic_title; ?>  </h4>
      </div>
      <div class="modal-body">
        <p><?php echo $apli_mobile_ionic_text; ?></p>
        <img src="img/capt-app-mobile.png" alt="">
        <p><?php echo $back_java_api_status; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<div id="webservicej2ee" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $webservice_javajee_title; ?> </h4>
      </div>
      <div class="modal-body">
        <p><?php echo $webservice_javajee_text; ?></p>
        <p><?php echo$back_java_api_status; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<div id="webservicephp" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $webservice_phpcakephp_title ?> </h4>
      </div>
      <div class="modal-body">
        <p><?php echo $webservice_phpcakephp_text; ?></p>
        <p><?php echo $back_java_api_status; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $modal_close_button; ?></button>
      </div>
    </div>

  </div>
</div>

<?php
include 'footer.php';
