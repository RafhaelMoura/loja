<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_GET["id"];

$query = "DELETE FROM situacaos WHERE id=$id";
$resultado = mysqli_query($conectar, $query);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if ($query ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/loja/adm/administrativo.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Situação apagada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/loja/adm/administrativo.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Situação não foi apagada com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>
