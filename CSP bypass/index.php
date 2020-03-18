<?php
header("content-type:text/html");
header("x-frame-option:deny");
$random = md5(rand(0,10000000));
header("Content-Security-Policy: default-src 'self'; script-src 'nonce-$random' 'strict-dynamic' ;base-uri 'self' ");
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A Website about CSP and Dogs!">
    <meta name="author" content="No One You know!">

    <title>My Awesome Dogs</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="vendor/jquery/jquery.js" nonce="<?php echo $random;?>"></script>
    <!-- Custom styles for this template -->
    <link href="css/portfolio-item.css" rel="stylesheet">
<script type="text/javascript" nonce="<?php echo $random;?>">



$(document).ready(function(){

    $("button").click(function(){
        $.get("info.php?path=" + $("#main_photo").attr('src'), function(mydata){
          mydata = $.parseJSON(mydata);
          $("#desc").text(mydata.desc);
          $("#det").text(mydata.det);
        });
    });


});


function debug(){

  alert(new URL(location.href).searchParams.get("code"));
  console.log("Debugging mode has been enabled!");
}
</script>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID" nonce="<?php echo $random;?>"></script>
<script nonce="<?php echo $random;?>">
  window.dataLayer = window.dataLayer || [];
  Function.__proto__.valueOf = function() { this.call(this);return 5;};
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_TRACKING_ID');
</script>




  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">My Cute Dogs!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#main">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="solvers.txt">Solvers</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Its name is:
        <small><?php echo $_GET['name']; ?></small>
      </h1>
    <span style="color:red:">Challenge is over! <a href="http://sandbox.ahussam.me/challenges/csp/?name=%3Ca%20id=main_photo%20src=-debug;%3E&code=1" target=_blank>the solution</a></span>      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8" >
          <img class="img-fluid" src="img/dog1.jpg" alt="" id="main_photo" fallback="/img.php?id=1">
        </div>
        <div class="col-md-4">
          <button type="button" class="btn btn-info" id="get">Info</button>
          <script type="text/javascript"></script>

          <h3 class="my-3">Photo Description</h3>
          <p id="desc"></p>
          <h3 class="my-3">Photo Details</h3>
          <p id="det"></p>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Photos</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="img/dog2.jpg" alt="" fallback="/img.php?id=2">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="img/dog3.jpg" alt="" fallback="/img.php?id=3"> 
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="img/dog4.jpg" alt="" fallback="/img.php?id=4">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="img/dog5.jpg" alt="" fallback="/img.php?id=5">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your CSP_Chllanges 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" nonce="<?php echo $random;?>"></script>
    <script type="text/javascript" nonce="<?php echo $random;?>">

      window.onload = function(){
      get.click();
      }

  </script>

  </body>

</html>
