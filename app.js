const baseUrl = 'http://localhost/freeladev'



//MASCARA INPUT TEL
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



//-----------------FAZER CONTAGEM DE VISITA---------------
async function contagemVisita(){
    const response = await fetch(`${baseUrl}/admin/api/contagem-visita.php`)
    const data = await response.json()
}
contagemVisita();







//------------REMOVER LOADER O MOSTRAR CONTENT APÓS INSERIR TODOS OS DADOS------------------
async function inserirDados(){

    const resInfos = await fetch(`${baseUrl}/admin/api/buscar-dados.php`)
    const infos = await resInfos.json()

    var numeroWpp = infos.contatos.wpp_principal
    let numerosApenas = numeroWpp.replace(/\D/g, '');
    var whatsappContato = `https://wa.me/55${numerosApenas}`

    //Inserindo
    document.getElementById("link-btn-wpp-float").href = whatsappContato
    document.getElementById("btn-ir-para-wpp").setAttribute("onclick", `window.location.href="${whatsappContato}"`)
    document.getElementById("btn-wpp-posicionar").setAttribute("onclick", `window.location.href="${whatsappContato}"`)
    document.getElementById("btn-solicite-orcamento").setAttribute("onclick", `window.location.href="${whatsappContato}"`)
    document.getElementById("btn-ver-insta").href = infos.contatos.instagram
    document.getElementById("cidade-contato").textContent = infos.endereco.cidade
    document.getElementById("estado-contato").textContent = infos.endereco.estado
    document.getElementById("email-contato").textContent = infos.contatos.email_site
    document.getElementById("email-contato").href = `mailto:${infos.contatos.email_site}`
    document.getElementById("whatsapp-contato").href = whatsappContato
    document.getElementById("instagram-contato").href = infos.contatos.instagram
    document.getElementById("linkedin-contato").href = infos.contatos.linkedin
    document.getElementById("facebook-contato").href = infos.contatos.facebook


    var pai = document.getElementById('container-projetos')
    infos.projetos.forEach((projeto, i)=>{

        if (i % 2 === 0) {

            pai.innerHTML += `
                <div data-aos="fade-down" class="col-12 d-flex flex-column flex-lg-row justify-content-around mb-5">
                    <div id="container-imagem"><img src="${baseUrl}/admin/assets/imagens/arquivos/projetos/${projeto.imagem}" class="shadow-lg border rounded"></div>
                    <div class="descri-exemplos1">
                        <h3>${projeto.titulo}</h3>

                        <p>${projeto.descricao}</p>

                        <button class="px-5 py-2" onclick="window.location.href='${projeto.link}'">Ver site</button>
                    </div>
                </div>
            `
            
        } else {

            pai.innerHTML += `
                <div data-aos="fade-down" class="col-12 d-flex flex-column flex-lg-row justify-content-around mb-5">
                    <div id="container-imagem" class="d-block d-lg-none"><img src="${baseUrl}/admin/assets/imagens/arquivos/projetos/${projeto.imagem}" class="shadow-lg border rounded"></div>
                    <div class="descri-exemplos2">
                        <h3>${projeto.titulo}</h3>

                        <p>${projeto.descricao}</p>

                        <button class="px-5 py-2" onclick="window.location.href='${projeto.link}'">Ver site</button>
                    </div>
                    <div id="container-imagem" class="d-none d-lg-block"><img src="${baseUrl}/admin/assets/imagens/arquivos/projetos/${projeto.imagem}" class="shadow-lg border rounded"></div>
                </div>
            `
            
        }
           
    })
 

    document.getElementById("loader").classList.remove('d-flex')
    document.getElementById("loader").classList.add('d-none')
    document.getElementById("all-content").classList.remove('d-none')

}
inserirDados();