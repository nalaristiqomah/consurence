<?php include 'header.php'; ?>
<?php mysqli_query($koneksi,"delete from tmp_kecocokan"); ?>

<header id="header" class="ex-header" style="padding-top: 8rem;padding-bottom: 2rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Jenis Produk Asuransi Jiwa</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">

    <div class="card mt-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="25%">Produk Asuransi Jiwa</th>
                        <th>Keterangan</th>                  
                    </tr>
                </thead>
                <tbody>
					<tr>
						<td> <?php echo "1"; ?></td>
						<td><?php echo "Asuransi dengan manfaat bertingkat (Varying benefit insurance)"; ?></td>
						<td><?php echo "Pembayaran manfaat kematian dilakukan hanya jika nasabah meninggal didalam n-tahun masa kepesertaannya sejak memutuskan terdaftar menjadi peserta asuransi. Manfaat kematian yang diterima bertingkat sesuai dengan penyebab risiko terjadi."; ?></td>
                    </tr>
					<tr>
						<td> <?php echo "2"; ?></td>
						<td><?php echo "Asuransi Dwiguna (Endowment Insurance)"; ?></td>
						<td><?php echo "Jenis asuransi ini memberikan suatu jumlah manfaat tertentu baik ketika Tertanggung hidup sampai akhir jangka waktu pertanggungan atau meninggal selama jangka waktu pertanggungan. Setiap polis asuransi jiwa dwiguna memiliki tanggal jatuh tempo (maturity date), yaitu tanggal pembayaran uang pertanggungan oleh perusahaan asuransi kepada pemegang polis jika Tertanggung masih hidup. Tanggal jatuh tempo akan tercapai pada akhir suatu jangka waktu yang telah ditetapkan, atau ketika Tertanggung mencapai usia yang telah ditetapkan."; ?></td>
                    </tr>
					<tr>
						<td> <?php echo "3"; ?></td>
						<td><?php echo "Asuransi tertunda (deffered annuities)"; ?></td>
						<td><?php echo "Manfaat kematian jika nasabah meninggal setelah m-tahun menjadi peserta asuransi. Asuransi dapat diaplikasikan pada: <br>
						1)	Asuransi jiwa seumur hidup (m-year deferred whole life insurance)<br>
						2)	Asuransi jiwa berjangka (m-year deferred n-year term insurance)"; ?></td>
                    </tr>
					<tr>
						<td> <?php echo "4"; ?></td>
						<td><?php echo "Asuransi jiwa seumur hidup dengan manfaat kematian meningkat per tahun (annually increasing whole life insurance)"; ?></td>
						<td><?php echo "Uang pertanggungan ini akan meningkat jumlahnya setiap tahun sesuai dengan yang diperjanjikan pada awal masa asuransi. Peningkatan ini dapat berupa persentasi tertentu misalnya 5% per tahun atau berupa jumlah nilai tertentu misalnya Rp 10.000.000 (sepuluh juta rupiah) per tahun. Premi yang dibayarkan akan meningkat sesuai dengan kenaikan jumlah uang pertanggungan."; ?></td>
                    </tr>
					<tr>
						<td> <?php echo "5"; ?></td>
						<td><?php echo "Asuransi jiwa seumur hidup dengan manfaat kematian menurun per tahun (annually decreasing whole life insurance)"; ?></td>
						<td><?php echo "Asuransi jiwa berjangka dengan uang pertanggungan menurun memberikan manfaat kematian yang nilainya menurun selama jangka waktu pertanggungan. Uang pertanggungan akan besar di awal pertanggungan dan mencapai nol nilainya pada akhir pertanggungan. Pada praktiknya, asuransi jiwa berjangka ini banyak digunakan untuk keperluan yang ada hubungannya dengan produk perbankan, misalnya asuransi jiwa kredit. Uang pertanggungan akan menurun besarnya mengikuti besar sisa pinjaman."; ?></td>
                    </tr>
					<tr>
						<td> <?php echo "6"; ?></td>
						<td><?php echo "Asuransi jiwa berjangka n-tahun (n-year term insurance)"; ?></td>
						<td><?php echo "Seluruh produk asuransi jiwa berjangka memberikan pertanggungan selama satu jangka waktu tertentu yang disebut jangka waktu polis (policy term). Manfaat polis asuransi ini dapat dibayarkan hanya apabila: <br>
						1) Tertanggung meninggal dunia dalam jangka waktu yang telah ditetapkan, dan <br>
						2) polis masih berlaku (in force) ketika Tertanggung meninggal dunia.<br>
						Jika Tertanggung masih hidup sampai berakhirnya jangka waktu yang telah ditetapkan, maka polis
						tersebut akan memberikan hak kepada pemegang polis untuk melanjutkan pertanggungan asuransi
						jiwa. Jika pemegang polis tidak melanjutkan pertanggungan tersebut, maka polis akan berakhir dan
						perusahaan asuransi tidak berkewajiban untuk memberikan pertanggungan selanjutnya."; ?></td>
                    </tr>
					<tr>
						<td> <?php echo "7"; ?></td>
						<td><?php echo "Asuransi jiwa seumur hidup (whole life insurance)"; ?></td>
						<td><?php echo "Asuransi jiwa seumur hidup adalah jenis asuransi yang memberikan perlindungan kepada pesertanya seumur hidup atau maksimal hingga berusia 100 tahun. Penanggung sering mengasumsikan periode asuransi sampai dengan usia 100 tahun. Asumsi 100 tahun ini berdasarkan pada bertambahnya tingkat harapan hidup manusia, di beberapa negara ada yang diasumsikan seumur hidup sampai dengan tertanggung berusia 120 tahun. Dengan memperhatikan jangka waktu pertanggungan asuransi seumur hidup ini maka perusahaan asuransi hampir pasti akan membayar klaim kepada nasabahnya."; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


  


</div>
<br><br>

<?php include 'footer.php'; ?>