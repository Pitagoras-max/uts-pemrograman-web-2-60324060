<?php
require_once 'config/database.php';

// Validasi ID dari GET
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error=ID tidak valid");
    exit();
}

$id_kategori = intval($_GET['id']);

// Cek keberadaan data
$stmt_check = $conn->prepare("SELECT id_kategori FROM kategori WHERE id_kategori = ?");
$stmt_check->bind_param("i", $id_kategori);
$stmt_check->execute();

if ($stmt_check->get_result()->num_rows == 0) {
    header("Location: index.php?error=Data tidak ditemukan");
    exit();
}
$stmt_check->close();

// Delete data
$stmt = $conn->prepare("DELETE FROM kategori WHERE id_kategori = ?");
$stmt->bind_param("i", $id_kategori);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        header("Location: index.php?pesan=Data berhasil dihapus");
    } else {
        header("Location: index.php?error=Gagal menghapus data");
    }
} else {
    header("Location: index.php?error=Terjadi kesalahan database");
}

$stmt->close();
$conn->close();
?>