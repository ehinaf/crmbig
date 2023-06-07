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
                <?php echo anchor(site_url('supplier/create'),'Tambah Supplier', 'class="btn btn-primary"'); ?>
            </div>
            <div class="card-body">
               <table class="table table-hover" id="dataTable">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Kode Supplier</th>
                                  <th scope="col">Nama Supplier</th>
                                  <th scope="col">Action</th>
                                </tr>
    
                              </thead>
                              <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($supplier_data as $supplier) : ?>
                                <tr>
                                  <th scope="row"><?= $i; ?></th>
                                  <td><?php echo $supplier->kode_supplier ?></td>
            <td><?php echo $supplier->nama_supplier ?></td>
            <td>
                <?php 
                echo anchor(site_url('supplier/update/'.$supplier->id_supplier),'Update'); 
                echo ' | '; 
                echo anchor(site_url('supplier/delete/'.$supplier->id_supplier),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
