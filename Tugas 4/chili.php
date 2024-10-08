<?php 
    class cabai {
        public $jenis;

        public function namaJenis($jenis){
             $this->jenis = $jenis;
        }

        public function ambilCabe(){
            return $this->jenis;
        }

        public function harga() {
            return "50.000/kg";
        }
    }
?>