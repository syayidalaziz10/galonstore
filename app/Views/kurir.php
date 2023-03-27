<?= $this->extend('admin-layout/template'); ?>

<?= $this->section('main'); ?>
<!-- Main -->
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="card shadow border-0 mb-7">
            <div class="d-flex justify-content-between align-items-center card-header">
                <h4 class="mb-0">Kurir</h4>
                <a href="/kurir/create" class="btn-sm btn-primary">
                    + Tambah kurir
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-nowrap">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">NO TELPON</th>
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
                                <td>
                                    <?= $no; ?>
                                </td>
                                <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?= $row->nama; ?>
                                    </a>
                                </td>
                                <td>
                                    <?= $row->username; ?>
                                </td>
                                <td>
                                    <?= $row->email; ?>
                                </td>
                                <td>
                                    <?= $row->no_telpon; ?>
                                </td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-neutral">Edit</button>
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