<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM arsip WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_arsip" class="col-sm-3 control-label">Ruang Arsip</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="ruang_arsip" class="form-control">
                                    <option value="Arsip Pidana">Arsip Pidana</option>
                                    <option value="Arsip Perdata">Arsip Perdata</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">Nomor Rak</label>
                            <div class="col-sm-9">
                                <input type="text" name="noRak" value="<?=$data['no_rak']?>"class="form-control" id="inputEmail3" placeholder="Nomor Rak/Lemari">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">Nomor Tingkat/Laci</label>
                            <div class="col-sm-9">
                                <input type="text" name="noLaci" value="<?=$data['no_laci']?>"class="form-control" id="inputEmail3" placeholder="Nomor Tingkat/Laci">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Nomor Boks</label>
                            <div class="col-sm-9">
                                <input type="text" name="noBoks" value="<?=$data['no_boks']?>"class="form-control" id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Para Pihak</label>
                            <div class="col-sm-9">
                                <input type="text" name="para_pihak" value="<?=$data['para_pihak']?>"class="form-control" id="inputEmail3" placeholder="Para Pihak">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="noPerkara" class="col-sm-3 control-label">Nomor Perkara</label>
                            <div class="col-sm-9">
                                <input type="text" name="noPerkara" value="<?=$data['no_perkara']?>"class="form-control" id="inputEmail3" placeholder="Nomor Perkara" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           

                        <div class="form-group">
                            <label for="pemberi" class="col-sm-3 control-label">Pengantar Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="pemberi" value="<?=$data['pemberi']?>" class="form-control" id="inputPassword3" placeholder="Pengantar Berkas">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" value="<?=$data['penerima']?>" class="form-control" id="inputPassword3" placeholder="Penerima Berkas">
                            </div>
                        </div>
                        <!--Status-->
                        
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Dipinjam">Dipinjam</option>
									<option value="Penghapusan">Penghapusan</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $ruang_arsip=$_POST['ruang_arsip'];
    $noRak=$_POST['noRak'];
	$noLaci=$_POST['noLaci'];
    $noBoks=$_POST['noBoks'];
	$para_pihak=$_POST['para_pihak'];
    $noPerkara=$_POST['noPerkara'];
    $tglmasuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $pengantar=$_POST['pemberi'];
	$penerima=$_POST['penerima'];
    $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE arsip SET ruang_arsip='$ruang_arsip',no_rak='$noRak',no_laci='$noLaci',no_boks='$noBoks',para_pihak='$para_pihak',
	no_perkara='$noPerkara',tgl_masuk='$tglmasuk',penerima='$penerima',pemberi='$pengantar',status='$status',keterangan='$ket' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



