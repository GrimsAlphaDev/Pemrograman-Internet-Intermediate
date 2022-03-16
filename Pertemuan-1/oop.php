<?php 

class SportBike {

    protected $engine, $fairing, $seat, $handlebarPosition;

    public function __construct() {
        $this->handlebarPosition = "low";
    }

    public function setFairing($fairing) {
        $this->fairing = $fairing;
    }

    public function setHandleBarPosition($handlebarPosition) {
        $this->handlebarPosition = $handlebarPosition;
    }

    public function setSeat($seat){
        $this->seat = $seat;
    }


}

class AdventureBike {

    protected $engine, $box, $seat, $handlebarPosition, $headlight;

    public function __construct($handlebarPosition = 'High') {
        $this->handlebarPosition = $handlebarPosition;
    }

    public function setSeat($seat){
        $this->seat = $seat;
    }

    public function setheadlight($engine) {
        $this->engine = $engine;
    }

}

class CBR extends SportBike {

    protected $type, $weight, $color, $price, $brand, $year;

    public function __construct($type, $weight, $color, $price, $year) {
        $this->type = $type;
        $this->weight = $weight;
        $this->color = $color;
        $this->price = $price;
        $this->year = $year;
        $this->brand = "Honda";
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

   public function getSeat() {
        return $this->seat;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function getType(){
        return $this->type;
    }

    public function getBrand(){
        return $this->brand;
    }

}

class Ninja extends SportBike {

    protected $type, $weight, $color, $price, $brand, $year, $superCharge;

    public function __construct($type, $weight, $color, $price, $year) {
        $this->type = $type;
        $this->weight = $weight;
        $this->color = $color;
        $this->price = $price;
        $this->year = $year;
        $this->brand = "Kawasaki";
        $this->superCharge = false;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }
    
    public function setsuperCharge() {
        $this->superCharge = true;
    }

   public function useSuperCharge() {
        return "Super Charge Siap Digunakan";
    }

    public function getEngine() {
        return $this->engine;
    }

    public function getType(){
        return $this->type;
    }

    public function getBrand(){
        return $this->brand;
    }

}

class R1200 extends AdventureBike {

    protected $type, $color, $price, $brand, $crashbar, $year;

    public function __construct($type, $color, $price, $year)
    {
        $this->type = $type;
        $this->color = $color;
        $this->price = $price;
        $this->brand = "BMW";
        $this->year = $year;
        $this->crashbar = false;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function setCrashbar(){
        $this->crashbar = true;
    }

    public function getCrashbar(){
        return "CrashBar Dipasang";
    }
   
    public function getEngine() {
        return $this->engine;
    }

    public function getType(){
        return $this->type;
    }

    public function getBrand(){
        return $this->brand;
    }

}

// Membuat Object Dari Class CBR
// Obj Pertama
$cbr1000 = new CBR('CBR1000', '200 KG', 'Red', 'Rp. 1.000.000.000', '2022');
$cbr1000->setEngine('1000 CC');
$cbr1000->setFairing('Full Fairing');

echo $cbr1000->getType();
echo "<br>";
echo $cbr1000->getEngine();
echo "<br>";
echo $cbr1000->getBrand();
echo "<br><hr>";

// Obj Kedua 
$cbr600 = new CBR('CBR600', '180 KG', 'Blue', 'Rp. 640.000.000', '2018');
$cbr600->setEngine('600 CC');
$cbr600->setFairing('Full Fairing');

echo $cbr600->getType();
echo "<br>";
echo $cbr600->getEngine();
echo "<br>";
echo $cbr600->getBrand();
echo "<br><hr>";

// Membuat Object Dari Class Ninja
// Obj Pertama
$ZX6R = new Ninja('ZX6R', '179 KG', 'Violet', 'Rp. 312.000.000', '2017');
$ZX6R->setEngine('600 CC');
$ZX6R->setFairing('Full Fairing');


echo $ZX6R->getType();
echo "<br>";
echo $ZX6R->getEngine();
echo "<br>";
echo $ZX6R->getBrand();
echo "<br><hr>";

// Obj Kedua
$H2R = new Ninja('H2R', '195 KG', 'Green', 'Rp. 800.000.000', '2015');
$H2R->setEngine('998 CC');
$H2R->setFairing('80% Fairing');
$H2R->setsuperCharge();

echo $H2R->getType();
echo "<br>";
echo $H2R->getEngine();
echo "<br>";
echo $H2R->getBrand();
echo "<br>";
echo $H2R->useSuperCharge();
echo "<br><hr>";

// Membuat Object Dari Class R1200
// Obj Pertama
$R1200GS = new R1200('R1200GS', 'Gray', 'Rp. 642.000.000', '2014');
$R1200GS->setEngine('1200 CC');
$R1200GS->setheadlight('Full LED');
$R1200GS->setCrashbar();

echo $R1200GS->getType();
echo "<br>";
echo $R1200GS->getEngine();
echo "<br>";
echo $R1200GS->getBrand();
echo "<br>";
echo $R1200GS->getCrashbar();
echo "<br><hr>";

// Obj Kedua 
$cbr600 = new CBR('CBR600', '180 KG', 'Blue', 'Rp. 640.000.000', '2018');
$cbr600->setEngine('600 CC');
$cbr600->setFairing('Full Fairing');

echo $cbr600->getType();
echo "<br>";
echo $cbr600->getEngine();
echo "<br>";
echo $cbr600->getBrand();
echo "<br><hr>";


?>