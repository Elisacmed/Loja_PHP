<?php
//Identifica a requisção e o parâmetro na url
if($_SERVER['REQUEST_METHOD'] == 'GET'
    && isset($_GET['method']) ){

$method = $_GET['method'];
//Verifica se no controlador tem a função chamada
if(method_exists('ProdutoController', $method)){
    echo "Tem";

}else{
    echo "não tem";
}
}

?>