<?php
	$tabEyes = array(
		""			=> "",
		"Amber" 	=> "Ambar",
		"Black"		=> "Negro",
		"Blue"		=> "Azul",
		"Blue Green" => "Verde Azulado",
		"Blue Grey" => "Gris Azulado",
		"Brown"		=> "Castaño",
		"Brown Coffee" => "Café",
		"Dark Brown"=> "Castaño Oscuro",
		"Green"		=> "Verde",
		"Green Brown" => "Verde Café",
		"Green Grey" => "Verde Grisaseo",
		"Grey"		=> "Gris",
		"Hazel"		=> "Avellano",
		"Honey"		=> "Miel",
		"Light Blue"	=> "Azul Claro",
		"Light Brown"	=> "Castaño Claro"
	);
	$tabHair = array(
		""			=> "",
		"Hairless"	=> "Sin Cabello",
		"Ash Blonde"	=> "Rubio Cenizo",
		"Auburn"	=> "Pelirrojo",
		"Black"		=> "Negro",
		"Blonde"	=> "Rubio",
		"Brown"		=> "Castaño",
		"Brown Coffee" => "Café",
		"Cendre"	=> "Cenizo",
		"Chestnut"	=> "Marrón",
		"Dark"		=> "Oscuro",
		"Dark Black"	=> "Negro Intenso",		
		"Dark Blonde"	=> "Rubio Oscuro",
		"Dark Brown"=> "Castaño Oscuro",
		"Grey"		=> "Gris",
		"Grey Black"	=> "Negro Cenizo",
		"Light Blonde"	=> "Rubio Claro",
		"Light Brown"	=> "Castaño Claro",
		"Medium Blonde"	=> "Rubio Medio",
		"Platinum Blonde"	=> "Rubio Platino",
		"Red"		=> "Rojo",
		"Red Blonde"=> "Pelirrojo Rubio",
		"Red Brown"	=> "Castaño Rojo",
		"Salt and Pepper"	=> "Sal y Pimienta",
		"Strawberry Blonde"	=> "Rubio Fresa"
	);
	if(isset($_GET['type'])){
		include_once 'list.php';
	}else{
		include_once 'profile.php';
	}
?>