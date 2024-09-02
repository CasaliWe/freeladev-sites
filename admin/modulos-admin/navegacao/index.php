<?php 
    include_once "config/config.php";
?>


<link rel="stylesheet" href="<?php echo $base_url ?>modulos-admin/navegacao/css/style.css">


<!-- MOBILE -->
<div id="content-navegacao-mobile" class="px-5">
    <button id="btn-close" onclick="abrirNavMobile()"> <i class="fas fa-close fs-1 text-danger"></i> </button>

    <!-- NAVEGAÇÃO -->
    <?php include "modulos-admin/navegacao/nav/index.php";?>
    <!-- NAVEGAÇÃO -->

    <div id="footer-nav">
        <h6 class="fw-semibold">PAINEL ADMINISTRATIVO</h6>
        <img src='<?= $base_url ?>assets/imagens/site-admin/logo-nostra.png'>
    </div>
</div>

<section id="header-navegacao-mobile" class="shadow-lg bg-logo-nav">
    <img id="logo-nav-mobile" src="<?php echo $base_url ?>assets/imagens/site-admin/logo.png" alt="Logo">

    <button onclick="abrirNavMobile()" style="background-color: transparent; border: none; cursor: pointer;"> <i class="fas fa-bars fs-1 color-toggler"></i> </button>
</section>
<!-- MOBILE -->



<!-- DESKTOP -->
<aside id="navegacao-desktop" class="position-fixed left-0 vh-100 d-flex flex-column bg-secondary bg-opacity-25 shadow-lg">
    <div class="bg-logo-nav py-4 w-100 px-3 d-flex justify-content-center align-items-center"><img class="w-25" src="<?php echo $base_url ?>assets/imagens/site-admin/logo.png" alt="Logo"></div>

    <!-- NAVEGAÇÃO -->
    <?php include "modulos-admin/navegacao/nav/index.php";?>
    <!-- NAVEGAÇÃO -->


    <div id="footer-nav">
        <h6 class="fw-semibold">PAINEL ADMINISTRATIVO</h6>
        <img src='<?= $base_url ?>assets/imagens/site-admin/logo-nostra.png'>
    </div>
</aside>
<!-- DESKTOP -->


<script src="<?php echo $base_url ?>modulos-admin/navegacao/js/app.js"></script>