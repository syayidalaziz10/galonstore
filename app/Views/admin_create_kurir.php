<?= $this->extend('admin-layout/template'); ?>

<?= $this->section('main'); ?>
<!-- Main -->
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="card shadow border-0 mb-7">
            <div class="d-flex justify-content-between align-items-center card-header">
                <h4 class="mb-0">Tambah Kurir Baru</h4>
            </div>
            <div class="p-6 text-sm" style="width: 50%;">
                <form method="POST" action="">
                    <div class="row mb-5">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" id="nama" name="nama" value="<?= set_value('nama'); ?>" class="form-control text-sm b <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                    </div>
                    <div class=" row mb-5">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" id="username" name="username" value="<?= set_value('username'); ?>" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label for="no_telpon" class="col-sm-2 col-form-label">No. Telpon</label>
                        <div class="col-sm-10">
                            <input type="text" id="no_telpon" name="no_telpon" value="<?= set_value('no_telpon'); ?>" class="form-control <?= ($validation->hasError('no_telpon')) ? 'is-invalid' : ''; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('no_telpon'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" value="<?= set_value('email'); ?>" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn-sm btn-primary text-sm">Tambah Kurir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>