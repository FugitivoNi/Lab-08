<?php 


try {
	$bd = new PDO (
		'mysql://root:5y2vOH7Eocg1zdxP51x4@containers-us-west-49.railway.app:5531/railway',
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>
