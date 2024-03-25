<?php
session_start();

if (isset($_SESSION['token'])) {
    if ($_SESSION['token'] == 'basic#') {
        header("Location: https://nx-websitesenai.000webhostapp.com/suspeitos/consultatx.html");
        exit();
    } else {
        $message = "Acesso Negado!";
    }
} else {
    $message = "Acesso Negado!";
}

echo $message;
header("Location: https://nx-websitesenai.000webhostapp.com/suspeitos/index.html");
?>
