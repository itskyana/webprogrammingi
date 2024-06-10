<?php 
// Mendapatkan halaman saat ini dari parameter 'page' di URL
// Jika parameter 'page' tidak ada, set halaman saat ini ke 'home'
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<header>
    <!-- Navbar Logo -->
    <div class="logo" style="align-items: center;">
        <!-- Menyertakan logo dengan URL base yang dihasilkan oleh fungsi base_url -->
        <img src="<?php echo base_url('assets/image/logo_bsi.png'); ?>" alt="">
        &nbsp;
        <p>Universitas BSI</p>
    </div>

    <!-- Hamburger Menu Icon -->
    <div class="hamburger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>

    <!-- Daftar Navbar -->
    <ul>
        <!-- Link ke halaman beranda, dengan kelas 'active' jika halaman saat ini adalah 'home' -->
        <li><a href="<?php echo base_url(); ?>" class="<?php echo $current_page == 'home' ? 'active' : ''; ?>">Beranda</a></li>
        
        <!-- Link ke halaman tentang, dengan kelas 'active' jika halaman saat ini adalah 'tentang' -->
        <li><a href="<?php echo base_url('?page=tentang'); ?>" class="<?php echo $current_page == 'tentang' ? 'active' : ''; ?>">Tentang</a></li>
        
        <!-- Link ke halaman program studi, dengan kelas 'active' jika halaman saat ini adalah 'program_studi' -->
        <li><a href="<?php echo base_url('?page=program_studi'); ?>" class="<?php echo $current_page == 'program_studi' ? 'active' : ''; ?>">Program Studi</a></li>
        
        <!-- Link ke halaman Siakad, link eksternal -->
        <li><a href="http://students.bsi.ac.id/mahasiswa/login_akd.aspx">Siakad</a></li>
        
        <!-- Link ke halaman berita, link eksternal -->
        <li><a href="https://news.bsi.ac.id/">Berita</a></li>
        
        <!-- Link ke halaman kontak, dengan kelas 'active' jika halaman saat ini adalah 'kontak' -->
        <li><a href="<?php echo base_url('?page=kontak'); ?>" class="<?php echo $current_page == 'kontak' ? 'active' : ''; ?>">Kontak</a></li>
    </ul>
</header>
