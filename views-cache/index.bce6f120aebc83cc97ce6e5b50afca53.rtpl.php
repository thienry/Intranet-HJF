<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Intranet - Jayme da fonte</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/res/site/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/res/site/css/mdb.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/res/site/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="/res/admin/plugins/datatables/dataTables.bootstrap4.min.css">

    <style type="text/css">
      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #8d1d2e!important;
              }
          }
    </style>
</head>

<body id="top">

  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" id="scrollNav">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="/">
          <strong>Intranet</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link js-scroll-trigger" href="#ramais"> Ramais </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Documentos Institucionais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Helpdesk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">Webmail</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="http://jaymedafonte.com.br" class="nav-link border border-light rounded" target="_blank">
                <i class="fa fa-medkit mr-2"></i>Jayme da Fonte
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

        <!--Carousel Wrapper-->
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/res/site/img/slide-4.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/res/site/img/slide-5.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/res/site/img/slide-3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    <!--/.Carousel Wrapper-->

  </header>

  <!--Main layout-->
  <main>
    <div class="container">

      <!-- Section icones -->

      <section class="mt-5 wow fadeIn" id="icons">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="centralizar">
              <a href="#" target="_blank"><img src="/res/site/img/svg/open.svg" class="" ></a>
            </div>
            <div class="text-icons">
              <h3 class="h3 mb-3">E-mails</h3>
              <p>Já enviou ou vizualizou seus E-mails hoje?<br>
                Clique aqui para acessar seu endereço de e-mail.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="centralizar">
              <a class="js-scroll-trigger" href="#ramais"><img src="/res/site/img/svg/telephone.svg"></a>
            </div>
            <div class="text-icons">
              <h3 class="h3 mb-3">Encontre o Colaborador</h3>
              <p>O hospital é muito grande, não dá pra decorar todos os ramais.<br>
                  Encontre o colaborador desejado.</p>
            </div>
          </div>          
          <div class="col-md-4 col-sm-12">
            <div class="centralizar">
              <a href="#" target="_blank"><img src="/res/site/img/svg/file.svg" class=""></a>
            </div>
            <div class="text-icons">
              <h3 class="h3 mb-3">Documentos Institucionais</h3>
              <p>Consulte os documentos providos do hospital. 
                <br>     
              *Para documentos comuns a todos os setores*</p>
              
              <!-- Basic dropdown -->
              <div class="btn-group">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clique para obter credencial</button>

                <div class="dropdown-menu">
                    <a class="dropdown-item">Usuario: <strong>Visitante</strong></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item">Senha: <strong>hospital</strong></a>
                </div>
              </div>
          </div>
          </div>
        </div>
      </section>

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="/res/site/img/missao.jpeg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4 ">
            <div class="info">
              <!-- Main heading -->
              <h2 class="h2 mb-3">Missão, Visão e Valores</h2>
              <p style="text-align: justify;">Representam a identidade organizacional da instituição e definem: a razão de sua existência (Missão), o objetivo a longo prazo (Visão), e as crenças e ideias que formam a base da organização (Valores).</p>
            </div>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <section class="mt-5 wow fadeIn">

          <!--Grid row-->
          <div class="row">
  
            <!--Grid column-->
            <div class="col-md-6 mb-4">

              <div class="info-reverse">

                <!-- Main heading -->
                <h2 class="h2 mb-3">Metas de Segurança do Paciente</h2>
                <p style="text-align: justify;">Tem o objetivo de garantir as Boas Práticas de Segurança no Serviço de saúde.</p>
                <!-- Main heading -->
              </div>
              
            </div>
            <!--Grid column-->

              <!--Grid column-->
            <div class="col-md-6 mb-4">
  
              <img src="/res/site/img/meta-4.jpg" class="img-fluid z-depth-1-half" alt="">
    
            </div>
              <!--Grid column-->
  
            
  
          </div>
          <!--Grid row-->
  
        </section>
        <!--Section: Main info-->

      <hr class="my-5" id="ramais">

      <section class="mt-5 wow fadeIn" >

        <div class="tabelaRamal" >
          <div class="infoRamal">
              <!-- Main heading -->
              <h1 class="h1 mb-3" style="text-align: center">Lista de Ramais</h1>
              <p style="text-align: center">O hospital é muito grande não dá pra decorar todos os ramais <br>
              Digite o setor ou o ramal ou o colaborador e clique em <strong>Pesquisar</strong> e faça uma consulta:</p>
            </div>

        </div>

          <div class="card">
              <div class="card-body">
          
                  <!--Table-->
                  <table id="tabelaRamais" class="table table-hover table-responsive-md table-fixed table-striped">
          
                      <!--Table head-->
                      <thead>
                          <tr>
                              <th>Setor</th>
                              <th>Ramal</th>
                              <th>Colaborador</th>
                          </tr>
                      </thead>
                      <!--Table head-->
          
                      <!--Table body-->
                      <tbody>
                        <?php $counter1=-1;  if( isset($ramal) && ( is_array($ramal) || $ramal instanceof Traversable ) && sizeof($ramal) ) foreach( $ramal as $key1 => $value1 ){ $counter1++; ?>

                          <tr>
                              <th><?php echo htmlspecialchars( $value1["setor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                              <td><?php echo htmlspecialchars( $value1["ramal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                              <td><?php echo htmlspecialchars( $value1["colaborador"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                          </tr>

                        <?php } ?>

                          
                      </tbody>
                      <!--Table body-->
          
                  </table>
                  <!--Table-->
          
              </div>
          </div>
      </section>
        
      <hr class="my-5">

      <!--Section: Not enough-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000" style="height: 100px;">
          <div class="carousel-inner">
              <!-- First slide -->
              <div class="carousel-item">
                  <!--Grid row-->
                  <div class="row">

                      <!--First column-->
                      <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                          <img src="/res/site/img/jayme-da-fonte-desde.png" class="img-fluid px-4" alt="jayme da fonte - logo" style="max-height: 50px">
                      </div>
                      <!--/First column-->

                      <!--Second column-->
                      <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                          <img src="/res/site/img/logo_acreditacao_qual.png" class="img-fluid px-4" alt="" style="max-height: 50px">
                      </div>
                      <!--/Second column-->
                  </div>
                  <!--/Grid row-->
              </div>
              <!-- First slide -->

              <!-- Second slide -->
              <div class="carousel-item active carousel-item-left">
                  <!--Grid row-->
                  <div class="row">

                      <!--First column-->
                      <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                          <img src="/res/site/img/jayme-da-fonte-desde.png" class="img-fluid px-4" alt="jayme da fonte - logo" style="max-height: 50px">
                      </div>
                      <!--/First column-->

                      <!--Second column-->
                      <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                          <img src="/res/site/img/logo_acreditacao_qual.png" class="img-fluid px-4" alt="" style="max-height: 50px">
                      </div>
                      <!--/Second column-->

                  </div>
                  <!--/Grid row-->
              </div>
              <!-- Second slide -->
          </div>
      </div>

    </div>
  </main>
  <!--Main layout-->

 <a class="scroll-to-top rounded" data-toggle="tooltip" data-placement="top" title="Voltar ao topo" href="#top" style="display: inline;">
   <i class="fa fa-angle-up"></i>
 </a>

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="http://www.fasortec.com.br" target="_blank"> Equipe de TI </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="/res/site/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/res/site/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/res/site/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/res/site/js/mdb.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/res/site/js/scrolltotop.js"></script>

    <script src="/res/admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

    $(document).ready( function () {
      $('#tabelaRamais').DataTable({

        "language": {
                    "lengthMenu": "",
                    "zeroRecords": "Ramal ou Setor não encontrado",
                    "info": "Exibindo página _PAGE_ de _PAGES_",
                    "infoEmpty": "-",
                    "infoFiltered": "",
                    "search": "Pesquisar",
                    "paginate": {
                        "next": "Próximo",
                        "previous": "Anterior",
                        "first": "Primeiro",
                        "last": "Último"
                    }

                 }

      });
       
    });

  </script>
</body>

</html>
