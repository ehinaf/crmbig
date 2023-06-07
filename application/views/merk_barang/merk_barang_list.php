<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $title; ?></h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <?php echo anchor(site_url('merk_barang/create'),'Tambah Merk Barang', 'class="btn btn-primary"'); ?>
            </div>
            <div class="card-body">
               <table class="table table-hover" id="dataTable">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Merk Barang</th>
                                  <th scope="col">Action</th>
                                </tr>
    
                              </thead>
                              <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($merk_barang_data as $merk_barang) : ?>
                                <tr>
                                  <th scope="row"><?= $i; ?></th>
                                  <td><?php echo $merk_barang->merk_barang ?></td>
            <td>
                <?php 
                echo anchor(site_url('merk_barang/update/'.$merk_barang->id_merk),'Update'); 
                echo ' | '; 
                echo anchor(site_url('merk_barang/delete/'.$merk_barang->id_merk),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
            </div>
        </div>
    </section>
</div>
