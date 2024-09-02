// abrir nav mobile
var controleMenu = false
function abrirNavMobile(){
     if(controleMenu){
        //fechar
        controleMenu = false
        document.getElementById("content-navegacao-mobile").style.cssText = `height:0%; transition: 350ms;`
        document.getElementById("btn-close").style.cssText = `display: none !important;`
     }else{
        //abrir
        controleMenu = true
        document.getElementById("content-navegacao-mobile").style.cssText = `height:100%; transition: 350ms;`
        document.getElementById("btn-close").style.cssText = `display: block !important;`
     }
}