<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="print">
				<?php  

				include_once('config.php');

				$valorm = filter_input(INPUT_POST, 'Valorm');
				$valorn = filter_input(INPUT_POST, 'Valorn');

					$cadastro = "INSERT INTO quadrado (valore1, valore2) VALUES ('$valorm', '$valorn')";
					$somavalores = $valorm + $valorn;
						echo "<h1>Quadrados cadastrados  e valor total dos lados $somavalores</h1>";
			 	?>
			 	<form action="inicial.php">
					    <button type="submit" class="button">Voltar Menu</button>
				</form>
 	</div>
</body>
</html>
