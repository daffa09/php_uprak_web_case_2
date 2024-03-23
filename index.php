<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Praktek Web Semester 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Ujian Praktek Web Semester 2 Kasus 2</h1>

    <div class="kotak-form">

        <h1 class="tulisan-judul">Form Gaji</h1>

        <form action="hasil.php" method="post">
            <li>
                <select name="golongan" id="golongan" class="form-option">
                    <option value="#">Pilih Golongan Anda..</option>
                    <option value="1">Golongan 1</option>
                    <option value="2">Golongan 2</option>
                    <option value="3">Golongan 3</option>
                </select>
            </li>
            <li>
                <input type="submit" value="Kirim" name="submit" class="tombol">
            </li>
        </form>

    </div>
</body>

</html>