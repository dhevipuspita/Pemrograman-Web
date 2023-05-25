<?php
function deleteBook($bookCode)
{
    $file = 'data_buku.txt';
    $tempFile = 'temp.txt';
    $handle = fopen($file, 'r');
    $tempHandle = fopen($tempFile, 'w');

    if ($handle && $tempHandle) {
        while (($line = fgets($handle)) !== false) {
            $bookData = explode(' - ', $line);
            if ($bookData[0] !== $bookCode) {
                fwrite($tempHandle, $line);
            }
        }

        fclose($handle);
        fclose($tempHandle);

        // Ganti file asli dengan file temporer yang sudah diubah
        rename($tempFile, $file);

        echo "Data buku berhasil dihapus.";
    } else {
        echo "Gagal menghapus data buku.";
    }
}

if (isset($_GET['code'])) {
    $bookCodeToDelete = $_GET['code'];

    deleteBook($bookCodeToDelete);
}

// Pemrosesan penghapusan data buku
if (isset($_POST['delete_book'])) {
    $bookCodeToDelete = $_POST['book_code'];

    deleteBook($bookCodeToDelete);
}


echo '<br><br><a href="form_insert.php">Kembali ke Form</a>';
echo '<br><br><a href="baca_data.php">Lihat Data Buku</a>';
