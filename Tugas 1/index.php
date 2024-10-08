<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Input Nilai</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda..." required>

        <label for="nim">NIM:</label>
        <input type="number" id="nim" name="nim" placeholder="Masukkan NIM Anda" required>

        <label for="nilai">Nilai (0-100):</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" placeholder="Masukkan nilai Anda" required>
        <div class="btn">
        <input type="submit" value="Submit">
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan input dari user
        $nama = htmlspecialchars($_POST['nama']);
        $nim = htmlspecialchars($_POST['nim']);
        $nilai = (int) $_POST['nilai'];

        // Konversi nilai menjadi huruf
        $grade = "";
        if ($nilai >= 0 && $nilai <= 40) {
            $grade = "E";
        } elseif ($nilai >= 41 && $nilai <= 60) {
            $grade = "D";
        } elseif ($nilai >= 61 && $nilai <= 70) {
            $grade = "C";
        } elseif ($nilai >= 71 && $nilai <= 75) {
            $grade = "C+";
        } elseif ($nilai >= 76 && $nilai <= 80) {
            $grade = "B";
        } elseif ($nilai >= 81 && $nilai <= 85) {
            $grade = "B+";
        } elseif ($nilai >= 86 && $nilai <= 100) {
            $grade = "A";
        }

        // Menampilkan hasil input
        echo "<div class='result'>";
        echo "<h3>Hasil Input:</h3>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>NIM:</strong> $nim</p>";
        echo "<p><strong>Nilai:</strong> $nilai</p>";
        echo "<p><strong>Grade:</strong> $grade</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
