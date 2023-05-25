<?php

// Fungsi untuk membaca data dari file
function readData()
{
    $file = 'data_buku.txt';
    $data = [];

    if (file_exists($file)) {
        $handle = fopen($file, 'r');

        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $data[] = explode('-', $line);
            }

            fclose($handle);
        }
    }

    return $data;
}

echo '<h3 style="container">Data Buku Perpustakaan Mentari</h3>';
$data = readData();

if (empty($data)) {
    echo "Tidak ada data buku.";
} else {
    echo "<table border='2'>";
    echo "<tr><th>Kode Buku</th><th>Judul</th><th>Pengarang</th><th>Tahun Terbit</th><th>Jumlah Halaman</th><th>Penerbit</th><th>Genre</th><th>Cover</th><th>Aksi</th></tr>";

    foreach ($data as $key => $buku) {
        echo "<tr>";
        foreach ($buku as $index => $value) {
            if ($index === 7) {
                $cover = trim($value); // Menghapus spasi tambahan jika ada
                echo "<td><center><img src='uploads/" . $cover . "' alt='Cover' height='100'></center></td>";
            } else {
                echo "<td>" . $value . "</td>";
            }
        }
        echo "<td><a href='form_update.php?code=" . $buku[0] . "'>Update</a>
        | <a href='delete.php?code=" . $buku[0] . "'>Delete</a></td>";


        echo "</tr>";
    }
    echo "</table>";
}

echo '<br><br><a href="form_insert.php">Kembali ke Form</a>';
