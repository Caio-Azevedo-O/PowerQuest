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
      </form>
    </div>

    <div class="imagem-lateral">
      <img src="imagem/bombado.png" alt="Homem fitness">
    </div>
  </div>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-logo">        
        <img src="imagem/Power.png" alt="Logo">
      </div>
      <div class="footer-links">
        <a href="#" class="footer-link">Início</a>
        <a href="#" class="footer-link">Planos</a>
        <a href="#" class="footer-link">Consulta</a>
        <a href="#" class="footer-link">Contato</a>
      </div>
    </div>

    <div class="footer-info">
      <div class="footer-left">
        <h3>Quem Somos??</h3>
        <p>
          Bem-vindo a Power Quest, o seu espaço dedicado à saúde, bem-estar e superação! Somos mais que um site – somos uma comunidade apaixonada por transformar vidas, proporcionando a cada aluno a motivação, o apoio e os recursos necessários para alcançar seus objetivos fitness.
          Nossa missão é simples: inspirar e capacitar você a ser a melhor versão de si mesmo. Com profissionais qualificados, equipamentos de última geração e uma vasta variedade de programas de treinamento, oferecemos o ambiente perfeito para quem busca uma vida mais saudável e equilibrada.
        </p>
      </div>
      <div class="footer-right">
        <div class="social-media">
          <a href="#"><img src="https://img.icons8.com/ios-filled/25/ffffff/instagram-new.png" alt="Instagram" /></a>
          <a href="#"><img src="https://img.icons8.com/ios-filled/25/ffffff/whatsapp.png" alt="WhatsApp" /></a>
          <a href="#"><img src="https://img.icons8.com/ios-filled/25/ffffff/facebook-new.png" alt="Facebook" /></a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>

