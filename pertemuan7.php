<?php
// Function untuk menampilkan judul
function displayTitle($title) {
    echo "<h2>$title</h2>";
}

// Function untuk menampilkan daftar menu
function displayMenu() {
    echo "[1] Penggunaan if<br>";
    echo "[2] Penggunaan switch ... case<br>";
    echo "[3] Penggunaan looping<br>";
    echo "[4] Penggunaan array<br>";
}

// Menampilkan judul
displayTitle("Materi Pemrograman PHP");

// Menampilkan daftar menu
displayMenu();
?>
