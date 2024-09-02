<!-- modal aviso -->
<div class="modal fade" id="modalAviso-success" tabindex="-1" aria-labelledby="modalAviso-success" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content px-3">
                <div class="py-4 modal-header d-flex flex-column">
                    <h6 class="modal-title fs-5 mb-4 text-center" id="exampleModalLabel">Sua atualização foi feita <br> com sucesso! <i class="ms-2 fas fa-check-square text-success"></i></h6>
                    <button onclick="reescreverRota('success')" type="button" class="w-25 btn btn-success" data-bs-dismiss="modal" aria-label="Close"> Fechar </button>
                </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAviso-error" tabindex="-1" aria-labelledby="modalAviso-error" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content px-3">
                <div class="py-4 modal-header d-flex flex-column">
                    <h6 class="modal-title fs-5 mb-4 text-center" id="exampleModalLabel">Falha no processo, por favor <br> tente novamente! <i class="ms-2 fas fa-exclamation-triangle text-danger"></i> </h6>
                    <button onclick="reescreverRota('error')" type="button" class="w-25 btn btn-danger" data-bs-dismiss="modal" aria-label="Close"> Fechar </button>
                </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAviso-create" tabindex="-1" aria-labelledby="modalAviso-create" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content px-3">
                <div class="py-4 modal-header d-flex flex-column">
                    <h6 class="modal-title fs-5 mb-4 text-center" id="exampleModalLabel">Criado com sucesso! <i class="ms-2 fas fa-check text-success"></i> </h6>
                    <button onclick="reescreverRota('create')" type="button" class="w-25 btn btn-success" data-bs-dismiss="modal" aria-label="Close"> Fechar </button>
                </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAviso-limite" tabindex="-1" aria-labelledby="modalAviso-limite" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content px-3">
                <div class="py-4 modal-header d-flex flex-column">
                    <h6 class="modal-title fs-5 mb-4 text-center" id="exampleModalLabel">Limite máximo de links atingido! <i class="ms-2 fas fa-exclamation-triangle text-danger"></i> </h6>
                    <button onclick="reescreverRota('limite')" type="button" class="w-25 btn btn-danger" data-bs-dismiss="modal" aria-label="Close"> Fechar </button>
                </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAviso-delete" tabindex="-1" aria-labelledby="modalAviso-delete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content px-3">
                <div class="py-4 modal-header d-flex flex-column">
                    <h6 class="modal-title fs-5 mb-4 text-center" id="exampleModalLabel">Deletado com sucesso! <i class="ms-2 fas fa-check text-success"></i> </h6>
                    <button onclick="reescreverRota('delete')" type="button" class="w-25 btn btn-success" data-bs-dismiss="modal" aria-label="Close"> Fechar </button>
                </div>
        </div>
    </div>
</div>



<script>
    function reescreverRota(param){
        // Obtenha a URL atual
        let url = new URL(window.location.href);

        // Remova o parâmetro "success"
        url.searchParams.delete(param);

        // Atualize a URL sem recarregar a página
        window.history.replaceState(null, '', url);
    }
</script>



<?php if(isset($_GET['success']) && $_GET['success'] == "true"){ ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var modalVaga = new bootstrap.Modal(document.getElementById('modalAviso-success'));
        modalVaga.show();
        });
    </script>
<?php } ?>

<?php if(isset($_GET['error']) && $_GET['error'] == "true"){ ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var modalVaga = new bootstrap.Modal(document.getElementById('modalAviso-error'));
        modalVaga.show();
        });
    </script>
<?php } ?>

<?php if(isset($_GET['create']) && $_GET['create'] == "true"){ ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var modalVaga = new bootstrap.Modal(document.getElementById('modalAviso-create'));
        modalVaga.show();
        });
    </script>
<?php } ?>

<?php if(isset($_GET['limite']) && $_GET['limite'] == "true"){ ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var modalVaga = new bootstrap.Modal(document.getElementById('modalAviso-limite'));
        modalVaga.show();
        });
    </script>
<?php } ?>

<?php if(isset($_GET['delete']) && $_GET['delete'] == "true"){ ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var modalVaga = new bootstrap.Modal(document.getElementById('modalAviso-delete'));
        modalVaga.show();
        });
    </script>
<?php } ?>

<!-- modal aviso -->