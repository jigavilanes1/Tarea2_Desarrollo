<?php
class Operaciones{
    protected $num1;
    protected $num2;
    
    function construct() 
    {

    }

    function setNum1($num1P){
        $this->num1 = $num1P;
    }

    function getNum1(){
        return $this->num1;
    }

    function setNum2($num2P){
        $this->num2 = $num2P;
    }

    function getNum2(){
        return $this->num2;
    }

    function sumar(){
        return $this->num1 + $this->num2;  
    }

    function restar(){
        return $this->num1 - $this->num2;  
    }

    function multiplicar(){
        return $this->num1 * $this->num2;  
    }

    function dividir(){
        if($this->num2==0){
            return "No existe";
        }else{
            return $this->num1 / $this->num2;  
        }
    }
}
    ?>