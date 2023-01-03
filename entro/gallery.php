


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title>Entro</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="stylesheet" href="radyo.css">
  <script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>
</head>
<body class="main-layout contineer_page">
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <header>
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li > <a href="index.php">ANASAYFA</a> </li>
                      <li> <a href="about.php">RADYO EKLEME</a> </li>
                      <li> <a href="concerts.php">HABERLER</a> </li>
                      <li class="active"> <a href="gallery.php">RADYOLAR</a> </li>
                      <li> <a href="contact.php">İLETİŞİM</a> </li>
                      <li > <a   href="kayit.php">KAYIT OLMA</a> </li>
                        <li > <a   href="login.php">GİRİŞ</a> </li>
                      <li  > <a  class="last_manu" href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                     </ul>
                   </nav>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
</header>
<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>RADYOLAR</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require 'conn.php';
$query = mysqli_query($conn, "SELECT * FROM `sesVEresimDeğiştirmek`") or die(mysqli_error());
$fetch = mysqli_fetch_array($query);
while($row=mysqli_fetch_array($query))
    {  
      $row1 = $row['sesBağlantıAdres'];
      $img = $row['resim'];
      echo "<div class='radyo-box'><img class='radyo-image' src='$img' alt='' srcset=''><audio controls ><source src='$row1'  type='audio/ogg'>Your browser does not support the audio element.</audio></div>";
      
    }

?>

</div>

          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>