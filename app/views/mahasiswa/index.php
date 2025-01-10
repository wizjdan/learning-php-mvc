<div class="container">
    <div class="container mt-4">

    <div class="row">
      <div class="col-lg-6">
        <?= Flasher::flash() ?>

      </div>
    </div>

        <div class="row">
            <div class="col-lg-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
                </button>
                <h3> Daftar Mahasiswa</h3>
                <ul class="list-group">
                     <?php foreach ( $data["mhs"] as $mhs ) :?>
                            <li class="list-group-item">
                                <?= $mhs["nama"]; ?>
                                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"]; ?>" class="badge text-bg-danger d-flex justify-content-between align-items-end ml-1" onclick="return confirm("Yakin?");">hapus</a>
                                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs["id"]; ?>" class="badge text-bg-success d-flex justify-content-between align-items-end ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-di=""<?= $mhs["id"]; ?>>ubah</a>
                                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge text-bg-primary d-flex justify-content-between align-items-end ml-1">detail</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
            </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="number" class="form-control" id="nrp" name="nrp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <select class="form-select" aria-label="jurusan" id="jurusan" name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatik</option>
                    <option value="Teknik Mikrobiologi">Teknik Mikrobiologi</option>
                    <option value="Teknik Pangan">Teknik Pangan</option>
                </select>

          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>