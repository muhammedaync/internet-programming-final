
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
                      <li class="active"> <a href="index.php">ANASAYFA</a> </li>                  
                      <li class="active"> <a href="about.php">RADYO EKLEME</a> </li>
                      <li> <a href="Concerts.php">HABERLER</a> </li>
                      <li> <a href="gallery.php">RADYOLAR</a> </li>
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
<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">RADYO53</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">RADYO EKLEME</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span>Kullanıcı ekle</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Resim</th>
					<th>İSİM</th>
					<th>BAĞLANTI</th>
					<th>YÜKLEME</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'conn.php';
					$query = mysqli_query($conn, "SELECT * FROM `sesVEresimDeğiştirmek`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
						
						
				?>
				<tr>
					<td><img src="<?php echo $fetch['resim']?>" height="80" width="100"/></td>
					<td><?php echo $fetch['sesİSİM']?></td>
					<td><?php echo $fetch['sesBağlantıAdres']?></td>				
					<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $fetch['ses_id']?>"><span class="glyphicon glyphicon-edit"></span> Update</button></td>
<div class="modal fade" id="edit<?php echo $fetch['ses_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data" action="edit.php">
				<div class="modal-header">
					<h3 class="modal-title">kullanıcıyı düzenle</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<h3>Güncel Resim</h3>
							<img src="<?php echo $fetch['resim']?>" height="120" width="150" />
							<input type="hidden" name="previous" value="<?php echo $fetch['resim']?>"/>
							<h3>Yeni Resim</h3>
							<input type="file" class="form-control" name="photo" value="<?php echo $fetch['resim']?>" required="required"/>
						</div>
						<div class="form-group">
							<label>İSİM</label>
							<input type="hidden" value="<?php echo $fetch['ses_id']?>" name="user_id"/>
							<input type="text" class="form-control" value="<?php echo $fetch['sesİSİM']?>" name="firstname" required="required"/>
						</div>
						<div class="form-group">
							<label>BAĞLANTI</label>
							<input type="text" class="form-control" value="<?php echo $fetch['sesBağlantıAdres']?>" name="lastname" required="required"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Kapat</button>
					<button class="btn btn-warning" name="edit" value="edit"><span class="glyphicon glyphicon-save"></span>Güncelleme</button>
				</div>
			</form>
		</div>
	</div>
</div>				
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="save.php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">Kullanıcı ekle</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Resim</label>
							<input type="file" class="form-control" name="photo" required="required"/>
						</div>
						<div class="form-group">
							<label>numara</label>
							<input type="text" class="form-control" name="firstname" required="required"/>
						</div>
						<div class="form-group">
							<label>ses Bağlantı Adres</label>
							<input type="text" class="form-control" name="lastname" required="required"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Kapat</button>
					<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span>Kaydet</button>
				</div>
			</form>
		</div>
	</div>
</div>
	
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>	
</html>
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