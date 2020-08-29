<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div class="section-padding bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 border p-4 bg-white offset-lg-3">
                        <h2 class="contact-title">Register Pembeli</h2>
                        <form method="POST" action="/RegisterPembeli">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input name="username" type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" value="<?= old('username') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" value="<?= old('email') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password1">Password</label>
                                <input name="password1" type="password" class="form-control <?= ($validation->hasError('password1')) ? 'is-invalid' : ''; ?>" id="password1">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password1'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password2">Ulangi Password</label>
                                <input name="password2" type="password" class="form-control <?= ($validation->hasError('password2')) ? 'is-invalid' : ''; ?>" id="password2">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password2'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="nama_depan">Nama Depan</label>
                                    <input name="nama_depan" type="text" class="form-control <?= ($validation->hasError('nama_depan')) ? 'is-invalid' : ''; ?>" id="nama_depan" value="<?= old('nama_depan') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_depan'); ?>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="nama_belakang">Nama Belakang</label>
                                    <input name="nama_belakang" type="text" class="form-control <?= ($validation->hasError('nama_belakang')) ? 'is-invalid' : ''; ?>" id="nama_belakang" value="<?= old('nama_belakang') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_belakang'); ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn header-btn">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?= $this->endSection(); ?>