<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 bg-primary my-5 text-white py-5">
            <h2>Registrasi</h2>
            <form action="Register" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="Username" aria-describedby="UsernameHelp" placeholder="Masukkan Username" name="username" autofocus value="<?= old('username') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError("username"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" placeholder="Masukkan Email" name="email" value="<?= old('email') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError("email"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" placeholder="Masukkan Password" name="password">
                    <div class="invalid-feedback">
                        <?= $validation->getError("password"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_depan">Nama Depan</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_depan')) ? 'is-invalid' : '' ?>" id="nama_depan" placeholder="Masukkan Nama Depan" name="nama_depan" value="<?= old('nama_depan') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError("nama_depan"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_belakang">Nama Belakang</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_belakang')) ? 'is-invalid' : '' ?>" id="nama_belakang" placeholder="Masukkan Nama Belakang" name="nama_belakang" value="<?= old('nama_belakang') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError("nama_belakang"); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>