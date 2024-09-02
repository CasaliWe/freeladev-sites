<div class="modal fade" id="modalBanner" tabindex="-1" aria-labelledby="modalBanner" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="pagina-banner"> </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form onsubmit="loading()" action="modulos-admin/contents/banners/php/atualizar-banner.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <!-- ref inserido pelo js -->
            <input type="hidden" name="refBannerDesktop" id="refBannerDesktop">
            <input type="hidden" name="refBannerMobile" id="refBannerMobile">
            <input type="hidden" name="nomeBannerDesktop" id="nomeBannerDesktop">
            <input type="hidden" name="nomeBannerMobile" id="nomeBannerMobile">
            <!-- ref inserido pelo js -->

            <div class="mb-4">
                <label for="desktop-banner">Desktop*</label>
                <input type="file" id="desktop-banner" name="desktop" required class="form-control">
            </div>

            <div class="mb-4">
                <label for="mobile-banner">Mobile*</label>
                <input type="file" id="mobile-banner" name="mobile" required class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Atualizar</button>
          </div>
      </form>
    </div>
  </div>
</div>