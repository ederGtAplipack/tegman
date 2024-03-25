<?php
    date_default_timezone_set('America/Sao_Paulo');

        if (!include("Xa14Raty8ba22.php") ) {
          die('Arquivo não Disponivel');    
        }

    $var0=$_POST['nome'];
    $var1=$_POST["idade"];
    $var2=$_POST["sexo"];
    $var3=$_POST["altura"];
    $var4=$_POST["cabelos_cor"];
    $var5=$_POST["olhos_cor"];
    $var6=$_POST["barba"];
    $var7=$_POST["tatoos"];
    $var8=$_POST["oculos"];
    $var9=$_POST["cicatrizes"];
    $varA=$_POST["pes_tam"];

    $con= mysqli_connect($xdb_server,$xdb_user,$xdb_pass,$xdb_name);
    
    if (!$con) {
        die('Conector inativo: ' . mysqli_connect_error());
    }
    
    $charset = mysqli_query($con, "SET NAMES 'utf8'");
    $sql="update suspeitos set idade=$var1, sexo='$var2', altura='$var3',
    cabelos_cor='$var4', olhos_cor='$var5', barba='$var6', tatoos='$var7',
    oculos='$var8', cicatrizes='$var9', pes_tam='$varA' where nome='$var0';";
        
    echo $sql;
        
        if (mysqli_query($con,$sql)) {
            echo "Atualizado com sucesso!";
            header('Location: ./index.html');
        }
        else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
            echo $sql;
    }
    mysqli_close($con);
exit(0);
?>