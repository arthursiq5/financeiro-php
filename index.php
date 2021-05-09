<?php
require_once('./conexao.php');

$query = $pdo->query("SELECT * FROM usuarios WHERE nivel='ADMINISTRADOR'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_registros = @count($res);

if ($total_registros == 0) {
    $pdo->query("INSERT INTO usuarios 
        SET nome='$nome_admin', 
            email='$email_administrador', 
            senha='123', 
            nivel='Administrador'"
    );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/icon.png">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <title><?= $nome_sistema ?></title>
</head>
<body class="bg-light">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
    
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/icon.png" id="icon" alt="User Icon">
            </div>
    
            <!-- Login Form -->
            <form method="post" action="autenticar.php">
                <input type="email" id="login" class="fadeIn second" name="login" placeholder="Email" required autofocus>
                <input type="password" id="password" class="fadeIn third" name="login" placeholder="Senha" required>
                <button class="fourth fadeIn" type="submit">
                    Entrar
                </button>
            </form>
    
            <!-- Remind Passowrd -->
        
        </div>
    </div>
</body>
</html>
