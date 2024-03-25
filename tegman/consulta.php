<?php
date_default_timezone_set("America/Sao_Paulo");


if (!include("bethaalpha18.php") ) {
  die('Arquivo não Disponivel');    
}

$con = mysqli_connect($xdb_server, $xdb_user, $xdb_pass, $xdb_name);
if (!$con) {
    die("Conector inativo:" . mysqli_connect_error());
}

$charset = mysqli_query($con, "SET NAMES 'utf8'");

// Obter os valores do formulário
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$altura = $_POST['altura'];
$cabelos = $_POST['cabelos_cor'];
$olhos = $_POST['olhos_cor'];
$barba = $_POST['barba'];
$tatoos = $_POST['tatoos'];
$oculos = $_POST['oculos'];
$cicatrizes = $_POST['cicatrizes'];
$pes = $_POST['pes_tam'];


$sql = "SELECT * FROM suspeitos where 1";
    if (!empty($idade)){
        $sql .= " AND idade = '$idade'";
    }
    if (!empty($sexo)){
        $sql .= " AND sexo = '$sexo'";
    }
    if (!empty($altura)){
        $sql .= " AND altura = '$altura'";
    }
    if (!empty($cabelos)){
        $sql .= " AND cabelos_cor = '$cabelos'";
    }
    if (!empty($olhos)){
        $sql .= " AND olhos_cor = '$olhos'";
    }
    if (!empty($barba)){
        $sql .= " AND barba = '$barba'";
    }
    if (!empty($tatoos)){
        $sql .= " AND tatoos = '$tatoos'";
    }
    if (!empty($oculos)){
        $sql .= " AND oculos = '$oculos'";
    }
    if (!empty($cicatrizes)){
        $sql .= " AND cicatrizes = '$cicatrizes'";
    }
    if (!empty($pes)){
        $sql .= " AND pes_tam = '$pes'";
    }
 
    echo $sql;
   
    $resultado = mysqli_query($con, $sql);
    echo"<table style='margin: auto; border: 2px solid black;'>";
    echo "<caption>Lista de Suspeitos</caption>";
    /*CRIANDO O CABEÇALHO DA TABELA*/
    echo "<tr><th>Nome</th><th>Sexo</th><th>Idade</th>
    <th>Altura</th><th>Cabelos</th><th>Olhos</th><th>Barba</th><th>Tattos</th><th>Óculos</th><th>Cicatrizes</th><th>Pés</th><th>Ações</th><tr>";
    
    $row_count = 0; 
   
     while($row = mysqli_fetch_assoc($resultado) ) {
        $row_count++; // Incrementa o contador de linhas
        if ($row_count %2==0) {
            $color='lightgray';
        }else{
            $color='white';   
        }
    
          //Define uma linha em uma tabela      
       echo '<tr bgcolor= '.$color.'>';
           //Define uma célula em uma tabela
           echo '<td>' . $row['nome']. '</td>'; 
           echo '<td>' . $row['sexo']. '</td>';
           echo '<td>' . $row['idade']. '</td>';
           echo	'<td>' . $row['altura']. '</td>';
           echo	'<td>' . $row['cabelos_cor']. '</td>';
           echo	'<td>' . $row['olhos_cor']. '</td>';
           echo	'<td>' . $row['barba']. '</td>';
           echo	'<td>' . $row['tatoos']. '</td>';
           echo	'<td>' . $row['oculos']. '</td>';
           echo	'<td>' . $row['cicatrizes']. '</td>';
           echo	'<td>' . $row['pes_tam']. '</td>';
           echo "<td><a href='https://nx-websitesenai.000webhostapp.com/suspeitos/detalhes.php?nome=" . $row['nome'] . "'>Detalhes</td>";
           echo '</tr>';

           /*echo '<form method="post" a href="https://nx-websitesenai.000webhostapp.com/suspeitos/editarSusp.php" 
            <a href='https://nx-websitesenai.000webhostapp.com/suspeitos/editarSusp.php?id=' . $row['nome'] . '>Detalhes</a></td>;
                <input type="submit" name="search" value="Pesquisar">
            </form>'*/
        }
    echo"</table>";
mysqli_close($con);
exit(0);
?>
