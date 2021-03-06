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

    public function setBox($box){
        $this->box = $box;
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
    
    public function getPrice(){
        return $this->price;
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

    public function getPrice(){
        return $this->price;
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
    
    public function getBox(){
        return $this->box . " Terpasang";
    }

    public function getPrice(){
        return $this->price;
    }

}

class Adv extends AdventureBike {

    protected $type, $color, $price, $brand, $brake, $year;

    public function __construct($type, $color, $price, $year)
    {
        $this->type = $type;
        $this->color = $color;
        $this->price = $price;
        $this->brand = "Honda";
        $this->year = $year;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function setBrake(){
        $this->brake = "Dual Break";
    }

    public function getBrake(){
        return "Dual Breaking System Dipasang";
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

    public function getPrice(){
        return $this->price;
    }

}

// Membuat Object Dari Class CBR
// Obj Pertama
$cbr1000 = new CBR('CBR1000', '200 KG', 'Red', 'Rp. 1.000.000.000', '2022');
$cbr1000->setEngine('1000 CC');
$cbr1000->setFairing('Full Fairing');
$cbr1000->setSeat('Single Seater');

echo $cbr1000->getType();
echo "<br>";
echo $cbr1000->getEngine();
echo "<br>";
echo $cbr1000->getBrand();
echo "<br>";
echo $cbr1000->getPrice();
echo "<br><hr>";

// Obj Kedua 
$cbr600 = new CBR('CBR600', '180 KG', 'Blue', 'Rp. 640.000.000', '2018');
$cbr600->setEngine('600 CC');
$cbr600->setFairing('Full Fairing');
$cbr600->setHandleBarPosition('Low');

echo $cbr600->getType();
echo "<br>";
echo $cbr600->getEngine();
echo "<br>";
echo $cbr600->getBrand();
echo "<br>";
echo $cbr600->getPrice();
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
echo "<br>";
echo $ZX6R->getPrice();
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
echo "<br>";
echo $H2R->getPrice();
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
echo "<br>";
echo $R1200GS->getPrice();
echo "<br><hr>";


// Obj Kedua
$R1200RT = new R1200('R1200RT', 'Gray', 'Rp. 854.000.000', '2014');
$R1200RT->setEngine('1170 CC');
$R1200RT->setheadlight('LED');
$R1200RT->setBox('Full Box');

echo $R1200RT->getType();
echo "<br>";
echo $R1200RT->getEngine();
echo "<br>";
echo $R1200RT->getBrand();
echo "<br>";
echo $R1200RT->getBox();
echo "<br>";
echo $R1200RT->getPrice();
echo "<br><hr>";

// Membuat Object Dari Class Adv
// Obj Pertama
$ADV = new Adv('Adv', 'White', 'Rp 34.000.000', '2022');
$ADV->setEngine('150 CC');
$ADV->setheadlight('LED');

echo $ADV->getType();
echo "<br>";
echo $ADV->getEngine();
echo "<br>";
echo $ADV->getBrand();
echo "<br>";
echo $ADV->getPrice();
echo "<br><hr>";

// Obj Kedua 
$XAdv = new Adv('XAdv', 'Red', 'Rp 450.000.000', '2021');
$XAdv->setEngine('750 CC');
$XAdv->setheadlight('Full LED');
$XAdv->setBrake();

echo $XAdv->getType();
echo "<br>";
echo $XAdv->getEngine();
echo "<br>";
echo $XAdv->getBrand();
echo "<br>";
echo $XAdv->getBrake();
echo "<br>";
echo $XAdv->getPrice();
echo "<br><hr>";

?>