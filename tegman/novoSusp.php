<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<form name="input" action="https://nx-websitesenai.000webhostapp.com/suspeitos/cadSusp.php" method="POST">
  <table align="center">
   <tr>
      <td>Nome:</td>
      <td><input type="text" name="nome" maxlength="20" size="20" value="nome"</td>
   </tr>
   <tr>
      <td>Idade:</td>
      <td><input type="text" name="idade" maxlength="20" size="20" value="idade"</td>
   </tr>
    <tr>
      <td>Sexo:</td>
      <td>
         <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Altura:</td>
      <td>
         <select name="altura">
            <option value="Baixo">Baixo</option>
            <option value="Médio">Médio</option>
            <option value="Alto">Alto</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Cabelos:</td>
      <td>
         <select name="cabelos_cor">
            <option value="Castanho">Castanho</option>
            <option value="Preto">Preto</option>
            <option value="Loiro">Loiro</option>
            <option value="Ruivo">Ruivo</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Olhos:</td>
      <td>
         <select name="olhos_cor">
            <option value="Castanho">Castanho</option>
            <option value="Azul">Azul</option>
            <option value="Verde">Verde</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Barba:</td>
      <td>
         <select name="barba">
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Tatoos:</td>
      <td>
         <select name="tatoos">
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Óculos:</td>
      <td>
         <select name="oculos">
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Cicatrizes:</td>
      <td>
         <select name="cicatrizes">
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
         </select>
      </td>
   </tr>
   <tr>
      <td>Pés:</td>
      <td>
         <select name="pes_tam">
            <option value="Pequeno">Pequeno</option>
            <option value="Médio">Médio</option>
            <option value="Grande">Grande</option>
         </select>
      </td>
   </tr>
   
   <tr>
      <td></td>
      <td><input type="submit" value="Gravar"></td>
   </tr>
</table>
</form>
</body>
</html>



    