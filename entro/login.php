<?php
include("baglanti.php");
$username_err="";
$parola_err="";
if(isset($_POST["giris"]))
{
    //Kullanıcı
    if(empty($_POST["kullaniciadi"]))
    {
        $username_err="Kullanıcı Adı Boş Geçilemez.";
    }
    else {
        $username=$_POST["kullaniciadi"];
    }
    //Parola
    if(empty($_POST["parola"]))
    {
        $parola_err="Parola Boş Geçilemez.";
    }
    else{
        $parola=$_POST["parola"]; 
    }

    if(isset($username) && isset($parola))
  {
    $secim ="SELECT * FROM kullanicilar WHERE kullanici_adi='$username'";
    $calistir=mysqli_query($baglanti,$secim);
    $kayitsayisi = mysqli_num_rows($calistir);
    if($kayitsayisi>0)
    {
     $ilgilikayit = mysqli_fetch_assoc($calistir);
     $hashlisifre=$ilgilikayit["parola"];

     if(password_verify($parola,$hashlisifre))
     {
         session_start();
         $_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
         $_SESSION["email"]=$ilgilikayit["email"];  
         header("location:index.php");
     }
     else           
     {
      echo '<div class="alert alert-danger" role="alert">
      Parola Yanlış.</div>'; 
     }
    }
    else {
      echo '<div class="alert alert-danger" role="alert">
        Kullanıcı Adı Yanlış.</div>'; 
    }
    
    mysqli_close($baglanti);
 }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Üye Giriş İşlemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <div class="container p-5">
      <div class="cards p-5">
            <form action="login.php" method="POST">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
            <input type="text" class="form-control           
            <?php
            if(!empty($username_err))
            {
              echo "is-invalid";
            }
            ?>           
            " id="exampleInputEmail1" name="kullaniciadi">      
            <div id="validationServer03Feedback" class="invalid-feedback">
           <?php
           echo $username_err;
           ?>
    </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Parola</label>
            <input type="password" class="form-control            
            <?php
            if(!empty($parola_err))
            {
                echo "is-invalid";
            }
            ?>                                  
            " id="exampleInputPassword1" name="parola">
            <div id="validationServer03Feedback" class="invalid-feedback">
           <?php
           echo $parola_err;
           ?>
    </div>
        </div>  
        <button type="button" class="cancelbtn"> <a href="kayit.php">Kaydol</a></button>
        <button type="submit" name="giris" class="btn btn-primary">GİRİŞ</button>
        </form>
      </div> 
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>