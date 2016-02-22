<?php
include_once('DB.php');
?>
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
                        <?php
                        foreach (getCategorias() as $cat) {?>
                            <li><a href="index.php?c=<?=$cat->idCategoria?>"><?=$cat->nombre?></a></li>
                        <?php }
                        ?>
			        </ul>
            </li>
		  </ul>
          <form class="navbar-form navbar-right" method="post">
          	<div class="input-group">
              <input type="text" class="form-control" name="b" placeholder="Buscar">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </nav>
