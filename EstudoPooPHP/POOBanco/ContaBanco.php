<?php

    class ContaBanco {
        //Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Métodos
        public function abrirConta($t) {
            $this->settipoConta($t);
            $this->setstatusConta(true);
            if ($t == "CC") {
                $this->setsaldoConta(50);
            }elseif ($t == "CP"){
                $this->saldo = 150;

            }

        }

        public function fecharConta() {
            if ($this->getsaldoConta() > 0) {
                echo "<p>Conta ainda tem dinehiro, não posso fechá-la!</p>";
            } elseif ($this->getsaldoConta() < 0) {
                echo "<p>Conta está em débito. Impossível encerrar! </p>";

            } else {
                $this->setstatusConta(false);
                echo "<p>Conta de ".$this->getdonoConta()." fechada com sucesso!</p>";
            }

        }

        public function depositar($v) {
            if ($this->getstatusConta()){
                $this->setsaldoConta($this->getsaldoConta() + $v);
                echo "<p>Depósito de R$ $v na conta feito com sucesso na conta de ".$this->getdonoConta()."</p>";
            } else {
                echo "<p> Conta fechada. Não consigo depositar.</p>";
            }

        }

        public function sacar($v) {
            if($this->getstatusConta()){
                if ($this->getsaldoConta() >= $v){
                    $this->setsaldoConta($this->getsaldoConta() - $v);
                    echo "<p>Saque de $v autorizado na conta de ".$this->getdonoConta(). " </p>";
                } else{
                    echo "<p> Saldo insuficiente para saque. </p>";
                }
            } else{
                echo "<p> Não é possível sacar dinheiro de uma conta fechada </p>";
            }

        }

        public function pagarMensal() {
            if ($this->gettipoConta() == "CC"){
                $v = 12;
            } else if ($this->gettipoConta() == "CP"){
                $v = 20;
            }
            if ($this->getstatusConta()){
                $this->setsaldoConta($this->getsaldoConta() - $v);
            } else {
                echo "<p> Problemas com a conta, não posso cobrar </p>";

            }
        }
        // Métodos Especiais

        public function __construct(){
            $this->setsaldoConta(0);
            $this->setstatusConta(false);
            echo "<p> Conta criada com sucesso!</p>";
        }

        public function getnumConta() {
            return $this->numConta;

        }

        public function setnumConta($n) {
            $this->numConta = $n;

        }

        public function gettipoConta() {
            return $this->tipo;

        }

        public function settipoConta($t) {
            $this->tipo = $t;

        }
        public function getdonoConta() {
            return $this->dono;

        }

        public function setdonoConta($d) {
            $this->dono = $d;

        }

        public function getsaldoConta() {
            return $this->saldo;

        }

        public function setsaldoConta($s) {
            $this->saldo = $s;

        }

        public function getstatusConta() {
            return $this->status;

        }

        public function setstatusConta($st) {
            $this->status = $st;

        }
    }

?>

