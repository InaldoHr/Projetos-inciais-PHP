<?php

class Veiculo
{
    //atributos

    private $marca;
    private $modelo;
    private $ano;
    private $cor;
    private $preco_zero;


    //construtor
    public function __construct($marca, $modelo, $ano, $cor, $preco_zero)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->preco_zero = $preco_zero;
    }

    //metodos   
    public function exibirInformacoes()
    {
        echo "===========================<br>
              Marca: $this->marca <br>
              Modelo: $this->modelo <br>
              Ano: $this->ano <br>
              Cor: $this->cor <br>
              Preço:  $this->preco_zero <br>
              ===========================<br>
              ";
    }

    public function calcularIdade(){
        echo "Idade do veiculo: ".date('Y')-$this->ano."<br>" ;
    }

    public function calcularDepreciacao(){
        echo "Depreciação: ".((date('Y')-$this->ano)*430)+2100 ."<br>";
    }
    public function ehNovo(){
        if (date('Y')-$this->ano <= 2){
            echo "É Novo <br>";
        } else {
            echo "É véio po <br>";
        }
    }

    public function pintarVeiculo($novaCor){
        $this->cor = $novaCor;
    }

}
