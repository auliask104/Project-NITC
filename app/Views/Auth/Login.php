<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 bg-success text-white my-5 py-5">
            <h2>Login</h2>
            <?php if (session()->getFLashdata('register')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFLashdata('register'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFLashdata('error')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFLashdata('error'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFLashdata('sukses')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFLashdata('sukses'); ?>
                </div>
            <?php endif; ?>
            <form action="/Login" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="Username">Username </label>
                    <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="Username" aria-describedby="UsernameHelp" placeholder="Masukkan Username" name="username" value="<?= old('username') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError("username"); ?>
                    </div>
                </div>
                <div class=" form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" placeholder="Masukkan Password" name="password">
                    <div class="invalid-feedback">
                        <?= $validation->getError("password"); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>