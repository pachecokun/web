<?php
include_once('DB.php');
if(isset($_POST['b'])){
    $busqueda = getBusqueda($_POST['b']);
    $categoria = false;
    $subcategoria = false;
}
else{
    $busqueda = false;
    if(isset($_GET['c'])){
        $categoria = getCategoria($_GET['c']);
        if(isset($_GET['s'])){
            $subcategoria = getSubCategoria($_GET['s']);
        }
        else{
            $subcategoria = false;
        }
    }
    else{
        $categoria = false;
        $subcategoria = false;
    }
}
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
    <?php include_once('header.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <?php if($categoria){?>
            <div class="col-sm-3 col-md-2 sidebar">
    		  <h3><?=$categoria->nombre?></h3>
              <ul class="nav nav-sidebar">
                <li class="<?=!$subcategoria?'active':''?>"><a href="index.php?c=<?=$categoria->idCategoria?>">Todos</a></li>
                <?php foreach($categoria->getSubCategorias() as $subc){
                    $selected = $subcategoria&&$subcategoria->idSubCategoria==$subc->idSubCategoria;
                ?>
                    <li class="<?=$selected?'active':''?>"><a href="index.php?c=<?=$categoria->idCategoria?>&s=<?=$subc->idSubCategoria?>"><?=$subc->nombre?></a></li>
                <?php }?>
              </ul>
            </div>
        <?php }?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?=$busqueda?'Búsqueda: "'.$_POST['b'].'"':($subcategoria?$subcategoria->nombre:($categoria?$categoria->nombre:'Todos los productos'))?></h1>

            <?php

            $productos = $busqueda?$busqueda:($subcategoria?$subcategoria->getProductos():($categoria?$categoria->getProductos():getProductos()));

            $i = 0;
            $r = 0;

            foreach ($productos as $prod) {
                if($i%3==0){
                    echo ($r>0?'</div>':'').'<div class="row">';
                }
                $i++;?>
                <div class="col-sm-3">
    				<div class="product-illustration">
    					<a href="infoProduct.php?p=<?=$prod->codigoProducto?>"><img src="<?=$prod->getimagen()?>"></a>
    				</div>

    				<div class="product">
    					<h4><?=$prod->nombre?></h4>
    					<p>Desde <span class="text-success">$<?=$prod->getPrecio()?></span></p>
    					<p class="text-info"><?=$prod->getExistencias()?> Disponibles</p>
    				</div>
    					<a href="infoProduct.php?p=<?=$prod->codigoProducto?>"><button type="button" class="btn btn-block btn-info">Ver Producto</button></a>
    			</div>
                <?php
            }

            ?>

        <!--
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
        -->
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="Bootstrap/js/jquery.min.js"><\/script>')</script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
