<?= $this->extend('admin-layout/template'); ?>

<?= $this->section('main'); ?>
<!-- Main -->
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="card shadow border-0 mb-7">
            <div class="card-header">
                <h5 class="mb-0">Produk</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-nowrap">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA PRODUK</th>
                            <th scope="col">STOK</th>
                            <th scope="col">HARGA</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($tampildata as $row) :
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?= $row->nama_produk ?>
                                    </a>
                                </td>
                                <td>
                                    <?= $row->stok ?>
                                </td>
                                <td>
                                    <?= $row->harga ?>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php
                        endforeach
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</main>
<?= $this->endSection(); ?>