<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM arsip WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Ruang Arsip</td> <td><?= $data['ruang_arsip'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Rak/Lemari</td> <td><?= $data['no_rak'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Tingkat/Laci</td> <td><?= $data['no_laci'] ?></td>
                        </tr>
						<tr>
                            <td>Nomor Boks</td> <td><?= $data['no_boks'] ?></td>
                        </tr>
                        <tr>
                            <td>Para Pihak</td> <td><?= $data['para_pihak'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Perkara</td> <td><?= $data['no_perkara'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Staff Pengantar Berkas</td> <td><?= $data['pemberi'] ?></td>
                        </tr>
						<tr>
                            <td>Staff Penerima Berkas</td> <td><?= $data['penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Arsip </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

