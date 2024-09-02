<?php 
    include_once "config/config.php";
?>


<link rel="stylesheet" href="<?php echo $base_url ?>modulos-admin/contents/banners/css/style.css">


<p class="mb-5 small">Nesta sessão você pode atualizar os <strong>banners mobile e desktop</strong> do seu site!</p>


<!-- banner home -->
<section class="w-100 mb-5 pb-4" style="overflow-x: auto;">
    <h6 class="mb-3">Atualizar banner da página Home</h6>

    <!-- header -->
    <div class="container-banner row py-3">
        <div class="small col-2 fw-bold align-self-center">BANNER</div>
        <div class="small col-3 fw-bold align-self-center">DESKTOP</div>
        <div class="small col-3 fw-bold align-self-center">MOBILE</div>
        <div class="small col-2 fw-bold align-self-center">VISUALIZAR</div>
        <div class="small col-2 fw-bold text-end align-self-center">AÇÕES</div>
    </div>
    <!-- header -->
         
    <!-- content -->
    <div class="container-banner row py-4 border-top border-bottom">
        <div class="col-2 align-self-center">1-</div>
        <div class="col-3 align-self-center"> <div class="container-desktop-banner"> <img src="<?php echo $base_url ?>assets/imagens/arquivos/banners/<?= $banners[0]['banner_home_desktop']; ?>"> </div> </div>
        <div class="col-3 align-self-center"> <div class="container-mobile-banner"> <img src="<?php echo $base_url ?>assets/imagens/arquivos/banners/<?= $banners[0]['banner_home_mobile']; ?>"> </div> </div>
        <div class="col-2 align-self-center"> <a href="../index.html" target="_blank">Ver no site</a> </div>
        <div class="col-2 text-end align-self-center"> <button class="btn-edit-banner" onclick="inserirIdModalAddBanner('banner_home_desktop','banner_home_mobile', '<?= $banners[0]['banner_home_desktop']; ?>', '<?= $banners[0]['banner_home_mobile']; ?>', 'Home')" data-bs-toggle="modal" data-bs-target="#modalBanner"><i class="fas fa-edit fs-3"></i></button> </div>
    </div>
    <!-- content -->
</section>
<!-- banner home -->







<script src="<?php echo $base_url ?>modulos-admin/contents/banners/js/app.js"></script>