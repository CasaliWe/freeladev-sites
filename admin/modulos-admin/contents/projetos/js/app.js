// abrir modal editar projeto
function abrirModalEditar(id, titulo, descri, link, img){
    document.getElementById("id-projeto-editar").value = id;
    document.getElementById("titulo-projeto-editar").value = titulo;
    document.getElementById("descricao-projeto-editar").value = descri;
    document.getElementById("link-projeto-editar").value = link;
    document.getElementById("img-projeto-editar").src = img;

    openModalImagensFull();
}

// abrir modal boostrap
function openModalImagensFull() {
    var meuModal = new bootstrap.Modal(document.getElementById('modal-editar-projetos'));
    meuModal.show();
}