<?php


class Categoria{
    public $idCategoria = '';
    public $nombre;

    /*Retorna las subcategorias de esta categoria*/
    function getSubCategorias(){
        return getCategorias('idCategoria = '.$this->idCategoria);
    }
}

class SubCategoria{
    public $idSubCategoria = '';
    public $nombre;
    public $idCategoria = '';

    /*Retorna los productos de esta subcategoria*/
    function getProductos(){
        return getCategorias('idSubCategoria = '.$idSubCategoria);
    }
}

class Producto{
    public $codigoProducto = 0;
    public $nombre = '';
    public $descripcion = '';
    public $marca = '';
    public $idSubcategoria = '';

    function getModelos(){
        return getModelos('codigoProducto = '.$this->codigoProducto);
    }
}

class Modelo{
    public $idModelo = 0;
    public $nombre = '';
    public $precio = 0;
    public $color = '';
    public $existencias = 0;
    public $codigoProducto = 0;
}


/*Retorna arreglo de categorias*/
function getCategorias($cond = ''){
    $query = 'select*from categoria';

    if($cond != ''){
        $query .= ' where '.$cond;
    }

    $res = query($query);

    $aux = array();

    while($row = $res->fetch_assoc()){
        $c = new Categoria();
        $c -> idCategoria = $row['idCategoria'];
        $c -> nombre= $row['Nombre'];
        $aux []= $c;
    }
    return $aux;
}

/*Retorna arreglo de subcategorias*/
function getSubCategorias($cond = ''){
    $query = 'select*from subcategoria';

    if($cond != ''){
        $query .= ' where '.$cond;
    }

    $res = query($query);

    $aux = array();

    while($row = $res->fetch_assoc()){
        $c = new Categoria();
        $c -> idCategoria = $row['idCategoria'];
        $c -> nombre= $row['Nombre'];
        $c -> idSubCategoria = $row['idSubcategoria'];
        $aux []= $c;
    }
    return $aux;
}

/*Retorna arreglo de productos*/
function getProductos($cond = ''){
    $query = 'select*from producto';

    if($cond != ''){
        $query .= ' where '.$cond;
    }

    $res = query($query);

    $aux = array();

    while($row = $res->fetch_assoc()){
        $p = new Producto();
        $p -> codigoProducto = $row['CodigoProducto'];
        $p -> nombre= $row['Nombre'];
        $p -> marca= $row['Marca'];
        $p -> descripcion= $row['Descripcion'];
        $p -> idSubcategoria= $row['idSubcategoria'];
        $aux []= $p;
    }
    return $aux;
}

/*Retorna un modelo por su ID*/
function getProducto($id){
    return getProductos('codigoproducto = '.$id)[0];
}

/*Retorna arreglo de modelos*/
function getModelos($cond = ''){
    $query = 'select*from modelo';

    if($cond != ''){
        $query .= ' where '.$cond;
    }

    $res = query($query);

    $aux = array();

    while($row = $res->fetch_assoc()){
        $m = new Modelo();
        $m -> idModelo = $row['idModelo'];
        $m -> nombre = $row['Nombre'];
        $m -> precio = $row['Precio'];
        $m -> color = $row['Color'];
        $m -> existencias = $row['Existencias'];
        $m -> codigoProducto = $row['CodigoProducto'];
        $aux []= $m;
    }
    return $aux;
}




function query($q){


    $host = '127.0.0.1';
    $user = 'root';
    $pass = 'root';
    $dbname = 'cappel';


    $db = new mysqli($host,$user,$pass,$dbname);
    if($db->connect_errno > 0){
        die('Error de conexión: ' . $db->connect_error);
    }

    if(!$result = $db->query($q)){
        die('There was an error running the query [' . $db->error . ']');
    }
    return $result;
}
