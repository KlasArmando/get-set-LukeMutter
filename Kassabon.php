<?php
class Kassabon{

    public $Wasmachine;
    public $Droger;
    public $Koelkast;
    public $Ex;
    public $Inc;

    public function __construct($Wasmachine, $Droger, $Koelkast)
    {
        $this->Wasmachine = $Wasmachine;
        $this->Droger = $Droger;
        $this->Koelkast = $Koelkast;
    }

    public function getWasmachine(){
        return $this->Wasmachine;
    }
    public function getDroger(){
        return $this->Droger;
    }
    public function getKoelkast(){
        return $this->Koelkast;
    }


    public function setEx($Ex){
        $this->Ex = $Ex;
    }

    public function getEx(){
        return $this->Ex;
    }


    public function setInc($Inc){
        $this->Inc = $Inc;
    }

    public function getInc(){
        return $this->Inc *1.21;
    }

}
$Kassabon = new Kassabon($_POST['Prijs1'],$_POST['Prijs2'],$_POST['Prijs3']);
$Kassabon->setEx($Kassabon->getWasmachine() + $Kassabon->getDroger() + $Kassabon->getKoelkast());
$Kassabon->setInc($Kassabon->getEx());
echo "Kassabon" . "<br>";
echo "<br>";
echo "Datum: " . date("d-m-Y") . "<br>";
echo "Wasmachine: " . $_POST['Prijs1'] . "<br>";
echo "Droger: " . $_POST['Prijs2'] . "<br>";
echo "Koelkast: " . $_POST['Prijs3'] . "<br>";
echo "Totaalprijs ex btw: " . $Kassabon->getEx(). "<br>";
echo "Totaalprijs inc btw: " . $Kassabon->getInc();