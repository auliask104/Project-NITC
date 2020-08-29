<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div class="section-padding bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 border p-4 bg-white">
                        <h2 class="contact-title">Login</h2>
                        <?php if (session()->getFLashdata('error')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFLashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST" action="/Login">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input name="username" type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn header-btn">Masuk</button>
                        </form>
                    </div>
                    <div class="col-lg-5 border p-4 bg-white offset-lg-1">
                        <h2 class="contact-title">Register</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto nesciunt delectus obcaecati blanditiis eligendi ut exercitationem sequi provident alias nemo voluptatum illo odio eum, ex sapiente fugiat enim, corporis porro.</p>
                        <div class="d-inline">
                            <a href="/RegisterPembeli" class="button button-contactForm boxed-btn">Pembeli</a>
                            <a href="/RegisterPenjual" class="button button-contactForm boxed-btn">Penjual</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?= $this->endSection(); ?>