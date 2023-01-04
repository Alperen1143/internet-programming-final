



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>AygünHaber</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              
          
            
            
            </ul>
          </div>
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="ara" placeholder="Ne aramak istiyorsunuz...">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.php"><strong>AygünHaber</strong> <span> Haberin Yeni Yüzü</span></a></div>
          
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
           
          
          
          
          <?php include 'baglan.php';
          $header = $conn->prepare("select * from menuler");
          $header -> execute ();
            foreach ($header as $head){
              echo "<li><a href='".$head['Tablo_menuurl']."'>".$head['Tablo_menuad']."</a></li>";
            }
          
          
          ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  
