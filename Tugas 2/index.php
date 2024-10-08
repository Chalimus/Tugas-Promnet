<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nilai.css">
</head>
<body>
    <div class="container">
        <h1>Penilaian Mata Pelajaran Siswa</h1>
        <table border="1" cellpadding="5" cellspacing="1" class="tabel">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Matematika</th>
                    <th>Bahasa Inggris</th>
                    <th>IPA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Andi</td>
                    <td>85</td>
                    <td>70</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Budi</td>
                    <td>60</td>
                    <td>50</td>
                    <td>65</td>
                </tr>
                <tr>
                    <td>Cici</td>
                    <td>75</td>
                    <td>80</td>
                    <td>70</td>
                </tr>
                <tr>
                    <td>Dodi</td>
                    <td>95</td>
                    <td>85</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Eka</td>
                    <td>50</td>
                    <td>60</td>
                    <td>55</td>
                </tr>
            </tbody>
        </table>
        <form action="" method="POST">
            <div class="submit-btn"><input type="submit" value="Hitung Rata Rata"></div>
        </form>
    </div>

    <?php 
    $siswa = [
        ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
        ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
        ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
        ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 80],
        ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55],
    ];
    
    $hasil = [];
    $jumlah_lulus = 0;
    $jumlah_tdk_lulus = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($siswa as $data) {
            $rata = ($data["matematika"] + $data["bahasa_inggris"] + $data["ipa"]) / 3;
            $status = $rata >= 75 ? "Lulus" : "Tidak Lulus";

            if ($rata >= 75) {
                $status = "Lulus";  // Perbaikan: Gunakan operator "="
                $pelajaran_terendah = "-";
                $jumlah_lulus++;
            } else {
                $status = "Tidak Lulus";  // Perbaikan: Gunakan operator "="
                $nilai_terendah = min($data["matematika"], $data["bahasa_inggris"], $data["ipa"]);  // Perbaikan: Gunakan operator "="
                $jumlah_tdk_lulus++;

                if ($nilai_terendah == $data["matematika"]) {
                    $pelajaran_terendah = "Matematika";
                } elseif ($nilai_terendah == $data["bahasa_inggris"]) {
                    $pelajaran_terendah = "Bahasa Inggris";
                } else {
                    $pelajaran_terendah = "IPA";
                }
            }

            // Simpan hasil
            $hasil[] = [
                "nama" => $data["nama"],
                "rata_rata" => number_format($rata, 2),
                "status" => $status,
                "pelajaran_terendah" => $pelajaran_terendah,
                "jumlah_lulus" => $jumlah_lulus,
                "jumlah_tdk_lulus" => $jumlah_tdk_lulus
            ];
        }
    }
?>
    <?php if (!empty($hasil)): ?>
        <h2>Hasil Rata-rata dan Kelulusan</h2>
        <table border="1" cellpadding = "5"class="hasil">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Rata-rata</th>
                    <th>Status</th>
                    <th>Mata Pelajaran yang Harus Diperbaiki</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil as $data): ?>
                <tr>
                    <td><?php echo $data["nama"]; ?></td>
                    <td><?php echo $data["rata_rata"]; ?></td>
                    <td><?php echo $data["status"]; ?></td>
                    <td><?php echo $data["pelajaran_terendah"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php 
            echo "<p>Jumlah Siswa Lulus: $jumlah_lulus</p>";
            echo "<p>Jumlah Siswa Tidak Lulus: $jumlah_tdk_lulus</p>";
        ?>
    <?php endif; ?>
</body>
</html>