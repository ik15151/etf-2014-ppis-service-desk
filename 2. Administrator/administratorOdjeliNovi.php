<?php

	try
	{
		mysql_connect("localhost", "root", "root") or die("Unable to connect to the server: ".mysql_error()); // NAPOMENA: podesiti odgovarajući username i password
		mysql_set_charset("utf8");
		mysql_select_db("service_desk_db") or die("Unable to connect to the database: ".mysql_error()); // NAPOMENA: Ukoliko se promijeni, podesiti odgovarajući naziv baze 
		
		$q = mysql_query("INSERT INTO odjel SET naziv = '$_POST[naziv]', lokacija = '$_POST[lokacija]', adresa = '$_POST[adresa]', telefon = '$_POST[telefon]', email = '$_POST[email]';") or die("Error in query: ".mysql_error());
					
		mysql_close();
		
		echo "Odjel je uspješno sačuvan!";
	}
	catch (Exception $e) 
	{
		echo 'Caught exception: ', $e->getMessage(), "\n";
	}

?>