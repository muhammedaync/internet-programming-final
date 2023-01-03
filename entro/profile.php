<?php

session_start();
if(isset($_SESSION["kullanici_adi"]))
{
    echo "<h3>".$_SESSION["kullanici_adi"]."Hoşgeldin</h3>";
    echo "<h3>".$_SESSION["eamil"]."</h3>";
    echo "<a href='cikis.php' style='color:red ; background-color:yellow;border:1px solid red ;padding:5px 5px;'>ÇIKIŞ YAP</a>";
}
else
{
    echo "Bu Sayfayı Görüntüleme Yetkiniz Yoktur.";
}

?>