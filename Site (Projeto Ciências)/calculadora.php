<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Projeto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="apple-touch-icon" sizes="57x57" href="icone/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="icone/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="icone/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="icone/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="icone/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="icone/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="icone/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="icone/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="icone/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="icone/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icone/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="icone/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icone/favicon-16x16.png">
  <link rel="manifest" href="icone/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  
  
  
</head>
<body>
    

<!--------------------------------menu-------------------->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Ciências</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="index.html">Home</a>
            <a class="mdl-navigation__link" href="">Video do Grupo</a>
            <a class="mdl-navigation__link" href="projeto.html">Introdução Experimento</a>
            <a class="mdl-navigation__link" href="calculos.html">Àrea de Calculos</a>     
           
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Ciências</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="index.html">Home</a>
          <a class="mdl-navigation__link" href="">Video do Grupo</a>
          <a class="mdl-navigation__link" href="projeto.html">Introdução Experimento</a>
          <a class="mdl-navigation__link" href="calculos.html">Àrea de Calculos</a>     
         
          
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here --></div>
      </main>
    </div>
    <br>
<!-----------------------------------fim menu-------------------------->
 

<!------------------------Texto lateral exquerda-------------------->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    
       
      <div class="col-sm-2 sidenav">
      </div>
  <div class="well">
    <p>A ciência é algo enteressante
      e melhor ainda está presente em tudo
      oque fazemos.
    </p>
    
  </div>
  <div class="well">
    <p>Neste site você ficará 
      ligado em todo o conteúdo do 
      nossso projeto da escola.
    </p>
    
  </div>
  <div class="well">
    <p>Cadastra-se no fórum e participe das 
      pesquisas e debates.
    </p>
  
    </div>
    <div class="well">
        <div class="alert alert-warning">
            <strong>Aviso!</strong> O fórum é apenas para assuntos focados a ciência assunto que não faça parte
            desta area será deletado junto ao usúario.
          </div>
          
           <p><a href="http://infolineprojetos.forumeiros.com/" target="blanck"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
              Cadastro Fórum
             </button></a></p>
             <p><a href="https://www.youtube.com/channel/UC4HGQ4u4SnkHSwpaPmutqcA?view_as=subscriber" 
              target="blanck"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                Youtube Canal
              </button></a></p>
              <p><a href="https://pauloricardopegoraro.blogspot.com.br/" target="blanck"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                Blog Programador
              </button></a></p>
    
    
  </div>
    </div>

    <!------------------------Fim texto lateral exquerda-------------------->


    <!---------------------------------Conteúdo-------------------------------------->
    <div class="col-sm-8 text-left"> 
      
        
      <div class="container">
          <div class="jumbotron">

          <?php
           
           $num = isset($_GET['num']?$_GET['num']:"Valor Inválido")


           $mul = $num*$num;
           $div = $num/$num;
           $sub = $num += $num;



           echo "O valor digitado que foi $num multiplicado por ele mesmo : $mul";
           echo "O valor digitado divido por ele mesmo resulta : $div";
           echo "O valor digitado somado com ele mesmo : $sub";
           echo "O valor arredondamento do valor digitado : " .roud($num) ;
           echo "A raiz quadrada do valor digitado : ".sqrt($num);
           echo "O inteiro do valor digitado é : " .intval($num); 
           echo "O absoluto do valor digitado :  " .abs($num);



 
          ?>

</form>


        </div>


              </div>
          
  </div>

     <!------------------------------------------fim conteúdo-------------------------------------->

     <!----------------------------------------Texto lateral direita---------------------------->
    
    <div class="col-sm-2 sidenav">
            
      <div class="well">
        <p>Paulo Ricardo </p>
        <p>Mateus Antônio</p>
        <p>Matheus Pereira</p>
        <p>Dionata Leres</p>
      </div>
      <div class="well">
          <img src="1.png" width="100%" onmouseover="this.src='1.png'"; onmouseout="this.src='2.jpg'" />
        </div>
      
    </div>
</div>
  </div>


<!----------------------------------------Fim texto---------------------------->

<footer class="container-fluid text-center">
  <p>Paulo Ricardo Pegoraro Nunes Desenvolvedor</p>
  <ul class="pagination">
    <li><a href="index.html">1</a></li>
    <li><a href="video.html">2</a></li>
    <li><a href="projeto.html">3</a></li>
    <li><a href="calculos.html">4</a></li>
  </ul>
  
</footer>

</body>
</html>
