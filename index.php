<?php
	$host = 'ec2-54-217-235-159.eu-west-1.compute.amazonaws.com';
	$user = 'wwagzkrthsjslb';
	$pass = 'f037a36e6e2452e351f9e88446df480d013dcc943b5de972a461682fb8811dd9';
	$db   = 'd6u19tp8jutgfb';
	// $connection = pg_connect ('host=$host port=5432 dbname=$db user=$user');
	$connection = pg_connect ('host=$host port=5432 dbname=$db user=$user password=$pass  sslmode=require');
	
	if (!$connection) {
		die('Не удалось соединиться с базой данных');
	}

	$array = pg_query($connection, "SELECT * FROM blog;");	
	pg_close($connection);
	
	pg_fetch_all( $array );
?>