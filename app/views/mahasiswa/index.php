<div class="container">
    <h1>Mahasiswa Page</h1>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                 <?php foreach ($data["mhs"] as $mhs) :?>
                        <ul>
                            <li><?= $mhs["nama"]; ?></li>
                            <li><?= $mhs["nrp"]; ?></li>
                            <li><?= $mhs["email"]; ?></li>
                            <li><?= $mhs["jurusan"]; ?></li>
                        </ul>
                <?php endforeach ?>
            </div>
        </div>
</div>