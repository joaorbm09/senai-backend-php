<?php 
declare(strict_types=1);

//carrega o autload psr-4 gerado pelo computador
$autoloadPath = __DIR__ . '/../vendor/autoload.php';
if(!file_exists($autoloadPath)){
    http_response_code(500);
    exit ('Erro: execute "composer dump-autoload" para gerar o autoload');
}

require_once $autoloadPath;

if(isset($_GET['url'])){
    $url = $_GET['url'];
} else {
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
    $url = trim($url, '/');
    if($url === ''){
        $url = 'chamado/index';
    }
}

$segmentos = explode('/', trim($url, '/'));
// encontra o nome do controller
$controllerNome = ucfirst($segmentos[0]) . 'Controller';

// encontra o metodo
$metodo = $segmentos[1] ?? 'index';

// encontra o parametro 
$parametros = array_slice($segmentos, 2);

//econtrar o arquivo
$caminhoArquivo = "App\\Controllers\\{$controllerNome}.php";

//valida os controllers, metodos e parametro
if(file_exists($caminhoArquivo)){
        $controller = new $caminhoArquivo();
        if(method_exists($controller, $metodo)){
            call_user_func_array([$controller, $metodo], $parametros);
        } else{
            http_response_code(404);
            echo "<h1>Erro 404</h1><p>Ação {$metodo} não encontrado</p>";
        }
    } else {
        http_response_code(500);
        echo "<h1?>Erro 500</h1><p> Classe {$controllerNome} mal configurado</p>";
    }
?>