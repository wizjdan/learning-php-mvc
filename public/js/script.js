$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#judulModal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#judulModal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
  });
});
