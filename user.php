<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<div class="col-12" style="background: #A299F0; height: 50px;">
		<div class="row">
			<div class="col-2">
				<h4 style="color: white; margin-top: 13px; margin-left: 15px;" class="font-weight-light">PLENTY CASES</h4>
			</div>
			<div class="col-10">
				<p style="text-align: center; color: white; margin-top: 13px;" class="font-weight-light">Добавить решение</p>
			</div>
		</div>
	</div>
	<div class="d-flex">
		<div class="col-2" style="background: #A299F0; height: 600px;">
			<div><a href="index1.php" class="btn bg-white mt-3 col-12" style="text-align: left; display: flex;"><img src="img/btn21.png" class="mr-2 w-25"><p>Кейсы</p></a></div>
			<div><a href="moikeis.php" class="btn bg-white mt-3 col-12" style="text-align: left; display: flex;"><img src="img/btn22.png" class="mr-2 w-25"><p>Моё</p></a></div>
			<div><a href="adm.php" class="btn bg-white mt-3 col-12" style="text-align: left; display: flex;"><img src="img/btn23.png" class="mr-2 w-25"><p>Создать кейс</p></a></div>
		</div>
		<div class="col-10" style="height: 600px; background: #f0f0f0">
			<div class='col-10 mx-auto'>
				<?php 
					$connect = mysqli_connect("127.0.0.1", "root", "", "hackaton");
				?>
				 <form action="xz1.php" method="GET">
					<div class="mr-4" style="margin-top: 30px;">
						<input placeholder="Автор" name="author" class="form-control">
					</div>
					<div class="mr-4" style="margin-top: 20px;">
						<input placeholder="Ссылка" name="link" class="form-control">
					</div>
					<div class="mr-4" style="margin-top: 20px;">
						<input placeholder="Картинка" name="img" class="form-control">
					</div>
					<div class="mr-4" style="margin-top: 20px;">
						<input value=<?php echo $_GET["name"];?> name="name" class="form-control d-none">
					</div>
					<div class="mr-4" style="margin-top: 20px;">
						<button class="btn text-white rounded-circle mr-auto" style="width: 65px;"><img src="img/btn1.png" class="rounded-circle w-100"></button>
					</div>
				</form>	
			</div>
		</div>
	</div>	
</body>
</html>