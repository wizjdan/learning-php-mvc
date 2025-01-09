<div class="container">
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <h1> Daftar Mahasiswa</h1>
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