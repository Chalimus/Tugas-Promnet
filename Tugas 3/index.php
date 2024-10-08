<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="suhu.css">
</head>
<body>
    <div class="container">
        <h2>Tugas Menghitung Suhu AC</h2>
        <form action="" method="POST">
            <label for="suhu">Suhu Ruangan :</label>
            <input type="number" step="0.5" id="suhu" name="suhu" min="0" max="100" placeholder="Masukkan Suhu ..." required>
            <label for="kelembapan">Kelembapan :</label>
            <input type="number" name="kelembapan" id="kelembapan" step="0.5" min="0" max="100" placeholder="Masukkan Kelembapan ..." required>
            <div class="but">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            // MENDAPATKAN INPUT DARI USER
            $suhu = (float) $_POST['suhu'];
            $kelembapan = (float) $_POST['kelembapan'];
            $status = "";

            function statusAC ($suhu, $kelembapan) {
                if ($suhu > 30 && $kelembapan > 80){
                    return "Kondisi Tidak Logis - Suhu tinggi dan Kelembapan Rendah";
                }elseif ($suhu < 20 && $kelembapan < 100 && $kelembapan > 70) {
                    return "AC Mati";
                } elseif ($suhu >= 20 && $suhu <25 && $kelembapan <= 80 && $kelembapan > 75) {
                    return "AC Menyala Ringan";
                } elseif ($suhu >= 25 && $suhu < 30 && $kelembapan <= 75 && $kelembapan > 50) {
                    return "AC Menyala Sedang";
                }elseif ($suhu >= 30 && $kelembapan <= 50) {
                    return "AC Menyala Berat";
                }else{
                    return "Suhu dan Kelembapan Salah";
                }
            }

            // menampilkan Hasil
            $status = statusAC($suhu, $kelembapan);
            echo "<div class='hasil'>";
            echo "<h3> Status AC </h3>";
            echo "<p><strong>Suhu: </strong> $suhu&deg;C </p>";
            echo "<p><strong>Kelembapan: </strong> $kelembapan% </p>";
            echo "<p><strong>Status AC: </strong>$status</p>";
            echo "</div>";
        }
    ?>
</body>
</html>