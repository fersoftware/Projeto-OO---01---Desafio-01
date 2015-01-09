<?php
   include_once('Functions/Clientes.php');
   
   $clientelaArr[] = new Clientes(1,'Fernando Alves da Silva','11 2321-3625','30.956.365-25','30.237.954-1','Alameda dos Primarios, 100','Jardim I Sul','São Paulo','SP','04061-001');
   $clientelaArr[] = new Clientes(2,'Fernando Collor de Melo','11 2322-3726','31.957.369-56','35.236.945-15','Alameda dos Secundários, 200','Jardim II Sul','São Paulo','SP','04062-002');
   $clientelaArr[] = new Clientes(3,'Fernando Henrique Cardoso','11 2323-3466','32.947.359-44','33.246.345-2','Alameda dos Tercenários, 300','Jardim III Sul','São Paulo','SP','04063-003');
   $clientelaArr[] = new Clientes(4,'Fernando Scherer','11 2324-3456','34.547.659-47','34.646.745-52','Alameda dos Quartenários, 400','Jardim IV Sul','São Paulo','SP','04064-004');
   $clientelaArr[] = new Clientes(5,'Fernando Litre','11 2526-7456','34.447.259-4','33.446.775-2','Alameda dos Quinquenários, 500','Jardim V Sul','São Paulo','SP','04065-005');
   $clientelaArr[] = new Clientes(6,'Fernando & Sorocaba','11 2786-7950','38.487.269-64','35.546.675-72','Alameda dos Sexagenários, 600','Jardim VI Sul','São Paulo','SP','04066-006');
   $clientelaArr[] = new Clientes(7,'Fernando Beira Mar','11 0157-0157','38.157.157-64','35.157.157-2','Presídio Ala 54','Bairro Sol Quadrado','São Paulo','SP','09086-080');
   $clientelaArr[] = new Clientes(8,'Fernando Pessoa','11 5167-6077','78.857.447-6','45.457.333-2','Alameda dos Octagenários','Jardim VIII','São Paulo','SP','04068-008');
   $clientelaArr[] = new Clientes(9,'Fernando Gabeira','11 2167-3077','38.357.247-6','35.333.233-1','Alameda dos Nonagenário','Jardim IX','São Paulo','SP','04069-009');
   $clientelaArr[] = new Clientes(10,'Fernando de Noronha','11 7167-7077','58.557.447-46','45.343.213-3','Alameda dos Decagenário','Jardim X','São Paulo','SP','04070-010');
   
   if(isset($_REQUEST['ord']) && $_REQUEST['ord'] == 'A')
   {
       sort ($clientelaArr);
   }
   else if(isset($_REQUEST['ord']) && $_REQUEST['ord'] == 'B')
   {
       rsort ($clientelaArr);
   }
   
   ?>
<!DOCTYPE html>
<html lang="pt_BR">
   <head>
      <meta charset="utf-8"/>
      <title>Aula1 OO em PHP - Desafio1 </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="Desafio1 PHP OO"/>
      <meta name="author" content="fersoftware"/>
      <link href="css/bootstrap.css" rel="stylesheet"/>
      <style>
         body {
         padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
         }
      </style>
      <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <![endif]-->
      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="../assets/ico/favicon.png">
   </head>
   <body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true" class="">
      <div class="navbar navbar-inverse navbar-fixed-top">
         <div class="navbar-inner">
            <div class="container">
               <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="brand" href="#">Aula1 OO em PHP - Desafio 01 </a>
               <div class="nav-collapse collapse">
                  <ul class="nav">
                     <!--
                        <li class="active"><a href="#">Home</a></li>
                                      <li><a href="#about">About</a></li>
                                      <li><a href="#contact">Contact</a></li>
                        -->
                  </ul>
               </div>
               <!--/.nav-collapse -->
            </div>
         </div>
      </div>
      <div class="container">
      <h1>Lista de Clientes</h1>
      <table class="table table-condensed">
         <tr>
            <td><strong>Cod</strong></td>
            <td><strong>Nome</strong></td>
            <td><strong>Telefone</strong></td>
            <td><strong>Detalhes</strong></td>
         </tr>
         <?php
            foreach ($clientelaArr as $cliente) 
               {        
            ?>
         <tr>
            <td><?php	echo $cliente->getId(); ?></td>
            <td><?php	echo $cliente->getNome(); ?></td>
            <td><?php	echo $cliente->getTelefone(); ?></td>
            <td><a data-toggle="modal" data-toggle="popover"  href="?id=<?php	echo $cliente->getId(); ?>" class="btn btn-primary btn-large"><i class="icon-zoom-in"></i></a></td>
         </tr>
         <?php  
            }
            ?>
      </table>
      <p>
         <a href="?ord=A" class="btn btn-large btn-primary"><i class="icon-arrow-up"></i>Ordem Ascedente</a>
         <a href="?ord=B" class="btn btn-large btn-primary"><i class="icon-arrow-down"></i>Ordem Decrecente</a>
      </p>
      <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel"> <i class="icon-user"></i> <?php $n = $_REQUEST['id']; echo  $clientelaArr[$n-1]->getNome(); ?></h3>
            <h4 id="myModalLabel"><?php $n = $_REQUEST['id']; echo  $clientelaArr[$n-1]->getTelefone(); ?></h4>
         </div>
         <div class="modal-body">
            <i class="icon-home"></i>
            <p><?php echo   $clientelaArr[$n-1]->getEndereco(); ?><br />
               <?php echo   $clientelaArr[$n-1]->getCEP() . ' - ' . $clientelaArr[$n-1]->getBairro() . ' - ' . $clientelaArr[$n-1]->getCidade(). ' - ' . $clientelaArr[$n-1]->getEstado(); ?>
            </p>
            <hr />
            <i class="icon-folder-open"></i>
            <p><strong>CPF.: </strong><?php echo $clientelaArr[$n-1]->getCPF(); ?> - <strong></string> RG.: </strong><?php echo $clientelaArr[$n-1]->getRG(); ?> 
            </p>
         </div>
         <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>    
         </div>
      </div>
      <!-- Le javascript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/bootstrap-transition.js"></script>
      <script src="assets/js/bootstrap-alert.js"></script>
      <script src="assets/js/bootstrap-modal.js"></script>
      <script src="assets/js/bootstrap-dropdown.js"></script>
      <script src="assets/js/bootstrap-scrollspy.js"></script>
      <script src="assets/js/bootstrap-tab.js"></script>
      <script src="assets/js/bootstrap-tooltip.js"></script>
      <script src="assets/js/bootstrap-popover.js"></script>
      <script src="assets/js/bootstrap-button.js"></script>
      <script src="assets/js/bootstrap-collapse.js"></script>
      <script src="assets/js/bootstrap-carousel.js"></script>
      <script src="assets/js/bootstrap-typeahead.js"></script>
      <?php
         //Ativa a Tela dados do Cliente
         if(isset($_REQUEST['id']))
         {    
         ?>
      <script type="text/javascript">
         $("#myModal").modal('show');
      </script>
      <?php
         }	
         ?>
   </body>
</html>