<?php 
                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $dbname = "login_sample_db";

            $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            mysqli_select_db($con, 'login_sample_db');
            if (isset($_POST['situ'])){
                $sql = "UPDATE users SET servico='$_POST[serv]', situacao='$_POST[situ]', prazo='$_POST[pra]' WHERE id='$_POST[id]'";
                
                if(mysqli_query($con, $sql))
                    header("refresh: 1; phpUpdateForm.php");
                else
                    echo "Not Updated";
            }
            


?>