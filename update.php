<?php 
                $dbhost = "us-cdbr-east-04.cleardb.com";
                $dbuser = "b0c7cb660f5afa";
                $dbpass = "52082f75";
                $dbname = "heroku_78b565be909bd5f";

            $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            mysqli_select_db($con, 'heroku_78b565be909bd5f');
            if (isset($_POST['situ'])){
                $sql = "UPDATE users SET servico='$_POST[serv]', situacao='$_POST[situ]', prazo='$_POST[pra]', adinfo='$_POST[inf]' WHERE id='$_POST[id]'";
                
                if(mysqli_query($con, $sql))
                    header("refresh: 1; phpUpdateForm.php");
                else
                    echo "Not Updated";
            }
            


?>