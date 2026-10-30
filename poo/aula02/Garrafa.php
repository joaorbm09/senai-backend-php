<?php
//atividade Freestyle
// Cria a classe garrafa:
class Garrafa
{
    // atributos privados:
    private $material;
    private $tamanho;
    private $litros;
    private $aberta;

    // métodos:
    public function __construct($m, $t)
    {
        $this->material = $m;
        $this->tamanho = $t;
        $this->litros = 0.0;
        $this->aberta = false;
    }

    // metodos acessores (getter e setter) para o material:
    public function getMaterial()
    {
        return $this->material;
    }
    public function setMaterial($m)
    {
        $this->material = $m;
    }

    // metodos acessores (getter e setter) para o tamanho:
    public function getTamanho()
    {
        return $this->tamanho;
    }
    public function setTamanho($t)
    {
        $this->tamanho = $t;
    }

    // metodos acessores (getter e setter) para litros:
    public function getLitros()
    {
        return $this->litros;
    }
    public function setLitros($l)
    {
        $this->litros = $l;
    }

    // MÉTODOS FUNCIONAIS :

    //  Abrir e fechar a garrafa
    public function tamparOuDestampar()
    {
        if ($this->aberta == true) {
            $this->aberta = false;
        } else {
            $this->aberta = true;
        }
    }

    // Beber líquido
    public function beber($quantidade)
    {
        $this->litros = $this->litros - $quantidade;
    }

    public function mostrarGarrafa()
    {
        echo "Dados da garrafa: \n";
        echo "Material: {$this->material}\n";
        echo "Tamanho: {$this->tamanho}\n";
        echo "Litros: {$this->litros}\n";
        if ($this->aberta) {
            $estado = "Aberta";
        } else {
            $estado = "Fechada";
        }

        echo "Estado: " . $estado . "\n";
    }
}

$g1 = new Garrafa("Aço inox", "30 centimetros");
$g1->setLitros(0.7);
$g1->mostrarGarrafa();
