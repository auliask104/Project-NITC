<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main> 
    <div class="we-padding">
        <div class="section-padding bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 border p-4 bg-white offset-lg-3">
                        <h2 class="contact-title">Register Pembeli</h2>
                        <form>
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-6">
                                <label for="password1">Password</label>
                                <input type="password" class="form-control <?= ($validation->hasError('password1')) ? 'is-invalid' : ''; ?>" id="password1">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password1'); ?>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="password2">Ulangi Password</label>
                                <input type="password" class="form-control <?= ($validation->hasError('password2')) ? 'is-invalid' : ''; ?>" id="password2">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password2'); ?>
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