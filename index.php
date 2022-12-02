<?php
  include "config.php";
  error_reporting(0);
  if (isset($_GET['page'])) {
     $page='page/'.$_GET['page'].'.php';
     $title=$_GET['title'];


     if(!file_exists($page)){
      $page='page/404.php';
      $title='404 file not found';
     }

  }else{
    $page='page/home.php';
    $title='Home Page';
  }

  include "common/header.php";
  include $page;
  include "common/footer.php";
?>