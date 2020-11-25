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
				<p style="text-align: center; color: white; margin-top: 13px;" class="font-weight-light">Мои кейсы и решения</p>
			</div>
		</div>
	</div>
	<div class="d-flex">
		<div class="col-2" style="background: #A299F0; height: 2000px;">
			<div><a href="index1.php" class="btn bg-white mt-3 col-12" style="text-align: left; display: flex;"><img src="img/btn21.png" class="mr-2 w-25"><p>Кейсы</p></a></div>
			<div><a href="moikeis.php" class="btn bg-white mt-3 col-12" style="text-align: left; display: flex;"><img src="img/btn22.png" class="mr-2 w-25"><p>Моё</p></a></div>
			<div><a href="adm.php" class="btn bg-white mt-3 col-12" style="text-align: left; display: flex;"><img src="img/btn23.png" class="mr-2 w-25"><p>Создать кейс</p></a></div>
		</div>
		<div class="col-10" style="height: 2000px; background: #f0f0f0">
			<div class="col-12 mx-auto">	
				<form action="moikeis.php" method="GET">
					<div class="mr-4" style="margin-top: 30px;">
						<input placeholder="Логин" name="malisheva" class="form-control border-0">
					</div>
					<div class="mr-4" style="margin-top: 20px;">
						<button class="btn text-white rounded-circle mr-auto" style="width: 65px;"><img src="img/btn1.png" class="rounded-circle w-100"></button>
					</div>
				</form>
			</div>
			<div class="d-flex">
				<div class="col-4 mx-auto mt-5" style="height: 1000px; background: white;">
					<h5 class="mt-3" style="text-align: center;">Кейсы</h5>	
					<?php
						$connect = mysqli_connect("127.0.0.1", "root", "", "hackaton");
						$query = mysqli_query($connect, "SELECT * FROM adm");
						$resolt = $query->fetch_assoc();

						$jj = $_GET["malisheva"];
						$jj = strtok($jj, " ");

						$ppp = $resolt['author'];
						$ppp = strtok($ppp, " ");

						$aa = mysqli_num_rows($query);

						if ($ppp == $jj) {
							for ($p = 0; $p <= $aa; $p++) {
								if ($ppp == $jj) {
									echo "<div class='mх-auto mt-2'><img class='w-100' style='height: 150px;' src=" . $resolt['img'] . ">";
									echo "<div><a class='font-weight-normal' style='font-size: 15px;' href=>" . $resolt['name'] . "</a></div>";
									echo "<div><p class='font-weight-normal' style='font-size: 10px;''>" . $resolt['text'] . "</p></div></div>";
									?>
									<form action="xz2.php" method="GET">
										<div class="d-flex">
											<input placeholder="Логин" name="loh" class="form-control border-0 col-4 ml-auto" style="text-align: center; margin-top: 7px;">
											<input value="1000" name="money" class="form-control d-none">
											<button class="btn text-white rounded-circle mr-auto" style="width: 65px;"><img src="img/btn1.png" class="rounded-circle w-100"></button>
										</div>
									</form>
									<?php
								}
								$resolt = $query->fetch_assoc();
								$ppp = $resolt['author'];
								$ppp = strtok($ppp, " ");
							}
						}
					?>
				</div>
				<div class="col-4 mx-auto mt-5" style="height: 1000px; background: white;">
					<h5 class="mt-3" style="text-align: center;">Решения</h5>
					<?php
						$query = mysqli_query($connect, "SELECT * FROM user");
						$resolt = $query->fetch_assoc();

						$j = $_GET["malisheva"];
						$j = strtok($j, " ");

						$pp = $resolt['author'];
						$pp = strtok($pp, " ");

						$a = mysqli_num_rows($query);

						if ($pp == $j) {
							for ($p = 0; $p <= $a; $p++) {
								if ($pp == $j) {
									echo "<div class='mх-auto mt-2'><img class='w-100' style='height: 150px;' src=" . $resolt['img'] . ">";
									echo "<div><a class='font-weight-normal' style='font-size: 15px;' href=>" . $resolt['link'] . "</a></div></div>";
								}
								$resolt = $query->fetch_assoc();
								$pp = $resolt['author'];
								$pp = strtok($pp, " ");
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>