<?php
  Session_start();
  if (isset($_GET['lang'])) {
    if ($_GET['lang']=='en') {
      $_SESSION['lang'] = 'en';
      include 'lang_en.php';
    }
    else {
      $_SESSION['lang']='fr';
      include 'lang_fr.php';
    }
  }
  elseif (isset($_SESSION['lang'])) {
    if ($_SESSION['lang']=='en') {
      include 'lang_en.php';
    }
    else {
      include 'lang_fr.php';
    }
  }
  else{
    $_SESSION['lang']='fr';
    include 'lang_fr.php';
  }
?>
