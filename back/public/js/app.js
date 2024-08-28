//mascara input tel
document.getElementById('tel-form').addEventListener('keyup', (e)=>{
    let input = e.target
    input.value = phoneMask(input.value)
})


const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
}




//ABRIR MENU MOBILE
var controleMenu = false
function abrirMenuMobile(){
    if(controleMenu){
        document.getElementById('content-menu-mobile').classList.add('d-none')
        document.getElementById('btn-toggler-fechar').classList.add('d-none')
        document.getElementById("btn-toggler-abrir").classList.remove('d-none')
        controleMenu = false
    }else{
        document.getElementById('content-menu-mobile').classList.remove('d-none')
        document.getElementById('content-menu-mobile').classList.add('animaContentMobile')
        document.getElementById("btn-toggler-abrir").classList.add('d-none')
        document.getElementById('btn-toggler-fechar').classList.remove('d-none')
        controleMenu = true
    }
}

//TROCAR ABAS MOBILE
function trocarAbasMobile(e, aba){
     
    abrirMenuMobile();

    trocarAbas(e, aba);
}






//trocar abas desktop
function trocarAbas(e, aba){

    var btns = document.querySelectorAll('.btns-abas')
    btns.forEach((btn)=>{
        btn.classList.remove('active-menu-desk')
    })
    e.classList.add('active-menu-desk')


    var conteudo = document.querySelectorAll('.conteudo-abas')
    conteudo.forEach((content)=>{
         content.classList.add('d-none')
    })
    document.getElementById(`conteudo-${aba}`).classList.remove('d-none')

}



