<?php
date_default_timezone_set('America/Sao_Paulo');

// Inclua o arquivo "bethaalpha18.php" apenas se estiver disponível.
if (file_exists("vonTegman.php")) {
    require_once("vonTegman.php");
} else {
    die('Arquivo não Disponível');
}

// Verifique se os campos "usuario" e "senha" foram enviados via POST.
if (isset($_POST["usuario"]) && isset($_POST["senha"])) {
    $var0 = $_POST["usuario"];
    $var1 = $_POST["senha"];

    // Conecte-se ao banco de dados.
    $con = mysqli_connect($xdb_server, $xdb_user, $xdb_pass, $xdb_name);
    if (!$con) {
        die("Conector inativo: " . mysqli_connect_error());
    }

    // Defina o conjunto de caracteres para UTF-8.
    $charset = mysqli_query($con, "SET NAMES 'utf8'");

    // Use declarações preparadas para evitar injeção de SQL.
    $sql = "SELECT COUNT(*) as qts FROM usuario WHERE usuario=? and senha=? and ativo='S'";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $var0, $var1);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $qts);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Verifique se a autenticação foi bem-sucedida.
    if ($qts == 1) {
        session_start();
        $_SESSION['token'] = 'basic#';
        header("Location: https://nx-websitesenai.000webhostapp.com/suspeitos/validado.php");
        exit();
    } else {
        mysqli_close($con);
        die('Dados Incorretos!');
        header("Location: https://nx-websitesenai.000webhostapp.com/suspeitos/validado.php");
        exit();
    }
} else {
    die('Campos "usuario" e "senha" não foram fornecidos.');
}

?>