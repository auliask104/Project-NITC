<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="<?= base_url('assets/images/signin-image.jpg') ?>" alt="sing up image"></figure>
                    <a href="<?= base_url('/Register') ?>" class="signup-image-link">Membuat Akun Baru</a>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <?php if (session()->getFLashdata('login')) : ?>
                        <div class="alert alert-warning" role="alert">
                            <?= session()->getFLashdata('login'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFLashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFLashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" class="register-form" id="login-form" action="/Login">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="your_name" placeholder="Username" value="<?= old('username') ?>" />
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="Password" />
                        </div>
                        <div class="form-group form-button mt-4">
                            <input type="submit" class="form-submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>