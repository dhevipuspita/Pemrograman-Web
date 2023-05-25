<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>

<body>
    <h3>Input Data Buku</h3>
    <form action="simpan_data.php" method="POST" enctype="multipart/form-data">
        <table border="0">
            <tr>
                <td>Kode Buku</td>
                <td>:</td>
                <td><input type="text" name="kode" required></td>
            </tr>
            <tr>
                <td><br> Judul</td>
                <td><br> :</td>
                <td><br> <input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td><br> Pengarang</td>
                <td><br> :</td>
                <td><br> <input type="text" name="pengarang" required></td>
            </tr>
            <tr>
                <td><br> Tahun Terbit</td>
                <td><br> :</td>
                <td><br> <input type="text" name="tahun" required></td>
            </tr>
            <tr>
                <td><br> Jumlah Halaman</td>
                <td><br>:</td>
                <td><br><input type="text" name="halaman" required></td>
            </tr>
            <tr>
                <td><br> Penerbit</td>
                <td><br>:</td>
                <td><br><input type="text" name="penerbit" required></td>
            </tr>
            <tr>
                <td><br> Genre Buku</td>
                <td><br>:</td>
                <td><br><input type="text" name="genre" required></td>
            </tr>
            <tr>
                <td><br> Cover Buku</td>
                <td><br>:</td>
                <td><br><input type="file" name="cover" required></td>
            </tr>
            <tr>
                <td><br><input type="submit" name="add_book" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>