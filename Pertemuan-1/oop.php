<?php 

class SportBike {

    protected $engine, $fairing, $wheel, $seat, $handlebarPosition;

    public function __construct($handlebarPosition = 'Low') {
        $this->handlebarPosition = $handlebarPosition;
    }

    public function setFairing($fairing) {
        $this->fairing = $fairing;
    }

    public function getHandlebarPosition() {
        return $this->handlebarPosition;
    }

}



?>