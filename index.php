<?php
    include_once('DB.php');
    print_r(getCategorias()[0]->getSubCategorias());
    die();
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Bootstrap/favicon.png">

    <title>Tablets y Celulares - Catálogo</title>

    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="Bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="Bootstrap/css/custom.css" rel="stylesheet">
    <link href="Bootstrap/css/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" title="Ir a inicio"><img src="img/brand-icon.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Explorar Categorías <span class="caret"></span></a>
					<ul class="dropdown-menu">
                		<li><a href="index.php?c=001">TV y Video</a></li>
                		<li><a href="index.php?c=002">Computadoras</a></li>
                		<li><a href="index.php?c=003">Videojuegos</a></li>
                		<li class="active"><a href="index.php?c=004">Tablets y Celulares</a></li>
			        </ul>
            </li>
		  </ul>
          <form class="navbar-form navbar-right" method="post">
          	<div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
		  <h3>Tablets y Celulares</h3>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Todo</a></li>
            <li><a href="index.php?c=004&s=001">Tablets </a></li>
            <li><a href="index.php?c=004&s=002">Teléfonos Celulares</a></li>
            <li><a href="index.php?c=004&s=003">Accesorios para Celulares</a></li>
            <li><a href="index.php?c=004&s=004">Headsets</a></li>
            <li><a href="index.php?c=004&s=005">Wearables</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Tablets y Celulares</h1>
		  <div class="row">
			<div class="col-sm-3">
				<div class="product-illustration">
					<a href="infoProduct.php?id=001"><img src="img/img.jpg"></a>
				</div>

				<div class="product">
					<h4>Apple iPod Touch Sexta Generación</h4>
					<p>Desde <span class="text-success">$4099.00</span></p>
					<p class="text-info">Disponible</p>
				</div>
					<a href="infoProduct.php?id=001"><button type="button" class="btn btn-block btn-info">Ver Producto</button></a>
			</div>
			<div class="col-sm-3">
				<div class="product-illustration">
					<a href="infoProduct.php?id=002"><img src="img/img1.jpeg"></a>
				</div>

				<div class="product">
					<h4>Apple iPhone 5s</h4>
					<p>Desde <span class="text-success">$5999.00</span></p>
					<p class="text-warning">5 Disponibles</p>
				</div>
					<a href="infoProduct.php?id=002"><button type="button" class="btn btn-block btn-info">Ver Producto</button></a>
			</div>
			<div class="col-sm-3">
				<div class="product-illustration">
					<a href="infoProduct.php?id=003"><img src="img/img2.png"></a>
				</div>

				<div class="product">
					<h4>Samsung Galaxy S6 Edge</h4>
					<p>Desde <span class="text-success">$12999.00</span></p>
					<p class="text-danger">Solo 2 Disponibles!</p>
				</div>
					<a href="infoProduct.php?id=003"><button type="button" class="btn btn-block btn-info">Ver Producto</button></a>
			</div>
			<div class="col-sm-3">
				<div class="product-illustration">
					<a href="infoProduct.php?id=004"><img src="img/img3.png"></a>
				</div>

				<div class="product">
					<h4>Apple iPad Air 2</h4>
					<p>Desde <span class="text-success">$10999.00</span></p>
					<p class="text-info">Disponible</p>
				</div>
					<a href="infoProduct.php?id=004"><button type="button" class="btn btn-block btn-info">Ver Producto</button></a>
			</div>
		  </div>
		  <div class="row">
			<div class="col-sm-3">
				<div class="product-illustration">
					<a href="infoProduct.php?id=004"><img src="img/img3.png"></a>
				</div>
				<div class="product">
					<h4>Apple iPad Air 2</h4>
					<p>Desde <span class="text-success">$10999.00</span></p>
					<p class="text-info">Disponible</p>
				</div>
					<a href="infoProduct.php?id=004"><button type="button" class="btn btn-block btn-info">Ver Producto</button></a>
			</div>
			<div class="col-sm-3">
				<div class="product-illustration">
					<a href="infoProduct.php?id=004"><img src="img/img3.png"></a>
				</div>
				<div class="product">
					<h4>Apple iPad Air 2</h4>
					<p>Desde <span class="text-success">$10999.00</span></p>
					<p class="text-info">Disponible</p>
				</div>
					<a href="infoProduct.php?id=004"><button type="button" class="btn btn-block btn-info">Ver Producto</button></a>
			</div>
			<div class="col-sm-3">
				<div class="product-illustration">
					<a href="infoProduct.php?id=004"><img src="img/img3.png"></a>
				</div>
				<div class="product">
					<h4>Apple iPad Air 2</h4>
					<p>Desde <span class="text-success">$10999.00</span></p>
					<p class="text-info">Disponible</p>
				</div>
					<a href="infoProduct.php?id=004"><button type="button" class="btn btn-block btn-info">Ver Producto</button></a>
			</div>
		  </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="Bootstrap/js/jquery.min.js"><\/script>')</script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
