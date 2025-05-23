<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Página de Login - PowerQuest</title>
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <div class="left-panel">
      <img src="imagem/Power.png" alt="Logo PowerQuest" class="logo-img">
      <h2><strong>Bem Vindo</h2>
      <button class="create-account">Criar conta</button>
      <div class="social-icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-apple"></i>
        <i class="fab fa-facebook"></i>
      </div>
    </div>
    <div class="right-panel">
      <h2>Fazer Login</span></h2>
      <form>
        <input type="email" placeholder="Email@example.com" required />
        <input type="password" placeholder="Senha..." required />
        <div class="options">
          <label><input type="checkbox" /> Lembrar</label>
          <a href="#">Esqueceu a senha?</a>
        </div>
        <button type="submit" class="login-button">Entrar</button>
        <p class="ou">ou</p>
        <div class="social-icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-apple"></i>
          <i class="fab fa-facebook"></i>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
