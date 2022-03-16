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

}

class CBR extends SportBike {

    protected $type, $weight, $color, $price, $brand, $year;

    public function __construct($type, $weight, $color, $price, $brand, $year) {
        $this->type = $type;
        $this->weight = $weight;
        $this->color = $color;
        $this->price = $price;
        $this->brand = $brand;
        $this->year = $year;
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


}

$cbr1000 = new CBR('CBR1000', '200 KG', 'Red', 'Rp. 1.000.000.000', 'Honda', '2022');
$cbr1000->setEngine('1000 CC');
$cbr1000->setFairing('Full Fairing');
$cbr1000->setSeat('2 Seats');

echo $cbr1000->getType();
echo "<br>";
echo $cbr1000->getEngine();
echo "<br>";
echo $cbr1000->getSeat();


?>