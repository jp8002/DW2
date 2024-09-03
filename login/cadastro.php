<?php
	session_start();
	if (!isset ($_SESSION['loggedin']) || $_SESSION['loggedin'] == FALSE) {
		header("location: index.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastro</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
                <input type="button" onclick="location.href='welcome.php'" class=" btn btn-warning" value="Voltar">
            </div>
        </form>
    </div>

</body>
</html>

<?php 
	if (!file_exists("cadastros.txt")) {
		$handle = fopen('cadastros.txt', 'a');
		fclose($handle);
	}
	
	else{
		
		if (!empty($_POST['nome']) && !empty($_POST['cpf'])) {
			$handle = fopen('cadastros.txt', 'a');
			fwrite($handle, $_POST['nome'].": ".$_POST['cpf'].PHP_EOL);
			fclose($handle);
		}

		$handle = fopen("cadastros.txt",'r');
		while (!feof($handle)) {
			$line = fgets($handle);
			echo $line.'<br>';
		}

		fclose($handle);
	}
 ?>