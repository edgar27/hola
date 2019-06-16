 <!DOCTYPE html>
<html>
<style>
  h1{
    color: #8A0829;
  }
	p{
  text-align: center;
  font-family:Calibri;
  font-size: 20px;

}
img{
width: 10%;
  padding: 10px 15px;
  margin: 8px 0;
  text-align: center;
    margin-left: auto;
  margin-right: auto;


}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #0431B4;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #8A0829;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<?php
include "menu.php";
	include "./funciones/funciones.php";
?>
<CENTER><h1> POR FAVOR  INGRESE LOS DATOS A CALCULAR </h1></CENTER>
<CENTER><h1>INTERES PARA CAPITAL</h1></CENTER>
<p></p>
<div> 
	<form action="interescapital.php" method="post">
		<label for="fname">Capital</label>
		<input id="fname" type="number" step="any" name="Capital" required><br>
		<label for="lname">Renta</label>
		<input id="fname"  type="number" step="any" name = "Renta" required><br>
		<label for="fname">numero de Cuotas</label>
		<input id="fname"  type="number" step="any" name = "Cuota" required><br>
		<input type = "submit">
	</form> 
	<p> Su Calculo es :<?php

  echo 
  Capital($_POST['Capital'], $_POST['Renta'], $_POST['Cuota']);
  ?></p>  
	
</div> 
<div><center><img src="logo.png"></center></div>

</body>
</html> 