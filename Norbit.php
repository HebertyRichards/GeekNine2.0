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
  <title>Norbit</title>
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
    <img src="imagens/Norbit.png" alt="Norbit">
    <div class="title">
    <h1>Norbit</h1>
    <div class = "mdb"> 
    <p> 2007 </p>
    <p> 1h, 43m </p>
      <a href="https://www.imdb.com/title/tt0477051/?ref_=nv_sr_srsg_0_tt_5_nm_3_q_norbit">4.2/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Eddie Murphy.png" alt="Eddie Murphy">
      <span>Eddie Murphy</span>
        <img src="imagens/Thandie Newton.png" alt="Thandie Newton">
      <span>Thandie Newton</span>
        <img src="imagens/Terry Crews.png" alt="Terry Crews">
      <span>Terry Crews</span>
        <img src="imagens/Clifton Powell.png" alt="Clifton Powell">
      <span>Clifton Powell</span>
  </div>
  <div class="texto1">
    <p>Norbit (Eddie Murphy) foi criado pelo sr. Wong (Eddie Murphy), que o encontrou ainda bebê no Restaurante e Orfanato Wonton Dourado. Foi neste local que ele conheceu sua alma gêmea, Kate (Thandie Newton). Eles se tornam amigos inseparáveis, até ela ser adotada e deixar o local. Aos 9 anos, Norbit é ameaçado por três garotos da escola mas é salvo por Rasputia (Eddie Murphy), uma robusta garota de 10 anos. Os dois crescem, namoram e se casam. Juntamente com seus irmãos Jack Grandão (Terry Lewis), Azulão (Mighty Rasta) e Earl (Clifton Powell), Rasputia administra a Construtora Latimore. Norbit é empregado da empresa, sendo sempre ridicularizado pelos cunhados. A vida de Norbit não anda nada bem, mas ela muda após reencontrar Kate, que decide comprar o antigo orfanato do sr. Wong. Porém o que Kate não sabe é que seu noivo, Deion (Cuba Gooding Jr.), planeja transformar o local em um bar de strip-tease, contando com a ajuda dos irmãos de Rasputia. Reanimado por ter reencontrado Kate, Norbit ganha confiança e, aos poucos, passa a enfrentar a esposa e sua família.</p>
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
