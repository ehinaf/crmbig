<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Hitung THR</h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?php echo site_url('Tunjanganhariraya/hitung'); ?>">
        <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><input type="text" name="jabatan" id="jabatan"></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><input type="number" name="gaji" id="gaji"></td>
        </tr>
        <tr>
            <td>Pilihan Masa Kerja</td>
            <td>:</td>
            <td>
            	<select name="pilihan_masakerja" id="pilihan_masakerja">
            <option value="1">1 Bulan</option>
            <option value="2">2 Bulan</option>
            <option value="3">3 Bulan</option>
            <option value="4">4 Bulan</option>
            <option value="5">5 Bulan</option>
            <option value="6">6 Bulan</option>
            <option value="7">7 Bulan</option>
            <option value="8">8 Bulan</option>
            <option value="9">9 Bulan</option>
            <option value="10">10 Bulan</option>
            <option value="11">11 Bulan</option>
            <option value="12">12 Bulan</option>
            <option value="13">> 12 Bulan</option>

        </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Hitung"></td>
        </tr>
        
    </table>
    </form>
            </div>
        </div>
    </section>
</div>

