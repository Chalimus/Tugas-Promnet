<?php 
    class kentang{
        public $jenis;

        public function namaJenis($jenis){
            $this->jenis = $jenis;
        }

        public function ambil(){
            return $this->jenis;
        }

        public function harga(){
            return "8000/kg";
        }
    }
?>