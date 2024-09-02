<?php
    include_once './config/config.php';
?>


<link rel="stylesheet" href="<?php echo $base_url ?>modulos-admin/login/css/style.css">



<main id="container-login" style="background-image: url(<?php echo $base_url ?>assets/imagens/site-admin/banner-login.png);">
    <form onsubmit="loading()" action="modulos-admin/login/php/logar.php" method="post" id="container-content" class="border-login">
        <img src="<?php echo $base_url ?>assets/imagens/site-admin/logo.png" id="logo-login">
        <p class="mb-4">PAINEL ADMIN</p>
        <input type="text" required class="w-75 mb-2 form-control text-center" placeholder="Login" name="login">
        <input type="password" required class="w-75 mb-2 form-control text-center" placeholder="Senha" name="senha">
        <button type="submit" class="btn btn-principal">ENTRAR</button>

        <?php if(isset($_SESSION['erro-login'])){ ?>
            <h6 class="mt-3 fw-semibold text-danger">Verifique os dados!</h6>
        <?php } ?>
    </form>
</main>



<?php 
    // removendo sessão
    unset($_SESSION['erro-login']);  
    exit;
?>

    