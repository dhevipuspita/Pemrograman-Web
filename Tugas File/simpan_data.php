<?php
// Fungsi untuk menambah data buku
function addBook($book)
{
    $file = 'data_buku.txt';
    $handle = fopen($file, 'a');

    if ($handle) {
        fwrite($handle, implode(' - ', $book) . PHP_EOL);
        fclose($handle);
        echo "Data buku berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan data buku.";
    }
}

// Form untuk menambah data buku
if (isset($_POST['add_book'])) {
    $bookToAdd = [
        $_POST['kode'],
        $_POST['judul'],
        $_POST['pengarang'],
        $_POST['tahun'],
        $_POST['halaman'],
        $_POST['penerbit'],
        $_POST['genre'],
        $_FILES['cover']['name']
    ];

    $targetDir = 'uploads/';
    // Buat direktori 'uploads' jika belum ada
    if (!is_dir($targetDir)) {
        mkdir($targetDir);
    }

    $targetFile = $targetDir . basename($_FILES['cover']['name']);
    $uploadSuccess = move_uploaded_file($_FILES['cover']['tmp_name'], $targetFile);

    if ($uploadSuccess) {
        addBook($bookToAdd);
    } else {
        echo "Gagal mengupload file cover.";
    }
}

echo '<br><br><a href="form_insert.php">Kembali ke Form</a>';
echo '<br><br><a href="baca_data.php">Lihat Data Buku</a>';
