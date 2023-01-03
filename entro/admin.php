<!DOCTYPE html>
<html lang="en">
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