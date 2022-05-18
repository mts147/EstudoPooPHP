<?php
class Caneta {
    public $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    public function Caneta($m, $p, $c) { // Método construtor
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
        
    }
    public function tampar(){
        $this->tampada = true;
    }

    public function destampada(){
        $this->tampada = false;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getCor() {
        return $this->c;
    }
    public function setCor($c) {
        $this->cor = $c;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setPonta($p) {
        $this->ponta= $p;
    }

}
    /*public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if ($this->tampada == true) {
            echo "<p>ERRO! Você não pode escrever com a caneta tampada </p>";
        } else {
            echo "<p> Rabiscando... </p>";
        }


    }
    private function tampar() {
        $this->tampada = true;
    }

    private function destampar() {
        $this->tampada = false;
    }
}
*/
?>