<?php 
declare(strict_types=1);

//captura a URL
$url = $_GET['url'] ?? 'chamado/index';

//limpa a url e transforma em array
$urlLimpa = trim($url, 'url');
$segmentos = explode('/', $urlLimpa);

// encontra o nome do controller
$controllerNome = ucfirst($segmentos[0]) . 'Controller';

// encontra o metodo
$metodo = $segmentos[1] ?? 'index';

// encontra o parametro 
$parametros = array_slice($segmentos, 2);

//econtrar o arquivo
$caminhoArquivo = __DIR__ . "/../app/Controllers/{$controllerNome}.php";

//valida os controllers, metodos e parametro
if(file_exists($caminhoArquivo)){
    require_once $caminhoArquivo;
    if(class_exists($controllerNome)){
        $controller = new $controllerNome();
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
} else {
    http_response_code(404);
    echo "<h1> Erro 404</h1><p> Página ou recurso {$segmentos[0]} não encontrado</p>";
}
?>