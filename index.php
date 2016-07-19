<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mecânica OsorioCar</title>
    <meta charset="utf-8">
    <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">


    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/content/index/default.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>

</head>
<body>
    <div class="navbar-wrapper">
        <div class="container">

            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Osório Car</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>


        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cadastrarfisica.php">Cadastrar Pessoa</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
        </ul>
    </li>-->
    <li><a href="view/email.php">Email</a></li>
    <li><a href="view/endereco.php">Endereço</a></li>
    <li><a href="view/login.php">Login</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->              
</nav>

</div>
</div>

<div style="min-height: 50px;">
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <!-- ================================================== -->
    <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
    top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
        top: 0px; left: 0px; width: 100%; height: 100%;">
    </div>
    <div style="position: absolute; display: block; background: url(img/carro1.jpg) no-repeat center center;
    top: 0px; left: 0px; width: 100%; height: 100%;">
</div>
</div>
<!-- Slides Container -->
<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
    <div>
        <img u="image" src2="img/carro1.jpg" />
    </div>
    <div>
        <img u="image" src2="img/carro4.jpg" />
    </div>
    <div>
        <img u="image" src2="img/carro3.jpg" />
    </div>
</div>


<!-- bullet navigator container -->
<div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
    <!-- bullet navigator item prototype -->
    <div u="prototype"></div>
</div>
<!-- Arrow Left -->
<span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
</span>
<!-- Arrow Right -->
<span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
</span>
</div>
<!-- Jssor Slider End -->
</div>

</div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- jssor slider scripts-->
    <!-- use jssor.slider.debug.js for debug -->
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <!--Conteudo-->
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12 inverter" >
            <h1 class="text-center text-font">OLÁ , SEJAM BEM VINDOS!!</h1> <br>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h1 class="text-titles text-center text-font">NÓS DA OSÓRIO CAR OFERECEMOS O MELHOR SERVIÇO DO MERCADO,<br>CONFIRA:</h1>
                    <section class="text-font">
                        <ul>
                            <li>Peças dos melhores fabricantes</li>
                            <li>Avançada tecnologia tanto para carros nacionais como para importados</li>
                            <li>Mão-de-obra especializada.</li>
                            <li>Serviços com garantia.</li>
                            <li>Atendimento personalizado.</li>
                            <li>Preços justos com facilidade de pagamento.</li>
                            <li>Várias opções de pagamento de diversas bandeiras.</li><br>
                        </ul>
                    </section>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <figure style="height:100%;width:100%" class="figure-conteudo">
                        <img src="img/Logo.jpg" alt="Imagem ilustrada" class="img-conteudo">
                    </figure>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 text-font inverter">
                <div class="col-md-6 col-sm-6 col-xs-12 inverte-segundo">
                    <figure style="height:100%;width:100%" class="figure-conteudo">
                        <img src="img/revisao.jpg" alt="Imagem ilustrada" class="img-conteudo">
                    </figure>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 inverte-primeiro">
                    <section>
                        <p style="margin-top:10%">A revisão de um carro é uma verificação regular periódica e completa de todos os circuitos e peças automóveis. O acompanhamento da              “saúde” do seu carro, permite que este tenha um bom desempenho na estrada e, consequentemente, uma maior segurança.
                            A revisão periódica e constante de um carro, sejam carros semi novos, novos ou usados, garante o correcto funcionamento do seu carro              e previne o desgaste das peças automóveis, o que lhe permitirá poupar tempo, dinheiro e, acima de tudo, problemas!</p>
                        </section>
                    </div>
                </div>

                <div class="col-md-10 col-sm-12 col-xs-12 text-middle text-font">
                    <p class="text-middle" style="margin-top:5%"><a href="http://www3.prefeitura.sp.gov.br/cadlem/secretarias/negocios_juridicos/cadlem/integra.asp?alt=12042013L%20156880000">Art. 3º. </a>
                        A obrigatória reavaliação periódica do Plano de Controle de Poluição Veicular do Município de São Paulo – PCPV-SP implicará                       revisão do Programa de Inspeção e Manutenção de Veículos em Uso do Município de São Paulo – I/M-SP, e deverá estabelecer, no mínimo:
                        I - a frota-alvo e respectivos embasamentos técnicos e legais;
                        II - a forma de vinculação com o sistema estadual de registro e de licenciamento de trânsito de veículos;
                        III - a periodicidade da inspeção;
                        IV - a análise econômica;
                        V - a forma de integração, quando for o caso, com programas de inspeção de segurança veicular e outros similares.</p>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h3 class="text-center text-font">ALINHAMENTO: </h3>

                        <p class="text-center text-font">Por que executar esse serviço ?</p>

                        <p class="text-font">Serviço executado para a checagem e correção, se necessário, dos ângulos e medidas de alinhamento do veículo determinadas pelo fabricante, a fim de garantir ao veículo eficiência em sua trajetória, melhor dirigibilidade e otimização do grau de esterçamento.</p>
                        <p class="text-font"> Para a execução do serviço de alinhamento de direção, são checados e ajustados em conformidade ao que determina o fabricante do veículo os ângulos de convergência, divergência, cambagem e cáster.</p>


                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <figure style="height:100%;width:100%" class="figure-conteudo">
                            <img src="img/alinhamento.jpg" alt="Imagem ilustrada" class="img-conteudo">
                        </figure>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 text-font inverter">
                    <div class="col-md-6 col-sm-6 col-xs-12 inverte-segundo">
                        <figure style="height:100%;width:100%" class="figure-conteudo">
                            <img src="img/arcondicionado.jpg" alt="arcondicionado" class="img-conteudo">
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 inverte-primeiro">
                        <section>
                            <h3 class="text-center text-font">HIGIENIZAÇÃO DE AR CONDICIONADO</h3>
                            <p class="text-font">O sistema de ar condicionado está constantemente úmido, sendo um ambiente ideal para a proliferação de fungos e bactérias.</p>
                            <p class="text-font">Carros que não possuem o filtro anti-pólen acabam acumulando em seu sistema resíduos sólidos, como folhas, poeira e até mesmo pequenos insetos. Por isto é extremamente importante fazer a higienização deste sistema e quando possível instalar e/ou substituir o filtro anti-pólen.</p>
                            <p class="text-font">A freqüência de higienização e troca do filtro vai de acordo com o ambiente em que o veiculo roda (poluição, transito, terra…) e a freqüência com que funciona o sistema de ar condicionado. Porém estes prazos não podem ultrapassar em 15.000km para o filtro e 30.000km para a higienização.</p>
                        </section>
                    </div>
                </div>

                
            </div>
        </body>
        </html>