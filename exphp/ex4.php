<?php 
    class Verifica {
        public $a; 

        public function teste($number) {
            $this->a = $number;
            if ($number%2 == 0) {
                echo "é par";
            } else{
                echo "é impar";
            }
        }
    }
    $obj = new Verifica;
    $obj-> teste(0);



?>