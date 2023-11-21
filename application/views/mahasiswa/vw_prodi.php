<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
            <div class="row">
                <div class="col-md-12"><a href="<?= base_url('index.php/') ?>Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Prodi</td>
                                    <td>Ruangan</td>
                                    <td>Jurusan</td>
                                    <td>Akreditasi</td>
                                    <td>Nama kaprodi</td>
                                    <td>Tahun Berdiri</td>
                                    <td>Output Lulusan</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Teknik Informatika</td>
                                    <td>328</td>
                                    <td>JTI</td>
                                    <td>A</td>
                                    <td>Silvana Rasio Henim</td>
                                    <td>2008</td>
                                    <td>Software Enginner</td>
                                    <td>
                                        <a href="" class="btn btn-danger">Hapus</a>
                                        <a href="" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>