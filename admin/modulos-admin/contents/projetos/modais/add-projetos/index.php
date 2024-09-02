<div class="modal fade" id="modal-add-projetos" tabindex="-1" aria-labelledby="modal-add-projetos" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Adicionar novo projeto +</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= $base_url ?>modulos-admin/contents/projetos/php/salvar-projeto.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
          
            <div class='mb-3'>
              <label class="small" for='titulo-projeto'>Título do projeto*</label>
              <input type='text' id='titulo-projeto' name='titulo-projeto' class='form-control' required>
            </div>

            <div class='mb-3'>
              <label class="small" for='descri-projeto'>Descrição do projeto*</label>
              <input type='text' id='descri-projeto' name='descri-projeto' class='form-control' required>
            </div>

            <div class='mb-3'>
              <label class="small" for='link-projeto'>Link do projeto*</label>
              <input type='text' id='link-projeto' name='link-projeto' class='form-control' required>
            </div>

            <div class='mb-3'>
              <label class="small" for='img-projeto'>Imagem do projeto*</label>
              <input type='file' id='img-projeto' name='img-projeto' class='form-control' required>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
      </form>
    </div>
  </div>
</div>