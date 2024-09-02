<?php
    // verificando qual página
    $urlAtual = $_SERVER['REQUEST_URI'];

    // titulos content páginas
    $tituloContentPagina = "";

    // link ativo página
    $activeDashboard = false;
    $activeBanners = false;
    $activeProjetos = false;
    $activeAcessos = false;

    // Devolve o nome da página atual
    if(strpos($urlAtual, 'dashboard') !== false){
        $tituloContentPagina = "Informações";
        $activeDashboard = true;
    }else if(strpos($urlAtual, 'banners') !== false){
        $tituloContentPagina = "Banners";
        $activeBanners = true;
    }else if(strpos($urlAtual, 'projetos') !== false){
        $tituloContentPagina = "Projetos";
        $activeProjetos = true;
    }else if(strpos($urlAtual, 'acessos') !== false){
        $tituloContentPagina = "Acessos";
        $activeAcessos = true;
    }else{
        $tituloContentPagina = "Informações";
        $activeDashboard = true;
    }
?>




<nav class="d-flex flex-column w-100 mt-5 pt-5 mt-lg-0 pt-lg-0">
    <a href="dashboard.php" class="link-nav-desktop <?= $activeDashboard ? 'active-link-desktop' : ''; ?>">Informações</a>
    <a href="banners.php" class="link-nav-desktop <?= $activeBanners ? 'active-link-desktop' : ''; ?>">Banners</a>
    <a href="projetos.php" class="link-nav-desktop <?= $activeProjetos ? 'active-link-desktop' : ''; ?>">Projetos</a>
    <a href="acessos.php" class="link-nav-desktop <?= $activeAcessos ? 'active-link-desktop' : ''; ?>">Acessos</a>
    <a class="link-nav-desktop"><?php include "modulos-admin/btn-logout/index.php"; ?></a>
</nav>