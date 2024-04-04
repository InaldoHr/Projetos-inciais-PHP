<?php

class Humano
{
    // Atributos
    private $nome;
    private $idade;
    private $genero;


    private $altura;
    private $peso;
    private $forca;
    private $estado;
    private $vida;
    private $doenca;

    // Construtor
    public function __construct($nome, $peso, $genero)
    {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->genero = $genero;


        //valores predefinidos:
        $this->idade = 0;
        $this->estado = "Vivo";
        $this->vida = 40;
        $this->forca = 5;
        $this->altura = 50;
    }

    private function CalcularDoenca() {
        $doencas = ["Dengue", "Covid", "Resfriado", "Conjuntivite", "Alergia"];
        if(rand(0, 100)>=80){
            $this->doenca = $doencas[rand(0,count($doencas)-1)];
            $this->vida -= 10;
            $this->forca -= 10; 
            $this->peso -= 3; 
            
        }else{
            $this->doenca = "Nenhuma";
        }
    }

    // Métodos
    public function Comer()
    {
        $this->peso += 3;
        $this->forca += 3;
        $this->vida += 5;
        $this->CalcularDoenca();
    }
    public function Exercitar()
    {
        if ($this->peso <= 30) {
            echo "$this->peso você está muito magro";
        } else {
            $this->peso -= 3;
        }
        $this->forca += 6;
        $this->CalcularDoenca();
    }

    public function Crescer()
    {
        $this->altura += 5;
        $this->vida++;
        $this->forca += 5;
        $this->idade++;
        $this->CalcularDoenca();
    }

    public function Trabalhar()
    {
        $this->vida--;
        $this->peso-=2;
        $this->CalcularDoenca();
    }


    public function MostrarDados(){
        echo "--------------------------<br>
        Nome: $this->nome<br>
        Idade: $this->idade<br>
        Peso: $this->peso<br>
        Altura: $this->altura<br>
        Força: $this->forca<br>
        Genero: $this->genero<br>
        Vida: $this->vida<br>
        Estado: $this->estado<br>
        Doença: $this->doenca<br>
        <br>";
    }
}

?>
