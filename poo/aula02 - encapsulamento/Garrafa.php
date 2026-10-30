<?php
//atividade Freestyle
// Cria a classe garrafa:
class Garrafa
{
    // atributos privados:
    private string $material;
    private float $tamanho;
    private float $litros;
    private bool $aberta;
    private bool $status;

    // métodos:
    public function __construct(string $m, float $t, float $l, bool $a, bool $s)
    {
        $this->material = $m;
        $this->tamanho = $t;
        $this->litros = $l;
        $this->aberta = $a;
        $this->status = $s;
    }

    // metodos acessores (getter e setter) para o material:
    public function getMaterial()
    {
        return $this->material;
    }
    public function setMaterial(string $m)
    {
        $this->material = $m;
    }

    // metodos acessores (getter e setter) para o tamanho:
    public function getTamanho()
    {
        return $this->tamanho;
    }
    public function setTamanho(float $t)
    {
        $this->tamanho = $t;
    }

    // metodos acessores (getter e setter) para litros:
    public function getLitros()
    {
        return $this->litros;
    }
    public function setLitros(float $l)
    {
        $this->litros = $l;
    }

    //metodos acessores (getter e setter) para status:
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus(bool $s)
    {
        $this->status = $s;
    }

    // MÉTODOS FUNCIONAIS :

    //  Abrir e fechar a garrafa
    public function tamparOuDestampar()
    {
        if ($this->aberta) {
            $tampa = "Aberta";
        } else {
            $tampa = "Fechada";
        }
        echo "Tampa: " . $tampa . "\n";
    }

    // Beber líquido
    public function encher()
    {
        if($this->status){
            echo "A garrafa está cheia.\n";
        } else {
            echo "A garrafa está vazia.\n";
            sleep(2);
            $this->status = true;
        }
    }

    public function beber()
    {
        if (!$this->aberta && $this->status) {
            echo "Bebendo líquido da garrafa...\n";
            sleep(2);
            $this->status = false;
        } else {
            echo "A garrafa está vazia ou fechada então não é possível beber.\n";
            $this->status = true;
        }
    }

    public function mostrarGarrafa()
    {
        echo "Dados da garrafa: \n";
        echo "Material: {$this->material}\n";
        echo "Tamanho: {$this->tamanho}\n";
        echo "Litros: {$this->litros}\n";
    }
}

$g= new Garrafa("Aço inox", 30.0, 0.7, false, false);
$g->mostrarGarrafa();
$g->tamparOuDestampar();
$g->encher();
$g->beber();
$g->beber();


