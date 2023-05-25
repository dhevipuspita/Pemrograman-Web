<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_book'])) {
    function updateBook($book)
    {
        $file = 'data_buku.txt';
        $tempFile = 'data_temp.txt';
        $handle = fopen($file, 'r');
        $tempHandle = fopen($tempFile, 'w');

        if ($handle && $tempHandle) {
            while (($line = fgets($handle)) !== false) {
                $existingBook = explode('-', $line);

                if ($existingBook[0] === $book[0]) {
                    $updatedLine = implode('-', $book) . PHP_EOL;
                    fwrite($tempHandle, $updatedLine);
                } else {
                    fwrite($tempHandle, $line);
                }
            }

            fclose($handle);
            fclose($tempHandle);

            // Ganti file asli dengan file temporer yang sudah diupdate
            $renameSuccess = rename($tempFile, $file);

            if ($renameSuccess) {
                echo "Data buku berhasil diperbarui.";
            } else {
                echo "Gagal memperbarui data buku. Tidak dapat mengganti file.";
            }
        } else {
            echo "Gagal memperbarui data buku. Tidak dapat membuka file.";
        }
    }

    $bookToUpdate = [
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
    $targetFile = $targetDir . basename($_FILES['cover']['name']);
    $uploadSuccess = move_uploaded_file($_FILES['cover']['tmp_name'], $targetFile);

    if ($uploadSuccess) {
        updateBook($bookToUpdate);
    } else {
        echo "Gagal mengupload file cover.";
    }
}
echo '<br><br><a href="form_insert.php">Kembali ke Form</a>';
echo '<br><br><a href="baca_data.php">Lihat Data Buku</a>';
