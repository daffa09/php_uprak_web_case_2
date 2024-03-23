<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Praktek Web Semeter 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php if (isset($_POST["submit"])) {

        $gol = $_POST["golongan"];

        switch ($gol) {
            case '1':
                $gajipokok = 100000;
                $tunjangan = 100000;
                $potongan = 0.005 * $gajipokok;
                break;

            case '2':
                $gajipokok = 150000;
                $tunjangan = 150000;
                $potongan = 0.5 * $gajipokok;
                break;

            case '3':
                $gajipokok = 250000;
                $tunjangan = 250000;
                $potongan = 0.1 * $gajipokok;
                break;
            default:
                echo "Error";
                break;
        }
        $total = $gajipokok + $tunjangan - $potongan;
    }
    ?>
    <div class="kotak-hasil">
        <h3 style="text-align: center;">Golongan <?= $gol; ?></h3>
        <h3>Gaji Pokok : RP. <?= number_format($gajipokok, 2, ',', '.'); ?></h3>
        <h3>Tunjangan : RP. <?= number_format($tunjangan, 2, ',', '.'); ?></h3>
        <h3>Potongan : RP. <?= number_format($potongan, 2, ',', '.'); ?></h3>
        <h3>Total Gaji : RP. <?= number_format($total, 2, ',', '.'); ?></h3>
        <br>
        <a href="index.php">Kembali</a>
    </div>




</body>

</html>