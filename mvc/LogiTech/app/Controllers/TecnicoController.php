<?php 
declare(strict_types=1);
namespace App\Controllers;
class TecnicoController{
    public function index(): void{
        echo "<h2>LogiTech Sistemas - Técnicos de Tecnicos</h2>";
        echo "<p> Rota padrão adicionada com sucesso! </p>";
    }
    public function perfil (string $id = '0'):void{
        echo "<h2> Detalhes do técnico #{$id}</h2>";
    }
}
?>