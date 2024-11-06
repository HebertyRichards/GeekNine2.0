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
  <title>Por que Taiwan é tão importante no mercado de chips e <br>como uma interrupção na produção poderia afetar o mundo</title>
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
    <div class= "chip">
         <div class = "h1">
        <h1> Por que Taiwan é tão importante no mercado de chips e <br>como uma interrupção na produção poderia afetar o mundo </h1>
    </div>
     <div class = "chip-b">
    <img src="imagens/chip.jpg" alt="chip.jpg" width="400px">
      </div>
     <div class = "chip-c">
  <p>O país asiático foi atingido pelo terremoto mais forte registrado lá em 25 anos, e fábricas de chips chegaram a paralisar algumas operações ao longo do dia para avaliar os impactos.Os primeiros relatos são de que não houve danos graves. Mas o tremor levantou a preocupação sobre como um desastre natural poderia desestabilizar o fornecimento desses componentes e causar um baque ainda maior do que a recente "crise dos chips", que atingiu a indústria entre 2020 e 2023 e freou até a produção de carros. Afinal, o que é um chip? É um componente muito pequeno, feito de material semicondutor, principalmente o silício (encontrado na areia) O chip contém um circuito eletrônico e é considerado semicondutor porque deixa passar menos eletricidade do que o cobre, por exemplo, mas não chega a ser um isolante. Fazendo a eletricidade passar e parar de passar, os chips permitem, por exemplo, que aparelhos eletrônicos executem comandos ao apertar de um botão ou que dados sejam armazenados, entre muitas funções. Quem depende dos chips: não é só celular que tem chip... ele está no cartão do banco, nas geladeiras, nas máquinas de lavar, em lâmpadas de LED, nos aviões.
    Nos carros atuais, são usados milhares de chips em diversos sistemas, como computador de bordo, gerenciamento do motor e controle de navegação.
    <div class = "sub">
      <h4>"Taiwan investiu no ramo a partir dos anos 70, deixando de ser uma região conhecida pela produção agrícola e se transformando no centro de exportação dos chips mais avançados do mundo."</h4>
    </div>
   <p>  A maior companhia do setor em todo o mundo fica lá. Fundada em 1987, a Taiwan Semiconductor Manufacturing Company (TSMC) fornece componentes para clientes como a Apple, criadora do iPhone, e a Nvidia, que se tornou uma das empresas mais valiosas do mundo graças ao desenvolvimento de chips mais complexos, aqueles usados para inteligência artificial</p>
        <div class = "sub">
      <h4>"Praticamente todo celular, a maioria dos computadores e qualquer banco de dados do mundo tem chips produzidos pela TSMC e só ela é capaz de produzir. 90% dos chips de processamento mais avançados do planeta saem de lá", diz Chris Miller, historiador e autor de "A Guerra dos Chips".</h4>
        </div>
   <p>  O império da TSMC inclui nove fábricas em Taiwan. A empresa também está construindo uma unidade no Japão e pretende ter outras nos EUA e na Alemanha. Ela emprega 73 mil pessoas, de acordo com a "Forbes".
  Segundo o "The New York Times", a Coreia do Sul , onde fica a Samsung, está logo atrás de Taiwan no "poder" de fabricação de chips. Só que os semicondutores taiwaneses ainda são menores e mais rápidos que os sul-coreanos.</p>O domínio de Taiwan causou até uma crise política com os EUA, que, por meio de sanções, “proibiram” o país de exportar a tecnologia para a China, alegando que os chineses querem desenvolver armas táticas de guerra.</p>
        <div class = "sub">
       <h2>"O que acontece se a produção de chips parar"</h2>
        </div>
       <div class = "chip-b">
         <img src="imagens/chip2.jpeg" alt="chip2.jpeg" width="400px">
           </div>
       <p>O mercado de chips já vive uma crise e impacta várias empresas de diferentes setores. Uma possível paralização poderia agravar o cenário. A pandemia de coronavírus impulsionou a venda de dispositivos eletrônicos para as pessoas trabalharem em casa, lembra? Ao mesmo tempo, a indústria automotiva reduziu a demanda por chips no início da pandemia, mas voltou com força no final de 2020.No entanto, as montadoras sentiram dificuldade para conseguir os semicondutores que necessitavam, inclusive modelos mais simples de chips. Em 2022, várias fabricantes pararam e deixaram de produzir veículos devido à falta deles. Um levantamento da consultoria Gartner divulgado em 2021 indicou que a escassez também atrasou o lançamento e a oferta de celulares.</p>
       <div class = "sub">
       <h2>"O que dizem as principais empresas"</h2>
       </div>
       <p>De acordo com a agência Reuters, a TSMC disse que suspendeu o trabalho temporariamente em suas fábricas após o terremoto para avaliar os impactos. Ainda nesta quarta, em nota enviada à agência NPR, informou que apenas "um pequeno número de equipamentos foi danificado, em certas unidades", impactando parcialmente as operações. "Em todo caso, não houve prejuízo em ferramentas essenciais", afirmou a empresa.
A United Microelectronics Corp (UMC), rival da TSMC no país, disse que todos os funcionários estavam seguros e que suas fábricas funcionavam normalmente na última quarta, ainda segundo informações da Reuters. Algumas máquinas foram desligadas, mas a empresa trabalhava para reiniciá-las.
 A NPR apontou que, considerando o volume de produção concentrado no país, analistas de mercado dizem que, mesmo interrupções mínimas pode atrasar o envio da produção e gerar prejuízos de milhões de dólares.</p>
     
       <div class = "chip-b">
          <img src="imagens/chip3.jpeg" alt="chip3.jpeg" width="400px">
            </div>
     </div>
      <br></br>
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