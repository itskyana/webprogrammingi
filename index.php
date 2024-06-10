<?php
    // Menyertakan file 'baseurl.php' dari direktori 'config'
    // File ini berisi pengaturan base URL atau konfigurasi lain yang diperlukan.
    include 'config/baseurl.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    
        <?php
        // Menyertakan file 'head.php' dari direktori 'template'
        // File ini berisi elemen-elemen <head> seperti <meta>, <title>, dan link ke stylesheet.
        include 'template/head.php';
        ?>

    </head>
    <body> 
        <?php
        
        // Menyertakan file 'navbar.php' dari direktori 'template'
        // File ini berisi kode untuk menampilkan navigasi bar di halaman.
        include 'template/navbar.php';

        // Menyertakan file 'main.php' dari direktori 'template'
        // File ini berisi konten utama halaman.
        include 'template/main.php'; 

        // Menyertakan file 'footer.php' dari direktori 'template'
        // File ini berisi kode untuk menampilkan footer di halaman.
        include 'template/footer.php';
        
        ?>
    </body>
</html>
