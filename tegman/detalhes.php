<?php
date_default_timezone_set("America/Sao_Paulo");


if (!include("bethaalpha18.php") ) {
  die('Arquivo não Disponivel');    
}

$var0=$_GET["nome"];

$con = mysqli_connect($xdb_server, $xdb_user, $xdb_pass, $xdb_name);
if (!$con) {
    die("Conector inativo:" . mysqli_connect_error());
}

$charset = mysqli_query($con, "SET NAMES 'utf8'");

$sql = "SELECT idade, sexo, altura, cabelos_cor, olhos_cor, barba, tatoos, oculos, cicatrizes, pes_tam FROM
suspeitos WHERE nome='$var0';"; 

    $resultado = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
?>
    
    <form name="input" action="https://nx-websitesenai.000webhostapp.com/suspeitos/atualizarSusp.php" method="POST">
        <input type="hidden" name="nome" id="nome" value="<?php echo $var0; ?>">
        <table align="center">
   <tr>
      <td>Nome:</td>
      <td><?php echo '<b>'.$var0.'</b>';?></td>
   </tr>
   <tr>
      <td>Idade:</td>
      <td><input type="text" name="idade" maxlength="3" size="4" value="<?php
         echo $row['idade']; ?>"</td>
   </tr>
   <tr>
      <td>Sexo:</td>
      <td>
         <select name="sexo">
            <option <?php echo
               $row['sexo']=='Feminino'?'selected ':''; ?>value="Feminino">Feminino</option>
            <option <?php echo
               $row['sexo']=='Masculino'?'selected ':''; ?>value="Masculino">Masculino</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Altura:</td>
      <td>
         <select name="altura">
            <option <?php echo
               $row['altura']=='Baixo'?'selected ':''; ?>value="Baixo">Baixo</option>
            <option <?php echo
               $row['altura']=='Médio'?'selected '
               
               :''; ?>value="Médio">Médio</option>
            <option <?php echo
               $row['altura']=='Alto'?'selected '
               :''; ?>value="Alto">Alto</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Cabelos:</td>
      <td>
         <select name="cabelos_cor">
            <option <?php echo
               $row['cabelos_cor']=='Castanho'?'selected ':''; ?>value="Castanho">Castanho</option>
            <option <?php echo
               $row['cabelos_cor']=='Preto'?'selected '
               :''; ?>value="Preto">Preto</option>
            <option <?php echo
               $row['cabelos_cor']=='Loiro'?'selected '
               :''; ?>value="Loiro">Loiro</option>
            <option <?php echo
               $row['cabelos_cor']=='Ruivo'?'selected '
               :''; ?>value="Ruivo">Ruivo</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Olhos:</td>
      <td>
         <select name="olhos_cor">
            <option <?php echo
               $row['olhos_cor']=='Castanho'?'selected ':''; ?>value="Castanho">Castanho</option>
            <option <?php echo
               $row['olhos_cor']=='Azul'?'selected '
               :''; ?>value="Azul">Azul</option>
            <option <?php echo
               $row['olhos_cor']=='Verde'?'selected '
               :''; ?>value="Verde">Verde</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Barba:</td>
      <td>
         <select name="barba">
            <option <?php echo $row['barba']=='Sim'?'selected
               ':''; ?>value="Sim">Sim</option>
            <option <?php echo $row['barba']=='Não'?'selected
               ':''; ?>value="Não">Não</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Tatoos:</td>
      <td>
         <select name="tatoos">
            <option <?php echo
               $row['tatoos']=='Sim'?'selected ':''; ?>value="Sim">Sim</option>
            <option <?php echo $row['tatoos']=='Não'?'selected
               ':''; ?>value="Não">Não</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Óculos:</td>
      <td>
         <select name="oculos">
            <option <?php echo
               $row['oculos']=='Sim'?'selected ':''; ?>value="Sim">Sim</option>
            <option <?php echo $row['oculos']=='Não'?'selected
               ':''; ?>value="Não">Não</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Cicatrizes:</td>
      <td>
         <select name="cicatrizes">
            <option <?php echo
               $row['cicatrizes']=='Sim'?'selected ':''; ?>value="Sim">Sim</option>
            <option <?php echo
               $row['cicatrizes']=='Não'?'selected ':''; ?>value="Não">Não</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Pés:</td>
      <td>
         <select name="pes_tam">
            <option <?php echo
               $row['pes_tam']=='Pequeno'?'selected ':''; ?>value="Pequeno">Pequeno</option>
            <option <?php echo
               $row['pes_tam']=='Médio'?'selected '
               :''; ?>value="Médio">Médio</option>
            <option <?php echo
               $row['pes_tam']=='Grande'?'selected '
               :''; ?>value="Grande">Grande</option>
         </select>
      </td>
   </tr>
   <tr>
      <td></td>
      <td><input type="submit" value="Gravar"></td>
   </tr>
</table>
    
    </form>
    <?php
    mysqli_close($con);
    exit(0);
    }
        else
    {
    mysqli_close($con);
    die("Nome não encontrado");;
    }

?>
