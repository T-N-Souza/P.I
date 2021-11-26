<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/phpUpdateForm.css">
    </head>
    <body>
	<div>	
		<div>
			<img src="images/icons/si.png" class="img">
		</div>
	</div>
        <?php 
            include("update.php");
            $dbhost = "us-cdbr-east-04.cleardb.com";
            $dbuser = "b0c7cb660f5afa";
            $dbpass = "52082f75";
            $dbname = "heroku_78b565be909bd5f";

            $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            mysqli_select_db($con, 'heroku_78b565be909bd5f');
            $sql = "SELECT * FROM users";
            $records = mysqli_query($con, $sql);

?>
<center>
        <div class="test">
			<h1>Atualize a ordem de serviço dos clientes por aqui!</h1>
		</div>
<table>
       
    <tr>
        <th>Nº Ordem de Serviço</th>
        <th>Situação</th>
        <th>Prazo</th>
        <th>Informações Adicionais</th>
    </tr>
    <?php 
    while($row = mysqli_fetch_array($records)){
        echo "<tr><form action=update.php method=post>";
        echo "<td><input type=text name=serv value='".$row['servico']."'></td>";
        echo "<td><input type=text name=situ value='".$row['situacao']."'></td>";
        echo "<td><input type=text name=pra value='".$row['prazo']."'></td>";
        echo "<td><input type=text name=inf value='".$row['adinfo']."'></td>";
        echo "<input type=hidden name=id value='".$row['id']."'>";
        echo "<td><input type=submit value='Atualizar'>";
        echo "</form></tr>";
    }
        
?> 
</table>
</center>
    </body>
</html>