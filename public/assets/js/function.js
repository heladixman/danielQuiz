$(document).ready(function(){
    // delete button function
    $('.hapusKendaraan').on('click', function(){
      var id = $(this).data('id');
      console.log(id)
      $('.idKendaraan').val(id);
      $('#ModalDeleteKendaraan').modal('show');
    });

    // $('.hapusMhs').on('click', function(){
    //   const id = $(this).data('id');
    //   console.log(id)
    //   $('.idMahasiswa').val(id);
    //   $('#ModalDeleteMahasiswa').modal('show');
    // });

    // edit without set editModel
    $('.updateKendaraan').on('click', function(){
      var Kid = $(this).data('id')
      var Kendaraan = $(this).data('name');
      console.log(Kid);
      $('.idKendaraan').val(Kid);
      $('#kendaraanName').val(Kendaraan);
      $('#ModalUpdateKendaraan').modal('show');
    });
  });