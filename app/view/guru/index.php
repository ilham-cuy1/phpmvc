
<div class="container mt-5">
      <div class="row">
        <div class="col-6">
              <?php Flasher::flash2(); ?>
                <button type="button" class="btn btn-primary mb-3 tombolTambahDataGuru" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Guru</button>
                <h3>Data Guru</h3>
                    <ul class="list-group">
                        <?php foreach ($data['guru'] as $guru) : ?>
                        <li class="list-group-item">
                            <?php echo $guru['nama']; ?>
                            <a href="<?= BASE_URL; ?>/guru/hapus/<?= $guru['id']; ?>" class="btn btn-danger btn-sm float-end m-1" onclick="return confirm('Yakin Ingin Menghapus?');">Hapus</a>
                            <a href="<?= BASE_URL; ?>/guru/ubah/<?= $guru['id']; ?>" class="btn btn-success btn-sm float-end m-1 tampilModalUbahGuru" data-bs-toggle="modal"
                            data-bs-target="#formModal" data-id="<?= $guru['id'] ?>">Ubah</a>
                            <a href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>"
                            class="btn btn-primary btn-sm float-end m-1">Detail</a>
                        </li>
                        <!-- <li><?php echo $siswa['nama']; ?></li>
                        <li><?php echo $siswa['jenis_kelamin']; ?></li>
                        <li><?php echo $siswa['alamat']; ?></li> -->
                        <?php endforeach; ?>
                    </ul>
            </div>
        </div>
    </div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabelGuru">Tambah Data Guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASE_URL; ?>/guru/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama" class="mb-1 ms-1">Nama</label>
                <input type="text" class="form-control" id="nama_guru" name="nama">
            </div>
            <div class="form-group">
                <label for="mata_pelajaran" class="mt-2 mb-1 ms-1">Mata Pelajaran</label>
                <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>
  </div>
</div>

<footer style="background-color: #176B87;" class="text-white mt-5">
      <div class="container">
        <div class="row text-start text-md-left">
            <div class="col-md-8 mt-3">
                <span><h5 class="text-uppercase mb-4">Kontak</h5></span>
                <p>
                  <a href="" style="text-decoration: none;" class="text-white">SMK NEGERI 2 TRENGGALEK <br>
                        Alamat: Jl. Ronggowarsito Gg sidomukti No. 1 , Trenggalek, Jawa Timur, Indonesia <br>
                        Telepon / fax: +62-0355-7980148 <br>
                        Email: smkduatrenggalek@yahoo.co.id <br>
                        Web: www.smkn2trenggalek.sch.id <br>
                        Administrator: smkduatrenggalek@yahoo.co.id </a>
                </p>
            </div>
            <div class="col mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1598.4203974841898!2d111.71319768686384!3d-8.055866556542526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791b2b0606b7a5%3A0x4a928b26bb669a9b!2sSMKN%202%20Trenggalek!5e0!3m2!1sid!2sid!4v1690284186013!5m2!1sid!2sid" width="400" height="230" style="border:0;"></iframe>
            </div>
            <hr class="mt-3">
            <div class="col-md-4 mt-3 mb-3 ms-auto me-auto">
                <p>Copyright &copy; <?php echo Date('Y') ?> SMKN 2 Trenggalek</p>
            </div>
        </div>
      </div>
    </footer>