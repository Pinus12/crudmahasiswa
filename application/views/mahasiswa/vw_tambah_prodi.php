<div id="layoutSidenav_content">
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Tambah Data Mahasiswa
                    </div>

                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama_prodi">Nama Prodi</label>
                                <input type="text" name="nama_prodi" class="form-control" id="nama_prodi" placeholder="Nama_prodi">
                            </div>
                            <div class="form-group">
                                <label for="ruangan">Ruangan</label>
                                <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="ruangan">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="jurusan">
                            </div>
                            <div class="form-group">
                                <label for="akreditasi">Akreditasi</label>
                                <select name="akreditasi" id="akreditasi" class="form-control">
                                    <option value="">Akreditasi</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kaprodi">Nama Kaprodi</label>
                                <input type="text" name="kaprodi" class="form-control" id="kaprodi"
                                    placeholder="Nama Kaprodi">
                            </div>
                            <div class="form-group">
                                <label for="berdiri">Tahun Berdiri</label>
                                <input type="text" name="berdiri" class="form-control" id="berdiri" placeholder="Tahun Berdiri">
                            </div>
                            <div class="form-group">
                                <label for="output">Output Lulusan</label>
                                <input type="text" name="output" class="form-control" id="output" placeholder="Output Lulusan">
                            </div>
                            <a href="<?= base_url('index.php/') ?>Prodi/" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                Prodi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>