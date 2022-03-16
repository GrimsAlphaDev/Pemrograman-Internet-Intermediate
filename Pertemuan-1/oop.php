<?php 

class SportBike {

    protected $engine, $fairing, $wheel, $seat, $handlebarPosition;

    public function __construct($handlebarPosition = 'Low') {
        $this->handlebarPosition = $handlebarPosition;
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

    public function setEngine($engine) {
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
        $this->brand = "Honda";
        $this->superCharge = false;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }
    
    public function setsuperCharge() {
        $this->superCharge = true;
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



?>