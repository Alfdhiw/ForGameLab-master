<?php
// Fungsi untuk memeriksa apakah halaman saat ini aktif
function isActiveAction($page)
{
    $currentPage = basename($_SERVER['REQUEST_URI']); // Mendapatkan nama file dari URL
    return $currentPage === $page ? 'active' : ''; // Mengembalikan 'active' jika cocok
}
?>
<div class="tabs-profile">
    <a role="button" href="detail_user.php" class="tab-profile <?php echo isActiveAction('detail_user.php'); ?>" style="text-decoration: none;">Postingan</a>
    <a role="button" href="detail_konten_user.php" class="tab-profile <?php echo isActiveAction('detail_konten_user.php'); ?>" style="text-decoration: none;">Konten</a>
    <a role="button" href="detail_video_user.php" class="tab-profile <?php echo isActiveAction('detail_video_user.php'); ?>" style="text-decoration: none;">Video</a>
</div>