<div class="container">
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <h1> Daftar Mahasiswa</h1>
                 <?php foreach ( $data["mhs"] as $mhs ) :?>
                        <ul>
                            <li><?= $mhs["nama"]; ?></li>
                            <li><?= $mhs["nrp"]; ?></li>
                            <li><?= $mhs["email"]; ?></li>
                            <li><?= $mhs["jurusan"]; ?></li>
                        </ul>
                    <?php endforeach; ?>
            </div>
        </div>
</div>