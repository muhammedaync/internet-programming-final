<?php
include("baglanti.php");
$username_err="";
$email_err="";
$parola_err="";
$parolatkr_err="";
if(isset($_POST["kaydet"]))
{
    //Kullanıcı
    if(empty($_POST["kullaniciadi"]))
    {
        $username_err="Kullanıcı Adı Boş Geçilemez.";
    }
    else if(strlen($_POST["kullaniciadi"])<8)
    {
        $username_err="Kullanıcı Adı En Az 8 Olmalıdır.";
    }
    else if (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullaniciadi"])) 
    {
       $username_err="Kullanıcı Adı Büyük Küçük ve Rakamdan Oluşturmalıdır.";
    }
    else {
        $username=$_POST["kullaniciadi"];
    }
    //Email
    if(empty($_POST["email"]))
    {
        $email_err="Email Boş Geçilemez.";
    }

    else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Geçersiz Email Formatı.";
      }
    
    else{
        $email=$_POST["email"];
    }
    //Parola
    if(empty($_POST["parola"]))
    {
        $parola_err="Parola Boş Geçilemez.";
    }
    else{
        $parola=password_hash($_POST["parola"],PASSWORD_DEFAULT);
    }
    //Parolatkr
    if(empty($_POST["parolatkr"]))
    {
        $parolatkr_err="Parola Tekrar Kısmı Boş Geçilemez.";
    }
    else if($_POST["parola"]!=$_POST["parolatkr"])
    {
        $parolatkr_err="Parolalar Eşleşmiyor.";
    }
    else{
        $parolatkr=$_POST["parolatkr"];
    }



    if(isset($username) && isset($email) && isset($parola))
  {
    $ekle="INSERT INTO kullanicilar(kullanici_adi, email, parola) VALUES ('$username','$email','$parola') ";
    $calistirekle = mysqli_query($baglanti,$ekle);
    if($calistirekle){
        echo '<div class="alert alert-success" role="alert">
        Kayıt Başarılı Bir Şekilde Eklendi.
      </div>';
      header("location:index.php");
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        Kayıt Eklenirken Bir Hata Oluştu.
      </div>';
    }
    mysqli_close($baglanti);
 }
}
?>
<?php
if(isset($_POST["cık"]))
{
  header("location:index.php");
}
?>

    



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Üye Kayıt İşlemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <div class="container p-5">
      <div class="cards p-5">
            <form action="kayit.php" method="POST">
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
            <label for="exampleInputEmail1" class="form-label">Email Adresi</label>
            <input type="text" class="form-control            
            <?php
            if(!empty($email_err))
            {
              echo "is-invalid";
            }
            ?>                       
            " id="exampleInputEmail1" name="email">   
            <div id="validationServer03Feedback" class="invalid-feedback">
          <?php
          echo $email_err;  
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

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Parola</label>
            <input type="password" class="form-control           
            <?php
            if(!empty($parolatkr_err))
            {
                echo "is-invalid";
            }
            ?>                                              
            " id="exampleInputPassword1" name="parolatkr">
            <div id="validationServer03Feedback" class="invalid-feedback">
           <?php
           echo $parolatkr_err;
           ?>
    </div>
        </div>
        <button type="submit" name="cık" class="btn btn-primary">Anasayfa</button>
        <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
        </form>
      </div> 
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
