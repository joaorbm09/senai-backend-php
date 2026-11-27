<?php 
declare(strict_types=1);

class TecnicoController{
    public function index(): void{
        echo "<h2>LogiTech Sistemas - Técnicos de Tecnicos</h2>";
        echo "<p> Rota padrão adicionada com sucesso! </p>";
        echo "<li>1 - Ana Souza</li>";
        echo "<li>2 - Bruno Lima</li>";
        echo "<li>3 - Carla Mendes</li>";
        echo "</ul>";
    }

    public function perfil (string $id = '0'):void{
        echo "<h2> Detalhes do técnico #{$id}</h2>";
    }
}
?>