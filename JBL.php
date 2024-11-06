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
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JBL</title>
  <link href="tecnologia.css" rel="stylesheet" type="text/css" />
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
  <table>
         <div class = "h1">
        <h1> JBL Quantum Stream Studio é lançado no Brasil;<br> veja o preço do microfone premium </h1>
    </div>
     <div class = "chip-b">
  <img src="imagens/jbl-1.jpeg" alt="imagens/jbl-1.jpeg">
      </div>
     <div class = "chip-c">
       
 <P>Com três microfones condensadores e taxa de amostragem de 192 kHz/24 bits, a novidade oferece gravação com qualidade de estúdio, trazendo quatro modos de captação de voz. A opção normal é ideal para sessões individuais, enquanto a bidirecional funciona em entrevistas ou quando for necessário captar áudio em ambos os lados do equipamento.</p>

<p> Já o modo estéreo atende aos usuários que fazem narrações, possibilitando identificar claramente os lados da captação nos fones de ouvido. Por fim, há a alternativa de captação 360º, indicada para as gravações que envolvem a participação de diversas vozes em um mesmo ambiente.</p>

<p>É possível alternar entre os padrões de gravação pressionando o botão na frente do JBL Quantum Stream Studio, escolhendo a opção mais adequada para as suas necessidades. Outro destaque é o compressor de faixa dinâmica, impedindo que a voz seja cortada caso você fale muito baixo ou exagere no volume.</p>

<p> Até porque, programar não se resume apenas a escrever linhas de código. Esse trabalho é baseado na somatória da aplicação de lógica e conhecimento técnico com uma dose significativa de criatividade e intuição por parte do profissional. Em outras palavras, os devs precisam saber atuar diante de problemas complexos que exigem uma capacidade resolutiva, que uma máquina ainda não consegue suprir.  Embora a inteligência artificial possa ajudar na automação de tarefas rotineiras, ela não é capaz de igualar a criatividade e intuição humana diante dos desafios. Muito pelo contrário, IAs generativas como Chat GPT, por exemplo, não possuem nenhuma inteligência ou qualquer coisa do tipo. Elas são parte de algoritmos sofisticados, treinados com uma grande quantidade de dados e retornam informações baseadas em padrões, ou seja, não há qualquer tipo de consciência.</p>
       <div class = "chip-b">
        <img src="imagens/JBL-t.jpeg" alt="imagens/JBL-t.jpeg" width="500px">
       </div>

<p>  Como o processo de programação precisa envolver as necessidades e demandas dos usuários, é preciso que pontos “externos”, ou do além da tela, também sejam considerados. Sem essa compreensão abrangente do contexto, algo pouco explorado nas aplicações da IA, o trabalho tende a ficar comprometido. Apesar dela ser importante no exercício de sugestão e assistência da codificação, o sensorial humano ainda é fundamental para a tomada de decisões eficazes e implementações assertivas.Outro ponto fundamental que permeia o trabalho dos devs é a questão ética. Os profissionais da área são constantemente desafiados a conjecturar o equilíbrio entre a funcionalidade técnica e a moralidade das suas ações. Assim, itens como a privacidade e segurança dos dados atrelados aos sistemas que estão sendo desenvolvidos representam uma importância significativa no seu dia a dia. Essa capacidade de ponderar os aspectos éticos das aplicações é algo que a IA não possui expertise para orientar e ainda nem está no seu foco de atuação.  Por todos esses motivos, posso afirmar claramente que a IA não deve tomar o emprego dos devs a curto prazo. No entanto, com certeza, o desenvolvedor que souber usar ela a seu favor, seja para completar um código ou tirar uma dúvida pontual, irá se sobressair em relação aqueles que ainda não utilizam tais ferramentas. </p>
  <div class = "sub">
     <h2>Quanto custa o JBL Quantum Stream Studio?</h2>
      </div>
       <p>Microfone principal da linha Quantum Stream, o lançamento também possui botão para silenciar as transmissões temporariamente, recurso útil para atender uma ligação durante a gravação. Enquanto a função silencioso estiver ativada, as luzes RGB ao redor da grade ficam vermelhas, alertando o usuário.</p>

   <p>      Ele tem, ainda, um medidor RGB VU monitorando os níveis de volume em tempo real, permitindo realizar os ajustes com rapidez. Mais funcionalidades estão disponíveis por meio do app JBL QuantumENGINE, onde é possível configurar a equalização, o volume e a iluminação, habilitar a redução de ruídos e muito mais.</p>
  <p>    O novo microfone da JBL possui montagem universal, podendo ser usado com o suporte que o acompanha, em um pedestal articulado ou sistema de grampo em C. Basta rosqueá-lo em qualquer uma das opções, deixando-o pronto para uso nas gravações e streaming.</p>

       <p>  Disponível na loja online da marca, o JBL Quantum Stream Studio está à venda com preço sugerido de R$ 849.</p>
     </div>
      <br></br>
         <br></br> 
         <br></br>
      <div class="container-a">
        <h2>OUTRAS NOTICÍAS:</h2>
      </div>
      <div class="news-container">
      <div class="news-item">
        <img src="imagens/eletronicos.jpeg" alt="Imagem de Exemplo 1">
        <h2>Eletrônicos mais populares</h2>
        <p> Site AliExpress com até 92% de desconto</p>
        <a href="eletronicos.php">Leia mais</a>
      </div>
      <div class="news-item">
        <img src="imagens/woocommerce.jpeg" alt="Imagem de Exemplo 2">
        <h2> WooCommerce</h2>
        <p>Descubra o que é o WooCommerce e as vantagens de hospedar a sua loja online com essa plataforma na Hostinger</p>
        <a href="woocommerce.php">Leia mais</a>
      </div>

      <div class="news-item">
        <img src="imagens/moto g24.jpeg" alt="Imagem de Exemplo 2">
        <h2>Moto G24 Power chega ao Brasil custando R$ 999</h2>
        <p>Novo smartphone baratinho da Motorola já pode ser comprado no Brasil. Aparelho traz bateria de 6.000 mAh e carregamento rápido de até 30 W</p>
        <a href="moto g24.php">Leia mais</a>
      </div>
      </div>
    </table>
  <br></br>
  <br></br> 
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