<?php 
//exemplo ultra simpples fp totemento

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller':
'UsuarioController';

$methodName = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';

if(file_exists($controllerFile)){
    require_once $controllerFile;
    $controllers = new $controllerName();
    if(method_exists($controllers, $methodName)){
        $controllers->$methodName();
    }else{
        echo "Ação não encontrada!";
    }
}else{
    echo "Controller não encontrado!";
}

?>