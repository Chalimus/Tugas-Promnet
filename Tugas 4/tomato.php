<?php 
    class tomat {
        public $jenis;

        public function namaJenis($jenis){
             $this->jenis = $jenis;
        }

        public function ambilTomat(){
            return $this->jenis;
        }

        public function harga() {
            return "10.000/kg";
        }
    }
?>