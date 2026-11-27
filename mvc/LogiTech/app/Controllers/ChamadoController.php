<?php 
declare(strict_types=1);

namespace App\Controllers;

class ChamadoController{
    public function index(): void{
        echo "<h2>LogiTech Sistemas - Listagem de chamados </h2>";
        echo "<p> rota padrao adicionada com sucesso</p>";
    }

    public function criar(): void{
        echo "<h1>Formulario para novo chamado</h1>";
    }

    public function exibir (string $id = '0'):void{
        echo "<h2> Detalhes do chamado técnico #{$id}</h2>";
    }

}
?>