<?php

$dbhost = "us-cdbr-east-04.cleardb.com";
$dbuser = "b0c7cb660f5afa";
$dbpass = "52082f75";
$dbname = "heroku_78b565be909bd5f";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>