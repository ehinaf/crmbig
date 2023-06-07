<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan THR</h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
          
            <div class="card-body">
                <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo $jabatan; ?></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo $gaji; ?></td>
        </tr>
        <tr>
            <td>Nilai THR</td>
            <td>:</td>
            <td><?php echo number_format("$nilai_thr", 6, ",", "."); ?> x Gaji</td>
        </tr>
        <tr>
            <td>Tunjangan Hari Raya</td>
            <td>:</td>
            <td> <?php echo "Rp " . number_format("$tunjangan_hari_raya", 2, ",", "."); ?></td>

        </tr>
    </table>
            </div>
        </div>
    </section>
</div>