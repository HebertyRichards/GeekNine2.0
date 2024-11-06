<?php
session_start();


if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p class=ola>Olá, $nome_usuario!</p>";
  echo '<button title="Usuario"></button>';
  echo '<a href="logout.php"><button title="Logout">Logout</button></a>';

} else {

    echo '<a href="login.php"><button title="Login">Login</button></a>';
    echo '/<a href="cadastro.php"><button title="Cadastro">Cadastre-se</button></a>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grand Theft Auto VI </title>
  <link href="games1.css" rel="stylesheet" type="text/css" />
  <script defer src="script.js"></script>
    <link rel="website icon" type="png" href="imagens/file.png">
    </head>
    <body>
      <header>
          <img src="imagens/GeekTopo2.png" class="img-fluid">
        </header>
      <div id="menu-container">
      <a href="index.php"><button title="Início">Início</button></a>
      <a href="sobre.php"><button title="Sobre">Sobre</button></a>
      <a href="games.php"><button title="Games">Games</button></a>
      <a href="tecnologia.php"><button title="Tecnologia">Tecnologia</button></a>
      <a href="filmes.php"><button title="Filmes">Filmes</button></a>
      <a href="eventos.php"><button title="Eventos">Eventos</button></a>
    </div>
    <div id="menu-container2">
        <div class="modo">
            <img src="imagens/GeekTopo2.png" class="img-fluid">
            <button class="openbtn" onclick="openNav()">☰</button>
        </div>
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          <a href="index.php"><button title="Início">Início</button></a>
          <a href="sobre.php"><button title="Sobre">Sobre</button></a>
          <a href="games.php"><button title="Games">Games</button></a>
          <a href="tecnologia.php"><button title="Tecnologia">Tecnologia</button></a>
          <a href="filmes.php"><button title="Filmes">Filmes</button></a>
          <a href="eventos.php"><button title="Eventos">Eventos</button></a>
        </div>
    </div>
  <div class="container-a">
    <div class="div1">
    <img src="imagens/gta6.png" alt="Counter Strike 2">
      <div class="title">
    <h1>Grand Theft Auto VI</h1>
      <div class = "mdb">
      <p> 2025 </p>
      <dp> Ação / Aventura / Policial</p>
        <a href="https://www.imdb.com/title/tt18282598/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_gta%25206">Em Produção </a> 
        </div>
  <div class="texto1">
    <p> Grand Theft Auto VI é um futuro jogo eletrônico de ação-aventura desenvolvido pela Rockstar Studios e publicado pela Rockstar Games. Será o oitavo título principal da franquia Grand Theft Auto, sendo o sucessor de Grand Theft Auto V, e o décimo sexto jogo eletrônico da série.</p>
  </div>
      </div>
      </div>
        <footer>
          <div class="contato">
            <div class="contato-1">
              <ul><h1>Contato</h1>
            <li><img src="imagens/gmail.png">Geeknine@gmail.com</li>
            <li><img src="imagens/telefone.png">Telefone:(11) 0000-0000</li>
            <li><img src="imagens/whatsapp.png">Whatsapp: (11) 00000-0000</li>
          </ul>
          </div>
        <div class="redes-sociais"> 
          <a href="https://www.facebook.com/people/GeekNine/61557039160232/" target="_blank"><button
              title="Facebook">Facebook</button></a>
          <a href="https://www.instagram.com/geek_nine/?igsh=MXBqemduaHFybDFuZg%3D%3D" target="_blank"><button
              title="Instagram">Instagram</button></a>
          <a href="https://twitter.com/GeekNine9" target="_blank"><button title="Twitter">Twitter</button></a>
        </div>
        </div>
        <div class="logo">
        <p>GeekNine © 2024 Todos os Direitos Reservados</p>
        </div>
        </footer>
</body>

</html>
