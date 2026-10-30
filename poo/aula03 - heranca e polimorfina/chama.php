<?php 
require_once 'ClientePF.php';
require_once 'ClientePJ.php';

$c[0] = new ClientePF("Cliente fisico", "teste@fisico.com", "419.853.728-35");
$c[1]= new ClientePJ("Cliente Juridico", "teste@juridico.com", "000-000-000-0001-12");

foreach($c as $clientes){
    echo $clientes->getDados();
}
?>