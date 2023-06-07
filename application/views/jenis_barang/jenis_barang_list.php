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
                <?php echo anchor(site_url('jenis_barang/create'),'Tambah Jenis Barang', 'class="btn btn-primary"'); ?>
            </div>
            <div class="card-body">
               <table class="table table-hover" id="dataTable">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Jenis Barang</th>
                                  <th scope="col">Action</th>
                                </tr>
    
                              </thead>
                              <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($jenis_barang_data as $jenis_barang) : ?>
                                <tr>
                                  <th scope="row"><?= $i; ?></th>
                                  <td><?php echo $jenis_barang->jenis_barang ?></td>
                                  <td><?php 
                echo anchor(site_url('jenis_barang/update/'.$jenis_barang->id_jenis),'Update'); 
                echo ' | '; 
                echo anchor(site_url('jenis_barang/delete/'.$jenis_barang->id_jenis),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?></td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
            </div>
        </div>
    </section>
</div>
