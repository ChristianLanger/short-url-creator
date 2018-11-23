<?php
// Get ID from Adress bar and redirect to long url from DB
	if ( isset($_GET['id']) && $_GET['id'] !== '' ) {
		include_once './dbconnect.php';
		$id  = $_GET['id'];
		$query = "SELECT * FROM urls WHERE random = '" . $id . "'";
		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		$url = $row['longurl'];
   	header('Location: '.$url);
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Short URL Creator">
    <meta name="author" content="Christian Langer">
    <link rel="icon" type="image/png" href="./favicon.png" sizes="32x32" />
    <title>Short URL Creator</title>
    <!-- Bootstrap core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./css/style.css" rel="stylesheet">
  </head>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg static-top">
      <div class="container">
        <a class="navbar-brand" href="https://geobon.org" target="_blank">geobon.org</a>
        
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/ChristianLanger" target="_blank"><i class="fa fa-github"></i></a>
            </li>
          </ul>
        
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
              <h1 class="mt-5">Shorten your URL</h1>
              <p class="lead">Type any URL you want to shorten in the textfield and click "Shorten it!"</p>
            </div>

            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-5">
                  <input type="url" id="urlinput" class="form-control form-control-lg" placeholder="Enter your url..." required>
                </div>
                <div class="col-12 col-md-3">
                  <button id="button" type="button" onclick="shorturl();" class="btn btn-block btn-lg btn-primary">Shorten it!</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-12 text-center">
            <p id="tiny-url" class="lead"></p>
          </div>
        </div>
    </div>
 
    <!-- Page Footer -->
    <div class="footer container text-center">
      <p class="text-muted">
        <a href="https://geobon.org/about/contact" target="_blank">Contact</a>  ·  <a href="https://geobon.org/site-notice" target="_blank">Site notice</a>
      </p>   
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>

</html>
