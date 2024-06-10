<?php
    // Memeriksa apakah parameter 'page' ada di URL
    if (isset($_GET['page'])) {
        // Menyimpan nilai parameter 'page' ke dalam variabel $page
        $page = $_GET['page'];

        // Menggunakan switch-case untuk menentukan halaman yang akan dimuat berdasarkan nilai $page
        switch ($page) {
            case 'tentang':
                // Jika nilai $page adalah 'tentang', sertakan file 'tentang.php' dari direktori 'pages'
                include 'pages/tentang.php';
                break;
            case 'program_studi':
                // Jika nilai $page adalah 'program_studi', sertakan file 'program_studi.php' dari direktori 'pages'
                include 'pages/program_studi.php';
                break;
            case 'kontak':
                // Jika nilai $page adalah 'kontak', sertakan file 'kontak.php' dari direktori 'pages'
                include 'pages/kontak.php';
                break;
            default:
                // Jika nilai $page tidak cocok dengan kasus di atas, tampilkan pesan 'Halaman tidak ditemukan'
                echo '<div id="main-content"><h1>Halaman tidak ditemukan</h1></div>';
                break;
        }
    } else {
        // Jika parameter 'page' tidak ada di URL, sertakan file 'beranda.php' dari direktori 'pages'
        include 'pages/beranda.php';
    }
?>

<!-- Script -->
<!-- Menyertakan file JavaScript 'script.js' dari direktori 'assets/js' -->
<script src="assets/js/script.js"></script>
