<div class="main-content">
    <div class="section_content section_content--p30">
        <div class="container">
            <hh1 class=" mb-4 text-gray-800">
                </h1>
                <div class="row">
                    <dic class="">
                        <a href="<?= site_url('Prodi/tambah') ?>" class="btn btn-info mx-3 mt-2">Tambah Prodi</a>
                </div><br>
                <div class="card-content bg-white rounded">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Prodi</th>
                                        <th scope="col">Ruangan</th>
                                        <th scope="col">Jurusan</th>
                                        <td scope="col">Akreditasi</td>
                                        <td scope="col">Nama Kaprodi</td>
                                        <td scope="col">Tahun Berdiri</td>
                                        <td scope="col">Output Lulusan</td>
                                        <td scope="col">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($prodi as $us): ?>
                                        <tr>
                                            <th scope="row">
                                                <?= $i; ?>.
                                            </th>
                                            <td>
                                                <?= $us['nama']; ?>
                                            </td>
                                            <td>
                                                <?= $us['ruangan']; ?>
                                            </td>
                                            <td>
                                                <?= $us['jurusan']; ?>
                                            </td>
                                            <td>
                                                <?= $us['akreditasi']; ?>
                                            </td>
                                            <td>
                                                <?= $us['nama_kaprodi']; ?>
                                            </td>
                                            <td>
                                                <?= $us['tahun_berdiri']; ?>
                                            </td>
                                            <td>
                                                <?= $us['output_lulusan']; ?>
                                            </td>
                                            <td>
                                                <a href="<?= site_url('Prodi/hapus/') . $us['id']; ?>  "
                                                    class="btn btn-danger col-lg-5">Hapus</a>
                                                <a href="<?= site_url('Prodi/edit/') . $us['id']; ?>  "
                                                    class="btn btn-warning col-lg-5">Edit</a>
                                            </td>

                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div><br>