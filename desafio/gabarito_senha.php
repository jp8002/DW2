<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php
    $senha = "1";
    print_r($_POST);
    # Seu código aqui
    if ($senha == $_POST['senha']){
        echo "Acertou!!!";
    }

    else{
        echo "Você errou a senha<br>";
        $handle = fopen("senha_errada.txt","a");
        fwrite($handle,$_POST["senha"]."\n");
        fflush($handle);
        fclose($handle);

        echo "Senhas erradas até agora<br>".PHP_EOL;

        $handle = fopen("senha_errada.txt", "r");
        while(!feof($handle)){
            $line = fgets($handle);
            echo $line."<br>".PHP_EOL;
        }

        fclose($handle);
    }
?>
</body>
</html>
