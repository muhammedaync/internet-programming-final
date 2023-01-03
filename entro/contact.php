<?php
include("baglanti.php");
$name_err="";
$mail_err="";
$phone_err="";
$message_err="";
if(isset($_POST["send"]))
{

//NAME
if(empty($_POST["name"]))
{
  $name_err="İsim Boş Geçilemez.";
}
else{
$name=$_POST["name"];
}

//MAİL
if (empty($_POST["mail"]))
{
  $mail_err="Mail Boş Geçilemez.";
}
else{
  $maiil=$_POST["mail"];
  }

//PHONE
if (empty($_POST["phone"]))
{
  $phone_err="Telefon Boş Geçilemez.";
}
else{
  $phone=$_POST["phone"];
  }

  // MASSAGE
if (empty($_POST["message"]))
  {
    $message_err="Mesaj Boş Geçilemez.";
  }
  else{
    $message=$_POST["message"];
    }

if(isset($name) && isset($maiil) && isset($phone) && isset($message))
{
$ekle = "INSERT INTO contact(name_a,email_a,phone_a,message_a) VALUES('$name','$maiil','$phone','$message')"; 
$caekle = mysqli_query($baglanti,$ekle);
mysqli_close($baglanti);
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>RADYO53</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout contineer_page">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
 
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
                      <li> <a href="gallery.php">RADYOLAR</a> </li>
                      <li class="active"> <a href="contact.php">İLETİŞİM</a> </li>
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
     <!-- end header inner -->

     <!-- end header -->


</header>

<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>İLETİŞİM</h2>
        </div>
      </div>
    </div>
  </div>
</div>
    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <form class="contact_bg" action="contact.php" method ="POST">
            <div class="row">
              <div class="col-md-12">
               
                <div class="col-md-12">
                  <input type= "text" class="form-control  
                  <?php
                     if(!empty($name_err))
                     {
                      echo "is-invalid";
                     }
                  ?>                                                
                  " placeholder="İSİM" type="text" name="name">
                  <div id="validationServer03Feedback" class="invalid-feedback">
                   <?php
                   echo $name_err;
                   ?>
                  </div>
                </div>
                <div class="col-md-12">    
                  <input type="text" class="form-control  
                  <?php
                     if(!empty($mail))
                     {
                      echo "is-invalid";
                     }
                  ?>                                                                               
                  " placeholder="MAİL" type="text" name="mail">
                  <div id="validationServer03Feedback" class="invalid-feedback">
                    <?php
                     echo $mail_err;
                     ?>
                  </div>
                </div>
                <div class="col-md-12">
                  <input class="form-control  
                  <?php
                     if(!empty($phone_err))
                     {
                      echo "is-invalid";
                     }
                  ?>                 
                  " placeholder="TELEFON" type="text" name="phone">
                  <div id="validationServer03Feedback" class="invalid-feedback">
                  <?php
                     echo $phone_err;
                     ?>                 
                  </div>
                </div>               
                <div class="col-md-12">
                  <textarea class="textarea is-invalid" placeholder="MESAJ" type="text" name="message"></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <button type="submit" name="send" class="btn btn-primary">GÖNDER</button>
                </div>
              </div>
            </div>
            </form>
            </div>          
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                  <div class="address">
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="icon/loc.png" alt="#" /></a>Yalova/Merkez                   
                        <li>                          
                            <a href="#"><img src="icon/call.png" alt="#" /></a>+05555555555 </li>
                          <li>
                            <a href="#"><img src="icon/email.png" alt="#" /></a>muhammed@gmail.com </li>
                          </ul>                        
                        </div>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                           <ul class="social_link">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                          </ul>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
               <div class="container">
              <div class="copyright">                         
                </div>
              </div>
            </div>
          </footr>
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