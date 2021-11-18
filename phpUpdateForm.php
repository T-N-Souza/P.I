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
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "login_sample_db";

            $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            mysqli_select_db($con, 'login_sample_db');
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
    </tr>
    <?php 
    while($row = mysqli_fetch_array($records)){
        echo "<tr><form action=update.php method=post>";
        echo "<td><input type=text name=serv value='".$row['servico']."'></td>";
        echo "<td><input type=text name=situ value='".$row['situacao']."'></td>";
        echo "<td><input type=text name=pra value='".$row['prazo']."'></td>";
        echo "<input type=hidden name=id value='".$row['id']."'>";
        echo "<td><input type=submit value='Submit'>";
        echo "</form></tr>";
    }
        
?> 
</table>
</center>
    </body>
</html>