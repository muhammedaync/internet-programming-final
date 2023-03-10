<?php
include("baglantii.php");
ob_start();
session_start();

$ayarsor=$db->prepare("SELECT * FROM kullanicilar where id=:id");
$ayarsor->execute(array(
  'id' => 0
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
$kullanicisor=$db->prepare("SELECT * FROM kullanicilar where email=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['email']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
if ($say==0) {

  Header("Location:login.php?durum=izinsiz");

exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title>RADYO 53</title>
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
</head>
<body class="main-layout">
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <header>
    <div class="header-top">
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
                      <li class="active"> <a href="index.php">ANASAYFA</a> </li>                  
                     <li>  <a href="about.php">Radyo Ekleme </a> </li> 
                      <li> <a href="concerts.php">HABERLER </a> </li>
                      <li> <a href="gallery.php">RADYOLAR</a> </li>
                      <li> <a href="contact.php">??LET??????M</a> </li>
                      <li> <a href="kayit.php">KAYIT OLMA</a> </li>
                        <li > <a   href="login.php">G??R????</a> </li>                                        
                      <li  > <a  class="last_manu" href="#"><img src="images/search_icon.png" alt="#" /></a> </li>                     
                     </ul>
                   </nav>             
               </div> 
             </div>
           </div>
         </div>
       </div>
     </div>    
<div id="about" class="about">
  <div class="container">
    <div class="row display_boxflex">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>Radyo 53</h2>
          <p>Ad??yla T??rkiye???yi  frekans??yla Bursa???y?? kucaklayan Radyo T??rk,  ??eyrek asra yak??n zamand??r yay??n hayat??n?? kesintisiz ??ekilde s??rd??rmektedir. Geni?? kitlelere sahip, tecr??beli programc??lar??n??n yay??nlar??n??  karasal ve dijital olarak  dinleyicilerine g????l?? bir ??ekilde ula??trmaktad??r.  G??ncel m??zikler, g??ndemi takip eden yay??nlar ve dinleyici se??imleri Radyo T??rk?????n yo??un olarak dinlenmesine ve reklamveren firmalar taraf??ndan tercih edilmesine sebep olmu??tur.
Teknolijinin t??m yeniliklerini takip ederek  , kendimizi s??rekli yenilemek,  ayr??ca her kitleye hitap eden  yay??nlar??m??z?? sizlerin talepleri do??rultusunda s??rd??rmek en b??y??k dile??imiz.  ????inde bulundu??umuz g??zel ??ehrin ??nemli bir frekans?? ayn?? zamanda ??lkemizin  ??nemli bir medya kurulu??u olarak 7 g??n 24 saat sizlerleyiz</p>
          <a href="Javascript:void(0)">Read More</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="images/about.png" alt="#" /></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="vh-40" style="background-color: #FFFFFF;">
  <div class="container py-1 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-80 col-lg-50 col-xl-60">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">            
              <div class="flex-grow-1 ms-3">
                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                  style="background-color: #efefef;">
                  <div class="px-3">
                    <p class="small text-muted mb-1">Mail</p>
                    <p class="mb-0"><?php echo $kullanicicek ['email']  ?></p>
                  </div>               
                <div class="d-flex pt-1">
                <li class="nav-item">
                <a class="nav-link" href="logout.php">????k????</a></li>
                 </div>
                 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="upcoming" class="upcoming">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
       <div class="box_text">
          <div class="titlepage">
            <h2>Upcoming Concerts</h2>
          </div>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it lookIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
          <a href="Javascript:void(0)">Read More</a>
        </div>
      </div> 
    
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
         <div class="upcomimg">
           <figure><img src="images/up.jpg" alt="#"/></figure>
        </div>
          </div>
  </div>
    </div>
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