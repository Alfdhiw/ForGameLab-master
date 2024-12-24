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
    <a class="tab <?php echo isActiveAction('action.php'); ?>" href="action.php" style="text-decoration: none;">
        <span class="icon">
            <div class="icon-frame">
                <img src="bahan/action_bf5.jpg" alt="battlefield5">
            </div>
        </span>
        <span class="tab-text">Battle Field 5</span>
    </a>
    <a class="tab <?php echo isActiveAction('cod.php'); ?>" href="cod.php" style="text-decoration: none;">
        <span class="icon">
            <div class="icon-frame">
                <img src="bahan/action_cod.jpeg" alt="callofduty">
            </div>
        </span>
        <span class="tab-text">Call Of Duty</span>
    </a>
    <a class="tab <?php echo isActiveAction('apex.php'); ?>" href="apex.php" style="text-decoration: none;">
        <span class="icon">
            <div class="icon-frame">
                <img src="bahan/action_apex.jpeg" alt="apexlegend">
            </div>
        </span>
        <span class="tab-text">Apex Legend</span>
    </a>
    <a class="tab <?php echo isActiveAction('csgo.php'); ?>" href="csgo.php" style="text-decoration: none;">
        <span class="icon">
            <div class="icon-frame">
                <img src="bahan/action_csgo.jpg" alt="apexlegend">
            </div>
        </span>
        <span class="tab-text">Counter Strike Go</span>
    </a>
</section>