<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ContaBanco
 *
 * @author Diego Rodrigues
 */
class ContaBanco { 
    public $numConta;
    protected $tipo;
    private $titular; 
    private $saldo;
    private $status;
    
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == Cc) {
            $this->setSaldo(50);
        } else $this->setSaldo(150);
    }
   

    public function fecharConta() {
        if ($this->getSaldo() != 0) {
            echo "<p>Erro! Não é possível fechar a conta.</p>";
        } else $this->setStatus(false);
}   
    
    public function depositar($v){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo()+$v);
            echo "<p>Depósito de R$ $v realizado na conta do(a) ".$this->getTitular().".</p>";
        } else echo "<p>Conta fechada, não foi possível depositar.</p>";
      
    }
    
    public function sacar($v){
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo()- $v);
                echo "<p>Saque de R$ $v autorizado na conta do(a) ".$this->getTitular().".</p>";
            } else {echo "<p>Saldo negativo, não foi possível realizar saque.</p>";}
        } else {echo "<p>Conta fechada, impossível sacar.</p>";}
    }
    
    public function pagarMensalidade(){
          if ($this->getTipo() == Cc){
              $v = 12;
          } else {
              $v = 20;
          }
          if ($this->getStatus()) {
          $this->setSaldo($this->getSaldo() - $v);
          echo "<p>Mensalidade de $v debitada da conta do(a) ".$this->titular.".</p>";     
      }
        else {
            echo "<p>Problemas na conta.</p>";
        } 
    } 
    
    
     public function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0); 
        echo"<p>Conta criada com sucesso.</p>";
    }
    
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


}

