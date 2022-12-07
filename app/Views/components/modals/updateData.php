<!-- Update Kendaraan Modal -->
<div class="modal fade" id="ModalUpdateKendaraan" tabindex="-1" role="dialog" aria-labelledby="Modal Register Pasien" aria-hidden="true">
    <form action="<?= base_url()?>/kendaraan/updateKendaraan" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalUpdate">Edit Jurusan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="kendaraan" class="form-label">kendaraan</label>
                  <input type="hidden" name="idKendaraan" class="idKendaraan">
                  <input type="text" id="kendaraanName" class="form-control" name="kendaraanName" placeholder="Ubah nama jurusan">
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </div>
      </div>
    </form>
  </div>