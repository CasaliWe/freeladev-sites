<div class="modal fade" id="modal-editar-projetos" tabindex="-1" aria-labelledby="modal-editar-projetos" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Editar novo projeto +</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= $base_url ?>modulos-admin/contents/projetos/php/editar-projeto.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">

          <input type="hidden" id="id-projeto-editar" name="id-projeto-editar">
          
            <div class='mb-3'>
              <label class="small" for='titulo-projeto-editar'>Título do projeto*</label>
              <input type='text' id='titulo-projeto-editar' name='titulo-projeto-editar' class='form-control' required>
            </div>

            <div class='mb-3'>
              <label class="small" for='descricao-projeto-editar'>Descrição do projeto*</label>
              <input type='text' id='descricao-projeto-editar' name='descricao-projeto-editar' class='form-control' required>
            </div>

            <div class='mb-3'>
              <label class="small" for='link-projeto-editar'>Link do projeto*</label>
              <input type='text' id='link-projeto-editar' name='link-projeto-editar' class='form-control' required>
            </div>

            <div class='mb-3'>
              <label class="small" for='img-projeto-editar'>Imagem do projeto*</label>
              <input type='file' name='img-projeto-editar' class='form-control'>
            </div>

            <div style="width: 100px; height: 60px; overflow: hidden;">
                <img id="img-projeto-editar" class="w-100">
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