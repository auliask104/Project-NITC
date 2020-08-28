<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form" action="/Register">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input class=" <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" type="text" class="" name="username" id="name" placeholder="Your Username" />
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input class=" <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" type="email" name="email" id="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input class=" <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" type="password" name="password" id="pass" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input class=" <?= ($validation->hasError('re_password')) ? 'is-invalid' : '' ?>" type="password" name="re_password" id="re_pass" placeholder="Repeat your password" />
                        </div>
                        <div class="form-group">
                            <label for="nama_depan"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input class=" <?= ($validation->hasError('nama_depan')) ? 'is-invalid' : '' ?>" type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan" />
                        </div>
                        <div class="form-group">
                            <label for="nama_belakang"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input class=" <?= ($validation->hasError('nama_belakang')) ? 'is-invalid' : '' ?>" type="text" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" />
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" class="form-submit" />
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="<?= base_url('assets/images/signup-image.jpg') ?>" alt="sing up image"></figure>
                    <a href="<?= base_url('/Login') ?> " class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>



</div>
<?= $this->endSection(); ?>