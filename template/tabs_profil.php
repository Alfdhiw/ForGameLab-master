<?php
// Fungsi untuk memeriksa apakah halaman saat ini aktif
function isActiveAction($page)
{
    $currentPage = basename($_SERVER['REQUEST_URI']); // Mendapatkan nama file dari URL
    return $currentPage === $page ? 'active' : ''; // Mengembalikan 'active' jika cocok
}
?>
<div class="tabs-profile">
    <a role="button" href="detail_profil.php" class="tab-profile <?php echo isActiveAction('detail_profil.php'); ?>" style="text-decoration: none;">Postingan</a>
    <a role="button" href="detail_konten.php" class="tab-profile <?php echo isActiveAction('detail_konten.php'); ?>" style="text-decoration: none;">Konten</a>
    <a role="button" href="detail_video.php" class="tab-profile <?php echo isActiveAction('detail_video.php'); ?>" style="text-decoration: none;">Video</a>
</div>