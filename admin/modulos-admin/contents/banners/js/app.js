//inserindo ids banner mobile e desktop dinâmico
function inserirIdModalAddBanner(refDesktop, refMobile, nomeDesktop, nomeMobile, pag){
    document.getElementById("pagina-banner").textContent = `Atualizar banner ${pag}`
    document.getElementById("refBannerDesktop").value = refDesktop
    document.getElementById("refBannerMobile").value = refMobile
    document.getElementById("nomeBannerDesktop").value = nomeDesktop
    document.getElementById("nomeBannerMobile").value = nomeMobile
}