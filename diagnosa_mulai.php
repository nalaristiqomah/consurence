<?php include 'header.php'; ?>

<header id="header" class="ex-header" style="padding-top: 8rem;padding-bottom: 2rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form">
                    <div class="container">
                        <p class="text-white">Jawab pertanyaan berikut sesuai dengan data diri Anda.</p>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-container">

                                   <?php
									echo 
									
									'
									<form method="POST" action="diagnosa_hasil.php">
									
									<div class="input-group mb-3">
									  <div class="input-group-prepend" required>
										<label class="input-group-text" for="jenis_kelamin" >Jenis Kelamin</label>
									  </div>
									  <select class="custom-select" name="jenis_kelamin" id="jenis_kelamin" required>
										<option value="">Pilih Salah Satu</option>
										<option value="1">Laki-laki</option>
										<option value="2">Perempuan</option>
									  </select>
									</div>
									
									<div class="form-group">
                                            <input class="form-control-input" autocomplete="off" type="number" name="umur" required>
                                            <label class="label-control" for="nemail">Umur (tahun)</label>
                                            <div class="help-block with-errors"></div>
                                    </div>
									
									<div class="form-group">
                                            <input class="form-control-input" autocomplete="off" type="number" name="gaji" required>
                                            <label class="label-control" for="nemail">Pendapatan per bulan (Rp)</label>
                                            <div class="help-block with-errors"></div>
                                    </div>
									
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
										<label class="input-group-text" for="sakit">Riwayat Penyakit</label>
									  </div>
									  <select class="custom-select" name="sakit" id="sakit" required>
										<option value="">Pilih Salah Satu</option>
										<option value="1">Ada</option>
										<option value="2">Tidak Ada</option>
									  </select>
									</div>
									
									<div class="form-group">
                                            <button type="submit" class="form-control-submit-button">SIMPAN</button>
                                    </div>
										
									</form>';
								   ?>






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