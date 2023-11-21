<!-- Begin Page Content -->
<br><div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Ubah Data Mahasiswa
            </div><br>

            <div class="card-body">
                <form action="<?= site_url('Mahasiswa/update');?> " method="POST">
                <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" class="form-control" id="nama" placeholder="Nama">

                    </div><br>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" class="form-control" id="nim" placeholder="NIM">

                    </div><br>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" value="<?= $mahasiswa['jenis_kelamin']; ?>"class="form-control" id="jenis_kelamin" class="form-control">
                            <option value="Laki-Laki" <php if ($mahasiswa['jenis_kelamin'] == "Laki-Laki") {
                                echo "selected";
                            }?>>Laki-Laki</option>
                            <option value="Perempuan"<php if ($mahasiswa['jenis_kelamin'] == "Perempuan") {
                                echo "selected";
                            }?>>Perempuan</option>
                        </select>

                    </div><br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?= $mahasiswa['email']; ?>" class="form-control" id="email" placeholder="Email">

                    </div><br>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <select name="prodi" value="<?= $mahasiswa['prodi']; ?>" class="form-control" id="prodi" class="form-control">
                            <option value="prodi">Pilih Prodi</option>
                            <?php foreach ($prodi as $p) : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['prodi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><br>
                    
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>" class="form-control" id="asal_Sekolah" placeholder="Asal Sekolah">

                    </div><br>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" class="form-control" id="no_hp" placeholder="NO HP">

                    </div><br>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat"><br><br>

                    </div>
                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Mahasiswa </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div><br>