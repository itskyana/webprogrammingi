<?php
function base_url($path = '') {
    // Mendapatkan protokol (http atau https)
    // Jika server menggunakan HTTPS (SSL/TLS), maka $protocol akan diisi dengan "https://"
    // Jika tidak, maka akan diisi dengan "http://"
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    // Mendapatkan nama host (misalnya, www.example.com)
    // $_SERVER['HTTP_HOST'] akan mengembalikan nama host dari URL yang diminta
    $host = $_SERVER['HTTP_HOST'];

    // Mendapatkan path dari skrip saat ini
    // dirname($_SERVER['SCRIPT_NAME']) mengembalikan direktori dari skrip yang sedang dijalankan
    $script = dirname($_SERVER['SCRIPT_NAME']);

    // Menghapus tanda slash (/) yang berlebihan di akhir path
    // rtrim($script, '/\\') menghapus semua tanda '/' dan '\' dari akhir string $script
    $script = rtrim($script, '/\\');

    // Mengembalikan URL dasar dengan path yang disediakan ditambahkan di akhir
    // ltrim($path, '/') menghapus tanda '/' dari awal string $path untuk mencegah double slash (//) pada URL
    // Menggabungkan protokol, host, path skrip, dan path yang disediakan
    return $protocol . $host . $script . '/' . ltrim($path, '/');
}
?>
