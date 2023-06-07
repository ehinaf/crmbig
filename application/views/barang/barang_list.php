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
                <?php echo anchor(site_url('barang/create'),'Tambah Barang', 'class="btn btn-primary"'); ?>
            </div>
            <div class="card-body">
               <table class="table table-hover" id="dataTable">
                              <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
    
                              </thead>
                              <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($barang_data as $barang) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?php echo $barang->kode_barang ?></td>
                                    <td><?php echo $barang->nama_barang ?></td>
                                    <td><?php echo $barang->harga ?></td>
                                    <td><?php echo $barang->stok ?></td>
                                    <td>
                                        <?php 
                                        echo anchor(site_url('barang/update/'.$barang->id_barang),'Update'); 
                                        echo ' | '; 
                                        echo anchor(site_url('barang/delete/'.$barang->id_barang),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
