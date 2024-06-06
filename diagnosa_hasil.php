<?php include 'header.php'; ?>
<?php
	$jenis_kelamin = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);

	$sakit = filter_input(INPUT_POST, 'sakit', FILTER_SANITIZE_STRING);
?>

<header id="header" class="ex-header" style="padding-top: 8rem;padding-bottom: 2rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Rekomendasi Asuransi Jiwa</h1>
                <p class="text-white">Dengan Menggunakan Metode Forward Chaining</p>
                <div class="form">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-10">
                                <div class="text-container">
										<table class="table table-bordered text-left">
                                                    <tr>
                                                        <th width="30%">Jenis Kelamin</th>
                                                        <td class="text-capitalize">
														<?php
															if ($jenis_kelamin == "1") {
															  echo "Laki-laki";
															} else {
															  echo "Perempuan";
															}
														?> 
														</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Umur</th>
                                                        <td><?php echo $_POST["umur"]; ?></td>
                                                    </tr> 
													<tr>
                                                        <th width="30%">Pendapatan Perbulan (Rp)</th>
                                                        <td><?php echo $_POST["gaji"]; ?></td>
                                                    </tr>
													<tr>
                                                        <th width="30%">Riwayat Penyakit</th>
                                                        <td class="text-capitalize">
														<?php
															if ($sakit == "1") {
															  echo "Ada";
															} else {
															  echo "Tidak Ada";
															}
														?> 
														</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Rekomendasi Asuransi Jiwa</th>
                                                        <td>
                                                             <?php 
                                                                if($_POST["gaji"] < "10000000"){
                                                                    echo "Asuransi jiwa berjangka n-tahun (n-year term insurance)";
                                                                }else{
																	if($_POST["umur"] <= "38" AND $_POST["umur"] >= "29"){
																		 echo "Asuransi dengan manfaat bertingkat (Varying benefit insurance)";
																	}elseif ($_POST["umur"] <= "48" AND $_POST["umur"] >= "39"){
																		 echo "Asuransi Dwiguna (Endowment Insurance)";
																	}elseif ($_POST["umur"] <= "55" AND $_POST["umur"] >= "49"){
																		 echo "Asuransi jiwa seumur hidup (whole life insurance)";
																	}elseif ($_POST["umur"] >= "56" AND $_POST["sakit"]=="1"){
																		 echo "Asuransi jiwa seumur hidup (whole life insurance)";
																	}elseif ($_POST["umur"] >= "56" AND $_POST["sakit"]=="2"){
																		 echo "Asuransi jiwa seumur hidup dengan manfaat kematian menurun per tahun (annually decreasing whole life insurance)";
																	}else{
																		echo "Asuransi yang cocok untuk Anda tidak ditemukan";
																	}
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>  
                                        
                                        </table>

                                    <br>

                                    <center>
                                        <a class="btn btn-info mt-5 w-50" href="diagnosa_mulai.php">CEK LAGI</a>
                                    </center>

                                </div> 
                            </div> 
                        </div> 

                    </div> 
                </div> 

            </div>
        </div>
    </div>
</header>

<?php include 'footer.php'; ?>