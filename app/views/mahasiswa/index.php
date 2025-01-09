<div class="container">
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
                </button>
                <h3> Daftar Mahasiswa</h3>
                <ul class="list-group">
                     <?php foreach ( $data["mhs"] as $mhs ) :?>
                            <li class="list-group-item">
                                <?= $mhs["nama"]; ?>
                                <a href="<?= BASEURL; ?>/detail/<?= $mhs["id"]; ?>" class="badge text-bg-primary d-flex justify-content-between align-items-start">detail</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
            </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>