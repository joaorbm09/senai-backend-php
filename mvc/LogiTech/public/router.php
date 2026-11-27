<?php 
declare(strict_types=1);
//obter o caminho sem query strings
$caminho = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$arquivoFisico = __DIR__ . $caminho;

if($caminho !== '/' && file_exists($arquivoFisico) && is_file($arquivoFisico)){
    return false;
}

require_once __DIR__ . '/index.php';
?>