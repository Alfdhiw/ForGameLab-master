<?php
// Fungsi untuk memeriksa apakah halaman saat ini aktif
function isActiveAction($page)
{
    $currentPage = basename($_SERVER['REQUEST_URI']); // Mendapatkan nama file dari URL
    return $currentPage === $page ? 'active' : ''; // Mengembalikan 'active' jika cocok
}
?>

<!-- Tabs -->
<section class="tabs">
    <a class="tab <?php echo isActiveAction('genshin.php'); ?>" href="genshin.php" style="text-decoration: none;">
        <span class="icon">
            <div class="icon-frame">
                <img src="bahan/genshin.jpeg" alt="genshin">
            </div>
        </span>
        <span class="tab-text">Genshin Impact</span>
    </a>
    <a class="tab <?php echo isActiveAction('star.php'); ?>" href="star.php" style="text-decoration: none;">
        <span class="icon">
            <div class="icon-frame">
                <img src="bahan/star_rail.jpeg" alt="starrail">
            </div>
        </span>
        <span class="tab-text">Star Rail</span>
    </a>
    <a class="tab <?php echo isActiveAction('zenless.php'); ?>" href="zenless.php" style="text-decoration: none;">
        <span class="icon">
            <div class="icon-frame">
                <img src="bahan/zenless.jpeg" alt="zenless">
            </div>
        </span>
        <span class="tab-text">Zenless Zone Zero</span>
    </a>
    <a class="tab <?php echo isActiveAction('honkai.php'); ?>" href="honkai.php" style="text-decoration: none;">
        <span class="icon">
            <div class="icon-frame">
                <img src="bahan/honkai_impact.jpeg" alt="honkai">
            </div>
        </span>
        <span class="tab-text">Honkai Impact</span>
    </a>
</section>