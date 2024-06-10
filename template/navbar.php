<?php 
// Get the current page
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<header>
    <!-- Navbar Logo -->
    <div class="logo" style="align-items: center;">
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

    <!-- Navbar List -->
    <ul>
        <li><a href="<?php echo base_url(); ?>" class="<?php echo $current_page == 'home' ? 'active' : ''; ?>">Beranda</a></li>
        <li><a href="<?php echo base_url('?page=tentang'); ?>" class="<?php echo $current_page == 'tentang' ? 'active' : ''; ?>">Tentang</a></li>
        <li><a href="<?php echo base_url('?page=program_studi'); ?>" class="<?php echo $current_page == 'program_studi' ? 'active' : ''; ?>">Program Studi</a></li>
        <li><a href="http://students.bsi.ac.id/mahasiswa/login_akd.aspx">Siakad</a></li>
        <li><a href="https://news.bsi.ac.id/">Berita</a></li>
        <li><a href="<?php echo base_url('?page=kontak'); ?>" class="<?php echo $current_page == 'kontak' ? 'active' : ''; ?>">Kontak</a></li>
    </ul>
</header>