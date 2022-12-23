$(document).ready(function(){
    // delete button function
    $('.hapusKendaraan').on('click', function(){
      var id = $(this).data('id');
      console.log(id)
      $('.idKendaraan').val(id);
      $('#ModalDeleteKendaraan').modal('show');
    });

    $('.hapusParkir').on('click', function(){
      const Pid = $(this).data('id');
      console.log(Pid)
      $('.idParkir').val(Pid);
      $('#ModalDeleteParkir').modal('show');
    });

    // edit without set editModel
    $('.updateKendaraan').on('click', function(){
      var Kid = $(this).data('id')
      var Kendaraan = $(this).data('name');
      console.log(Kid);
      $('.idKendaraan').val(Kid);
      $('#kendaraanName').val(Kendaraan);
      $('#ModalUpdateKendaraan').modal('show');
    });

    $('.updateParkir').on('click', function(){
      var Bid = $(this).data('id')
      var tipeK = $(this).data('kendaraan')
      var platNumber = $(this).data('plat')
      console.log(tipeK);
      $('.idKendaraan').val(Bid);
      $('#platNumber').val(platNumber);
      $('#ModalUpdateParkir').modal('show');
    });

  });