<?php 
    include_once "config/config.php";
?>

<link rel="stylesheet" href="<?= $base_url ?>modulos-admin/contents/dashboard/css/style.css">


<p class="mb-5 small">Nesta sessão você pode atualizar os <strong>dados</strong> de <strong>contatos</strong> e <strong>endereço</strong> do seu site!</p>


<!-- contatos e redes sociais -->
<form onsubmit="loading()" action="modulos-admin/contents/dashboard/php/atualizar-contatos.php" method="post" class="row mb-5 pb-5 border-bottom">
    <div class="mb-4 col-12 col-lg-6">
        <label for="instagram" class="small">Instagram*</label>
        <input class="form-control" value="<?= $contatos->instagram; ?>" type="text" required name="instagram" id="instagram">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="@_instagram" class="small">@ do instagram*</label>
        <input class="form-control" value="<?= $contatos->_instagram; ?>" type="text" required name="@_instagram" id="@_instagram">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="facebook" class="small">Facebook*</label>
        <input class="form-control" value="<?= $contatos->facebook; ?>" type="text" required name="facebook" id="facebook">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="@_facebook" class="small">@ do facebook*</label>
        <input class="form-control" value="<?= $contatos->_facebook; ?>" type="text" required name="@_facebook" id="@_facebook">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="linkedin" class="small">LinkedIn*</label>
        <input class="form-control" type="text" value="<?= $contatos->linkedin; ?>" required name="linkedin" id="linkedin">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="@_linkedin" class="small">@ do LinkedIn*</label>
        <input class="form-control" type="text" value="<?= $contatos->_linkedin; ?>" required name="@_linkedin" id="@_linkedin">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="email-site" class="small">E-mail site*</label>
        <input class="form-control" type="email" value="<?= $contatos->email_site; ?>" required name="email-site" id="email-site">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="email-site-admin" class="small">E-mail recebe contatos do site*</label>
        <input class="form-control" type="email" value="<?= $contatos->email_contato_site; ?>" required name="email-site-admin" id="email-site-admin">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="wpp-principal" class="small">Whatsapp principal*</label>
        <input class="form-control" type="tel" required value="<?= $contatos->wpp_principal; ?>" name="wpp-principal" id="wpp-principal" maxlength="15" inputmode="tel">
    </div>

    <div class="col-12">
        <button class="_btn-salvar btn btn-success">Salvar</button>
    </div>
</form>
<!-- contatos e redes sociais -->





<!-- endereço -->
<form onsubmit="loading()" action="modulos-admin/contents/dashboard/php/atualizar-endereco.php" method="post" class="row mb-5">
    <div class="mb-4 col-12">
        <label for="endereco" class="small">Endereço*</label>
        <input class="form-control text-capitalize" value="<?= $endereco->endereco; ?>" type="text" required name="endereco" id="endereco">
    </div>

    <div class="mb-4 col-12">
        <label for="bairro" class="small">Bairro*</label>
        <input class="form-control text-capitalize" value="<?= $endereco->bairro; ?>" type="text" required name="bairro" id="bairro">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="cidade" class="small">Cidade*</label>
        <input class="form-control text-capitalize" value="<?= $endereco->cidade; ?>" type="text" required name="cidade" id="cidade">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="estado" class="small">Estado*</label>
        <input class="form-control text-uppercase" value="<?= $endereco->estado; ?>" maxlength="2" type="text" required name="estado" id="estado">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="cep" class="small">Cep*</label>
        <input class="form-control" maxlength="9" value="<?= $endereco->cep; ?>" minlength="9" type="text" required name="cep" id="cep">
    </div>

    <div class="col-12">
        <button class="_btn-salvar btn btn-success">Salvar</button>
    </div>
</form>
<!-- endereço -->




<script src="<?php echo $base_url ?>modulos-admin/contents/dashboard/js/app.js"></script>
