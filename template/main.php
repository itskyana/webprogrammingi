// Menentukan halaman yang akan dimuat berdasarkan parameter 'page'
<?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'tentang':
                include 'pages/tentang.php';
                break;
            case 'program_studi':
                include 'pages/program_studi.php';
                break;
            case 'kontak':
                include 'pages/kontak.php';
                break;
            default:
                echo '<div id="main-content"><h1>Halaman tidak ditemukan</h1></div>';
                break;
        }
    } else {
        include 'pages/beranda.php';
    }
?>

<!-- Script -->
<script src="assets/js/script.js"></script>