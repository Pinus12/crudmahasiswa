<br><div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Tambah Data Prodi
            </div><br>

            <div class="card-body"> 
                <form action="<?= site_url('Prodi/upload/'); ?> " method="POST">
                    <div class="form-group">
                        <label for="nama_prodi">Nama Prodi</label>     
                        <input type="text" name="nama_prodi" class="form-control" id="nama_prodi" placeholder="Nama Prodi">

                    </div><br>
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan">

                    </div><br>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">

                    </div><br>
                    <div class="form-group">
                        <label for="akreditasi">Akreditasi</label>
                        <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="Akreditasi">

                    </div><br>
                    <div class="form-group">
                        <label for="akreditasi">Nama Kaprodi</label>
                        <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                    </div><br>
                    <div class="form-group">
                        <label for="tahun">Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" class="form-control" id="tahun" placeholder="Tahun Berdiri">

                    </div><br>
                    <div class="form-group">
                        <label for="lulusan">Output Lulusan</label>
                        <input type="text" name="output_lulusan" class="form-control" id="lulusan" placeholder="lulusan">

                    </div><br><br>
                    <a href="<?= site_url('mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Prodi</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div><br><br>