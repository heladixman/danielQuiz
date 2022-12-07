<main id="main" class="main">
    <div class="container-xxl flex-grow-1 container-p-y">
    <div class="content-wrapper">
        <section class="content-header mb-3 mt-3">
            <div class="row">
            <div class="col-sm-10 col-8">
                <h3 class=mb-0><?= $breadcrumbs ?></h3>
            </div>
            <div class="col-sm-2 col-4">
            <button type="button" class="btn btn-sm btn-primary w-100 h-100" data-bs-toggle="modal" data-bs-target="#ModalNewParkir"><i class="fas fa-plus-circle"></i>Tambah Data Parkir</button>
            </div>
            </div>
        </div>
        </section>
        <section class="content mt-3">
        <div class="card">
            <div class="card-body"> 
            <div class="table-responsive text-nowrap">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Kendaraan</th>
                        <th>Plat Kendaraan</th>
                        <th>Waktu Masuk</th>
                        <th>Waktu Keluar</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no = 1;
                    foreach($parkir as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data->namaKendaraan ?></td>
                        <td><?= $data->platKendaraan ?></td>
                        <td><?= $data->waktuMasuk ?></td>
                        <td><?= $data->waktuKeluar ?></td>
                        <td>
                              <button type="button" class='btn btn-icon btn-success updateParkir' id="editJurusan" data-id="<?= $data->idKendaraan?>" data-name="<?= $data->namaKendaraan?>">
                                <i class="bx bx-edit-alt"></i>
                              </button>
                              <button type="button" class="btn btn-icon btn-outline-danger hapusParkir" data-id="<?= $data->idKendaraan?>">
                                <i class="bx bx-trash"></i>
                              </button>
                        </td>                             
                    </tr>
                  <?php } ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        </section>
    </div>
    <?php 
      echo view('components/modals/newData.php');
      echo view('components/modals/updateData.php');
      echo view('components/modals/deleteData.php');
    ?>
</main>