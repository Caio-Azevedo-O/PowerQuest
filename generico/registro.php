<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PowerQuest</title>
  <link rel="stylesheet" href="css/registro.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="imagem/Logo.png">

</head>
<body>
   
  
  <div class="registro-container">
    <div class="formulario">
      <img class="logo" src="imagem/Power.png" alt="Logo">
      <h2><span>Cadastre</span>-Se</h2>
      <form>
        <input type="text" placeholder="Nome e sobrenome:">
        <input type="text" placeholder="CPF:">

        <label>Possui alguma deficiência física? Se sim, qual?</label>
        <input type="text" placeholder="Sim/Não">

        <div class="flex-group">
          <input type="text" placeholder="Peso:">
          <input type="text" placeholder="Altura:">
          <input type="text" placeholder="Data de nascimento:">
        </div>

        <label>Possui doença crônica? Se sim, qual?</label>
        <input type="text" placeholder="Sim/Não">
        <input type="text" placeholder="Ex: Diabetes, pressão alta...">

        <input type="text" placeholder="Alergias: Ex: pasta, amendoim, poeira, pelo">

        <label>Qual o seu objetivo:</label>
        <select>
          <option>Ganhar massa muscular</option>
          <option>Definir e esculpir o corpo</option>
          <option>Perder peso</option>
          <option>Melhorar o cardio</option>
          <option>Saúde</option>
        </select>

        <label>Tempo de Treino:</label>
        <select>
          <option>1 a 2 anos</option>
          <option>3 a 5 anos</option>
          <option>Mais de 5 anos</option>
          <option>Estou retornando após um tempo</option>
        </select>

        <button type="submit" class="prosseguir">Prosseguir</button>
        <br>
        <p>Ja tem uma conta? <a style="color:aliceblue;" href="login.html">Entrar</a></p>
      </form>
    </div>

    <div class="imagem-lateral">
      <img src="imagem/Logo.png" alt="Homem fitness">
    </div>
  </div>

  
</body>
</html>

