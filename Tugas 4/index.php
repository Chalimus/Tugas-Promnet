<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pemnet.css">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
            background-color: skyblue;
        }

        h1 {
            margin: 0 auto;  
            text-align: center; 
        }

        .materi {
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 10px;
            align-content: space-around;
            justify-content: space-around;
            margin: 10px;
            margin-top: 50px;
        }

        .sub-materi1{
            display: grid;
            box-sizing: border-box;
            box-shadow: 10px 10px;
            background-color: rgb(240, 110, 110);
            width: 300px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 0.9em;
        }

        .sub-materi1:hover{
            background-color: red;
            cursor: pointer;
        }

        .sub-materi2{
            display: grid;
            box-sizing: border-box;
            box-shadow: 10px 10px;
            background-color: rgb(249, 198, 103);
            width: 300px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 0.9em;
        }

        .sub-materi2:hover{
            background-color: orange;
            cursor: pointer;
        }

        .sub-materi3{
            display: grid;
            box-sizing: border-box;
            box-shadow: 10px 10px;
            background-color: rgb(254, 254, 129);
            width: 300px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 0.9em;
        }

        .sub-materi3:hover{
            background-color: yellow;
            cursor: pointer;
        }

        .sub-materi4{
            display: grid;
            box-sizing: border-box;
            box-shadow: 10px 10px;
            background-color: rgb(135, 255, 135);
            width: 300px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 0.9em;
        }

        .sub-materi4:hover{
            background-color: rgb(2, 181, 2);
            cursor: pointer;
        }

        .sub-materi5{
            display: grid;
            box-sizing: border-box;
            box-shadow: 10px 10px;
            background-color: rgb(137, 137, 253);
            width: 300px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 0.9em;
        }

        .sub-materi5:hover{
            background-color: blue;
            cursor: pointer;
        }

        .sub-materi6{
            display: grid;
            box-sizing: border-box;
            box-shadow: 10px 10px;
            background-color: rgb(212, 153, 255);
            width: 300px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 0.9em;
        }

        .sub-materi6:hover{
            background-color: rgb(102, 2, 173);
            cursor: pointer;
        }

        .sub-materi7{
            display: grid;
            box-sizing: border-box;
            box-shadow: 10px 10px;
            background-color: rgb(254, 163, 254);
            width: 300px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 0.9em;
            height: 139px;
            grid-column: 2 / 3;
        }

        .sub-materi7:hover{
            background-color: violet;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Tugas Object Oriented Programming</h1>
        <div class="materi">
            <div class="sub-materi1">
                    <h3>Object</h3>
                    <?php 
                        class televisi {
                            public $merk;
                            public $harga;
                    
                            public function aktivitas(){
                                return "Digunakan setiap hari";
                            }
                        }
                    
                        //objek baru
                        $sharp = new televisi();
                        $sharp->merk = "Sharp Aquos";
                        $sharp->harga = 2000000;
                    
                        //panggil
                        echo "Merk: ".$sharp->merk."</br>";
                        echo "Harga: ".$sharp->harga."</br>";
                        echo $sharp->aktivitas() ."</br></br></br>";
                    ?>
                </div>
                <div class="sub-materi2">
                <h3>Encapsulation</h3>
                <?php 
                    class musik {
                        private $lagu;
                
                        public function setLagu($lagu){
                            $this->lagu = $lagu; //menyetel judul lagu
                        }
                        public function judulLagu(){
                        return $this->lagu; //mengambil lagu
                        }
                    }
                
                    $spotify = new musik();
                    $spotify->setLagu("Mari Bercerita");
                    echo "Judul Lagu: ".$spotify->judulLagu(). "</br></br></br>";
                ?>
                </div>
                <div class="sub-materi3">
                <h3>Inheritance</h3>
                <?php 
                    class sepeda {
                        public $merk;
                
                        public function bel(){
                            return "kring kring";
                        }
                    }
                
                    class polygon extends sepeda {
                        public function bel(){
                            return "tring tring";
                        }
                    }
                
                    $bicycle = new sepeda();
                    $bicycle->merk = "Polygon Hiking";
                    echo "Merk Sepeda: ". $bicycle->merk. "</br>";
                    echo "Bunyi Bel: ". $bicycle->bel(). "</br></br>";
                ?>
                </div>
                <div class="sub-materi4">
                <h3>Abstract</h3>
                <?php 
                    abstract class minuman {
                        abstract public function jenisMinuman();
                    }
                
                    class minum extends minuman{
                        public function jenisMinuman()
                        {
                            return "Fruit Tea";
                        }
                    }
                
                    $botol = new minum();
                    echo "Jenis Minuman: ". $botol->jenisMinuman(). "</br></br>";
                ?>
                </div>
                <div class="sub-materi5">
                <h3>Include atau Required</h3>
                <?php 
                require_once 'potato.php';
                require_once 'tomato.php';
            
                $kentangku = new kentang();
                $kentangku->namaJenis("Kentang Jawa");
                echo "Jenis Kentang yang dijual: ".$kentangku->ambil(). "</br>";
                echo "Harga Kentang: ". $kentangku->harga(). "</br></br>";
            
                $tomatku = new tomat();
                $tomatku->namaJenis("Tomat Cheri");
                echo "Jenis Tomat yang dijual: ".$tomatku->ambilTomat(). "</br>";
                echo "Harga Kentang: ".$tomatku->harga(). "</br></br></br>";
                ?>
                </div>
                <div class="sub-materi6">
                <h3>autoload</h3>
                <?php 
                function autoloader($class){
                    include __DIR__ . '/chili.php'; //Misalkan kelas ada di folder 'classes', kita akan mencari file dengan nama kelas tersebut.
                }
                spl_autoload_register('autoloader');
            
                $cabe = new cabai();
                $cabe->namaJenis("Cabe Rawit");
                echo "Jenis cabai yang dijual: ". $cabe->ambilCabe(). "</br>";
                echo "Harga Cabai: ". $cabe->harga(). "</br></br></br>";
                ?>
                </div>
                <div class="sub-materi7">
                <h3>composer</h3>
                <?php 
                require __DIR__ . '/vendor/autoload.php';
                use Pemnet\chili;
            
                $cabe = new cabai();
                $cabe->namaJenis("Cabe Rawit");
            
                // Menampilkan informasi cabai
                echo "Jenis cabai yang dijual: " . $cabe->jenis . "</br>";
                echo "Harga Cabai: " . $cabe->harga();
                ?>
                </div>
            </div>
    </div>
</body>
</html>