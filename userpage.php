<?php

use function PHPSTORM_META\type;

session_start();

if(isset($_REQUEST['logout'])){
	session_destroy();
	header("Location: login.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main_userpage.css">
</head>
<body>
	<div>	
		<div>
			<img src="images/icons/si.png" class="img">
		</div>
	</div>
<center>
		<div class="test">
			<h1>Acompanhe a sua máquina aqui!</h1>
		</div>
		<h2>Por favor, digite sua ordem de serviço abaixo.</h2>
				<form action="" method="POST" class="form">
					<input type="text" name="servico" placeholder="Coloque a ordem de serviço"/>
					<input type="submit" name="search" value="Procurar">
				</form>
				<table>
					<tr class="form">
						<th>Situação</th>
						<th>Prazo</th>
						<th>Informações Adicionais</th>
					</tr> <br>
					<?php 
					$connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b0c7cb660f5afa","52082f75");
					$db = mysqli_select_db($connection, "heroku_78b565be909bd5f");

					if(isset($_POST['search'])){
						$servico = $_POST['servico'];

						$query = "SELECT * FROM `users` where servico='$servico'";
						$query_run = mysqli_query($connection, $query);

						while($row = mysqli_fetch_array($query_run)){
					?>
							<tr>
								<td class="ref-sit"> <?php echo $row['situacao'];?></td>
								<td class="ref-pra"> <?php echo $row['prazo'];?></td>
								<td class="ref-pra"> <?php echo $row['adinfo'];?></td>
							</tr>

							<?php
						}
					}
					
					?>
				</table>
				
				<form method="POST" class="text-center-change">
            		<button class="btn btn-danger" name="logout">Logout</button>
        			</form>
</center>
</body>
</html>