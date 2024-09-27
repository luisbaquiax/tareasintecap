<?php
class Cuenta
{
    private $saldoInicial;
    public $saldoActual;
    public $retiro;
    private $cliente; //dueño

    public function __construct($saldoInicial, $saldoActual, $retiro, $cliente)
    {
        $this->saldoInicial = $saldoActual;
        $this->saldoActual = $saldoActual;
        $this->retiro = $retiro;
        $this->cliente = $cliente;
    }

    public function getInfo()
    {
        return "Saldo inicial: Q." . $this->saldoInicial
            . "<br>Saldo actual: Q." . $this->saldoActual
            . "<br>Retiro: Q." . $this->retiro
            . "<br>Cliente: " . $this->cliente;
    }

    public  function calcularSaldo(){
        return $this->saldoActual - $this->retiro;
    }

    public  function realizarRetiro($monto){
        if($this->saldoActual<$monto){
            echo "No se puede retirar más de lo que hay en el saldo. Saldo actual: ".$this->saldoActual;
        }else{
            $this->saldoActual -= $monto;
        }
    }

}

$cuenta = new Cuenta(0, 10000, 200, "Luis Baquiax");
echo "Información de la cuenta<br>".$cuenta->getInfo();
$cuenta->saldoActual = $cuenta->calcularSaldo();
echo "<br>Saldo despues del retiro de ".$cuenta->retiro." es de: Q." .$cuenta->saldoActual;
$retiro = 400;
echo "<br>Nuevo retiro: ".$retiro;
$cuenta->realizarRetiro($retiro);
echo "<br>Saldo despues del retiro de ".$cuenta->retiro." es de: Q." .$cuenta->saldoActual;