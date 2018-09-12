<?php
// Car class
class Car extends Vehicle {
      private $doors;
      private $trailer;

      public function __construct($brand, $color, $name, $doors, $trailer) {
            parent::__construct($brand, $color, $name);
            $this->doors = $doors;
            $this->trailer = $trailer;
            $this->setType('car');
      }

      public function getDoors() {
            return $this->doors;
      }

      public function getTrailer() {
            $trailer = FALSE;
            if ($this->trailer) {
                  $trailer = TRUE;
            }
            return $trailer;
      }

      public function __toString() {
            $findtrailer = "There is NOT a trailer";
            if ($this->getTrailer()) {
                  $findtrailer = "There is a trailer";
            }
            return sprintf("%s, %s, %s\n", parent::__toString(), $this->getDoors(), $findtrailer);
      }
}
?>
