<?php
include_once('DB.php');
$producto = getProducto($_GET['p']);
$subcategoria = getSubCategoria($producto->idSubCategoria);
$categoria = getCategoria($subcategoria->idCategoria);
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Bootstrap/favicon.png">

    <title>Apple iPod Touch Sexta Generación</title>

    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="Bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="Bootstrap/css/custom.css" rel="stylesheet">
    <link href="Bootstrap/css/infoProduct.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php include_once('header.php')?>

    <div class="container">
	  <ol class="breadcrumb">
  		<li><a href="index.php?c=<?=$categoria->idCategoria?>"><?=$categoria->nombre?></a></li>
		<li><a href="index.php?c=<?=$categoria->idCategoria?>&s=<?=$subcategoria->idSubCategoria?>"><?=$subcategoria->nombre?></a></li>
		<li class="active"><?=$producto->nombre?></li>
	  </ol>
      <h1 class="page-header"><?=$producto->nombre?> <small><?=$producto->marca?></small></h1>
	  <div class="row">
		<div class="col-sm-6">
			<div class="product-illustration">
			  <img src="<?=$producto->getimagen()?>">
			</div>
		</div>
		<div class="col-sm-6">
			<h3>Descripción del producto:</h3>
			<p><?=$producto->descripcion?></p>
		</div>
	  </div>
	  <h3>Modelos</h3>
	  <div class="row">
        <?php
            foreach($producto->getModelos() as $modelo){?>
        	    <div class="col-sm-4">
        			<div style="width:20px;height:20px;background-color:#<?=$modelo->color?>;float:left; margin-top:8px; margin-right:10px; border:1px solid gray; border-radius: 5px;"></div>
                    <h4><?=$modelo->nombre?> - <span class="text-success">$<?=$modelo->precio?></span></h4>
        			<ul>
        				<li><?=$modelo->existencias?> disponibles</li>
        			</ul>
        		</div>
            <?php }
        ?>
		<div class="col-sm-4">
			<h4>32GB - <span class="text-success">$5199.00</span></h4>
			<ul>
				<li>Azul.</li>
				<li>Gris Espacial.</li>
				<li>Rojo.</li>
				<li>Plata.</li>
				<li>Oro. <span class="text-warning"><strong>Quedan 5</strong></span></li>
			</ul>
		</div>
		<div class="col-sm-4">
			<h4>64GB - <span class="text-success">$6199.00</span></h4>
			<ul>
				<li>Azul.</li>
				<li>Gris Espacial.</li>
				<li>Rojo.</li>
				<li>Plata.</li>
				<li>Oro.</li>
			</ul>
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
