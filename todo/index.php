 <!DOCTYPE html>
<html>
<body>
<?php
	include "./funciones/funciones.php";
?>
<h1></h1>
<p></p>
	<form action="index.php" method="post">
		Interes:<br>
		<input type="number" step="any" name="interes"><br>
		Renta:<br>
		<input type="number" step="any" name = "Renta"><br>
		Numero de cuotas <br>
		<input type="number" step="any" name = "Cuota"><br>
		<input type = "submit">
	</form> 
	<?php
	echo Capital($_POST['Renta'], $_POST['interes'], $_POST['Cuota']);
	?>
</body>
</html> 