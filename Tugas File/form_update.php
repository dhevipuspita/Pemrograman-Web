<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>

<body>
    <?php
    $kode = $_GET['code'];
    // Cari buku berdasarkan Kode buku
    $file = file("data_buku.txt");
    foreach ($file as $line) {
        $buku = explode("-", $line);
        if ($buku[0] == $kode) {
            break;
        }
    }

    ?>
    <h3>Update Data Buku</h3>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <table border="0">
            <tr>
                <td>Kode Buku</td>
                <td>:</td>
                <td><input type="text" name="kode" id="kode" required></td>
            </tr>
            <tr>
                <td><br> Judul</td>
                <td><br> :</td>
                <td><br> <input type="text" name="judul" id="kode" required></td>
            </tr>
            <tr>
                <td><br> Pengarang</td>
                <td><br> :</td>
                <td><br> <input type="text" name="pengarang" id="pengarang" required></td>
            </tr>
            <tr>
                <td><br> Tahun Terbit</td>
                <td><br> :</td>
                <td><br> <input type="text" name="tahun" id="tahun" required></td>
            </tr>
            <tr>
                <td><br> Jumlah Halaman</td>
                <td><br>:</td>
                <td><br><input type="text" name="halaman" id="halaman" required></td>
            </tr>
            <tr>
                <td><br> Penerbit</td>
                <td><br>:</td>
                <td><br><input type="text" name="penerbit" id="penerbit" required></td>
            </tr>
            <tr>
                <td><br> Genre Buku</td>
                <td><br>:</td>
                <td><br><input type="text" name="genre" id="genre" required></td>
            </tr>
            <tr>
                <td><br> Cover Buku</td>
                <td><br>:</td>
                <td><br><input type="file" name="cover" required></td>
            </tr>
            <tr>
                <td><br><input type="submit" name="add_book" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>