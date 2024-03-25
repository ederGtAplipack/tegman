<?php
    date_default_timezone_set('America/Sao_Paulo');

        if (!include("Xa14Raty8ba22.php") ) {
          die('Arquivo não Disponivel');    
        }

    $var0=$_POST['ni'];
    $var1=$_POST["nome_equipamento"];
    $var2=$_POST["dt_aquisicao"];
    $var3=$_POST["dt_fabricacao"];
    $var4=$_POST["setor"];
    $var5=$_POST["fabricante"];
   
    $con= mysqli_connect($xdb_server,$xdb_user,$xdb_pass,$xdb_name);
    
    if (!$con) {
        die('Conector inativo: ' . mysqli_connect_error());
    }
    
    $charset = mysqli_query($con, "SET NAMES 'utf8'");
    $sql="INSERT INTO equipamentos (ni, nome_equipamento, dt_aquisicao, dt_fabricacao, setor, fabricante) 
    VALUES ('$var0', '$var1', '$var2', '$var3', '$var4', '$var5');";
        
        if (mysqli_query($con,$sql)) {
            echo "Cadastrado com sucesso!";
        }
        else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
            echo $sql;
    }
    mysqli_close($con);
exit(0);
?>