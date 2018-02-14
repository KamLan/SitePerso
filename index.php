<!DOCTYPE html>
<html lang="en">
<?php
  include 'gestion_lang.php';
 ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Camille adouard">

    <title>Camille Adouard, open source developer</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <?php echo $navbar ?> <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-home"></i> <span class="light"> <?php echo $nav_home ?> </span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><?php echo $nav_about ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download"><?php echo $nav_skills ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#projects"><?php echo $nav_projects ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><?php echo $nav_contact ?></a>
                    </li>
                    <li>
                      <a href="index.php?lang=en">EN</a>
                    </li>
                    <li>
                      <a href="index.php?lang=fr">FR</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><?php echo $main_title ?></h1>
                        <p class="intro-text"><?php echo $index_welcome ?>
                            <br><?php echo $index_welcome_text ?></p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1><?php echo $about_title ?> <img class="me-logo" src="img\Camille.png" alt=""></h1>
                <p><?php echo $about_text_1 ?></p>
                <p><?php echo $about_text_2 ?> </p>
                <p>
                  <?php echo $about_text_3 ?>
                </p>
                <a href="about.php<?php if ($_SESSION['lang']=='fr') {echo "?lang=fr";} ?>" class="btn btn-default btn-lg">
                  <?php
                  echo $button_moreInfo
                  ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Skill Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1><?php echo $skills_title ?></h1>
                    <h4><?php echo $skills_text_1 ?></h4>
                    <a href="skills.php" class="btn btn-default btn-lg"><?php echo $button_moreInfo ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="content-section text-center">
        <div class="project-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1><?php echo $projects_title ?></h1>
                    <h4><?php echo $projects_text_1 ?></h4>
                    <a href="projects.php" class="btn btn-default btn-lg"><?php echo $button_moreInfo ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1><?php echo $contact_title ?></h1>
                <p><?php echo $contact_text ?></p>
                <p><a href="mailto:adouardcamille@hotmail.com">adouardcamille@hotmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                  <li>
                      <a href="mailto:adouardcamille@hotmail.com" class="btn btn-default btn-lg"><i class="fa fa-envelope fa-fw"></i> <span class="network-name">Mail</span></a>
                  </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/in/camille-adouard-67ba89a7/" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://github.com/KamLan" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a target="_blank" href="files/cv_camille_adouard.pdf" class="btn btn-default btn-lg"><i class="fa fa-file-pdf-o fa-fw"></i> <span class="network-name">CV</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php
  include 'footer.php'
 ?>
