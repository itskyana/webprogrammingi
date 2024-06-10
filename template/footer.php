<!-- Footer -->
<footer>
    <div class="footer-content">
        <!-- Bagian tentang universitas -->
        <div class="footer-section about">
            <!-- Logo Universitas BSI -->
            <img src="assets/image/logo_bsi.png" alt="Universitas BSI Logo" class="footer-logo">
            <!-- Nama Universitas -->
            <h3>Universitas Bina Sarana Informatika</h3>
            <!-- Deskripsi singkat tentang universitas -->
            <p>Memberikan pendidikan berkualitas dan unggul dalam bidang teknologi dan informasi.</p>
        </div>
        
        <!-- Bagian tautan berguna -->
        <div class="footer-section links">
            <h3>Tautan Berguna</h3>
            <ul>
                <!-- Tautan ke beranda -->
                <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                <!-- Tautan ke halaman tentang -->
                <li><a href="<?php echo base_url('?page=tentang'); ?>">Tentang</a></li>
                <!-- Tautan ke halaman program studi -->
                <li><a href="<?php echo base_url('?page=program_studi'); ?>">Program Studi</a></li>
                <!-- Tautan ke halaman Siakad (eksternal) -->
                <li><a href="http://students.bsi.ac.id/mahasiswa/login_akd.aspx">Siakad</a></li>
                <!-- Tautan ke halaman berita (eksternal) -->
                <li><a href="https://news.bsi.ac.id/">Berita</a></li>
                <!-- Tautan ke halaman kontak -->
                <li><a href="<?php echo base_url('?page=kontak'); ?>">Kontak</a></li>
            </ul>
        </div>
        
        <!-- Bagian media sosial -->
        <div class="footer-section social">
            <h3>Ikuti Kami</h3>
            <div class="social-icons">
                <!-- Ikon Facebook -->
                <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                <!-- Ikon Twitter -->
                <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                <!-- Ikon Instagram -->
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                <!-- Ikon LinkedIn -->
                <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    
    <!-- Bagian bawah footer -->
    <div class="footer-bottom">
        &copy; Universitas Bina Sarana Informatika | 2024
    </div>
</footer>
<!-- End Footer -->
