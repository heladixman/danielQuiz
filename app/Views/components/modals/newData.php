  <!-- New Kendaraan Modal --> 
  <div class="modal fade" id="ModalNewKendaraan" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah Jurusan" aria-hidden="true">
    <form action="<?= base_url()?>/kendaraan/newKendaraan" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Tipe Kendaraan Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="d-flex col mb-3">
                  <label for="kendaraan" class="form-label w-25 align-self-center">Kendaraan</label>
                  <input type="text" id="namaKendaraan" class="form-control w-85" name="namaKendaraan" placeholder="Masukan tipe kendaraan...">
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- New Mahasiswa Modal --> 
  <div class="modal fade" id="ModalNewParkir" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah Jurusan" aria-hidden="true">
    <form action="<?= base_url()?>/parkir/newParkir" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Mahasiswa Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <div class="d-flex justify-content-between mb-3">
                    <label for="tipeKendaraan" class="form-label align-self-center mb-0 w-25">Tipe Kendaraan</label>
                    <select name="tipeKendaraan" id="tipeKendaraan" class="form-select w-75" required>
                    <?php 
                    foreach($kendaraan as $data){
                    ?>
                    <option value="<?= $data->idKendaraan?>"><?= $data->namaKendaraan ?></option>
                    <?php }?>
                    </select>
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="platKendaraan" class="form-label align-self-center mb-0 w-25">Plat Kendaraan</label>
                    <input type="text" id="platKendaraan" class="form-control w-75" name="platKendaraan" placeholder="Masukan nama mahasiswa...">
                  </div>
                  <!-- <div class="d-flex justify-content-between mb-3">
                    <label for="jurusan" class="form-label align-self-center mb-0 w-25">Waktu Keluar</label>
                    <input type="text" id="alamat" class="form-control w-75" name="alamat" placeholder="Masukan nama mahasiswa...">
                  </div> -->
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
    </form>
  </div>