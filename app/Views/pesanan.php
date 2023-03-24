<?= $this->extend('admin-layout/template'); ?>

<?= $this->section('main'); ?>
<!-- Main -->
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="card shadow border-0 mb-7">
            <div class="card-header">
                <h5 class="mb-0">Pengguna</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-nowrap">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">ID PESANAN</th>
                            <th scope="col">TANGGAL PESANAN</th>
                            <th scope="col">TOTAL BIAYA</th>
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
                                        <?= $row->id_pesanan ?>
                                    </a>
                                </td>
                                <td>
                                    <?= $row->tanggal_pesanan ?>
                                </td>
                                <td>
                                    <?= $row->total_biaya ?>
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