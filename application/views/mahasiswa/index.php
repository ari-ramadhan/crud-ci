<div class="row">
    <div class="col-6">
        <a class="btn btn-primary mb-3" href="">Tambah Data Mahasiswa</a>
        <div class="card">
            <div class="card-header">
                Data Mahasiswa Universitas Bumigora
            </div>
            <ul class="list-group list-group-flush">
                <?php foreach ($mahasiswa as $mhs) : ?>
                <li class="list-group-item"><?php echo $mhs['nama'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>