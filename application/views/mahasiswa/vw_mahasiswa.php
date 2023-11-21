
 <div class="main-content">
 	<div class="section_content section_content--p30">
 		<div class="container-fluid">
 			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
 			<div class="row">
 				<div class="col-md-12"><a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-info mb-2 mx-5">Tambah Mahasiswa</a></div>
 				<div class="card mx-5">
 					<div class="card-content ">
 						<div class="card-body">
 							<div class="col-md-12">
							 <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Nim</td>
                                    <td>Email</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pinus Hendrawan</td>
                                    <td>2255301143</td>
                                    <td>pinus22ti@mahasiswa.pcr.ac.id</td>
                                    <td>
                                        <a href="" class="btn btn-danger">Hapus</a>
                                        <a href="" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('index.php/') ?>Mahasiswa/detail" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
 							</div>
 						</div>
 					</div>
 				</div>

 			</div>
 		</div>
 	</div>
 </div>
 <!-- END MAIN CONTENT-->
 <!-- END PAGE CONTAINER-->
</div>