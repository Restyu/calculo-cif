
<?php 

		$dni = $_GET['dni'];

		$letra = substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calculo letra nif</title>
</head>
<body>
	

	 <h1>CIF: <?php echo $dni; ?> - <?php echo $letra ; ?> </h1>

</body>
</html>