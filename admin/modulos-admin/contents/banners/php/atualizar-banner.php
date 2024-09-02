<?php

require '../../../../config/bootstrap.php';
use Repositories\BannersRepository;

// pegando dados do do form
$refBannerDesktop = $_POST['refBannerDesktop']; //coluna do banco
$refBannerMobile = $_POST['refBannerMobile']; //coluna do banco
$nomeBannerDesktopDeletar = $_POST['nomeBannerDesktop']; // nome do arquivo para remover
$nomeBannerMobileDeletar = $_POST['nomeBannerMobile']; // nome do arquivo para remover
$nomeBannerDesktop = '';
$nomeBannerMobile = '';


// atualizando banner desktop
if (isset($_FILES['desktop']) && $_FILES['desktop']['error'] != UPLOAD_ERR_NO_FILE) {
    $pastaDestino = "../../../../assets/imagens/arquivos/banners/";
    $dataHora = date('YmdHis');
    $nomeArquivo = $dataHora . basename($_FILES['desktop']['name']);
    $caminhoDestino = $pastaDestino . $nomeArquivo;

    move_uploaded_file($_FILES['desktop']['tmp_name'], $caminhoDestino);

    $nomeBannerDesktop = $nomeArquivo;
}

// atualizando banner mobile
if (isset($_FILES['mobile']) && $_FILES['mobile']['error'] != UPLOAD_ERR_NO_FILE) {
    $pastaDestino = "../../../../assets/imagens/arquivos/banners/";
    $dataHora = date('YmdHis');
    $nomeArquivo = $dataHora . basename($_FILES['mobile']['name']);
    $caminhoDestino = $pastaDestino . $nomeArquivo;

    move_uploaded_file($_FILES['mobile']['tmp_name'], $caminhoDestino);

    $nomeBannerMobile = $nomeArquivo;
}



// remover antigo banner desktop
$filePathDesk = '../../../../assets/imagens/arquivos/banners/' . $nomeBannerDesktopDeletar;
if (file_exists($filePathDesk)) {
    unlink($filePathDesk);
}

// remover antigo banner mobile
$filePathMob = '../../../../assets/imagens/arquivos/banners/' . $nomeBannerMobileDeletar;
if (file_exists($filePathMob)) {
    unlink($filePathMob);
}




// salvar banners no banco
$res = BannersRepository::update($refBannerDesktop, $refBannerMobile, $nomeBannerDesktop, $nomeBannerMobile);
if($res) {
    header('Location: ../../../../banners.php?success=true');
} else {
    header('Location: ../../../../banners.php?error=true');
}
