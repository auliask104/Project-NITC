<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div class="section-padding bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 border p-4 bg-white offset-lg-3">
                        <h2 class="contact-title">Edit Profile</h2>
                        <?php if (session()->getFLashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFLashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST" action="/Profile">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input name="username" type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" value="<?= (old('username')) ? old('username') : $user['username'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" value="<?= (old('email')) ? old('email') : $user['email'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="nama_depan">Nama Depan</label>
                                    <input name="nama_depan" type="text" class="form-control <?= ($validation->hasError('nama_depan')) ? 'is-invalid' : ''; ?>" id="nama_depan" value="<?= (old('nama_depan')) ? old('nama_depan') : $user['nama_depan'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_depan'); ?>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="nama_belakang">Nama Belakang</label>
                                    <input name="nama_belakang" type="text" class="form-control <?= ($validation->hasError('nama_belakang')) ? 'is-invalid' : ''; ?>" id="nama_belakang" value="<?= (old('nama_belakang')) ? old('nama_belakang') : $user['nama_belakang'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_belakang'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php if (session('role') == 'penjual') : ?>
                                <div class="form-group">
                                    <label for="deskripsi_diri">Deskripsi Diri</label>
                                    <textarea class="form-control" name="deskripsi_diri" id="deskripsi_diri" rows="3"> <?= (old('deskripsi_diri')) ? old('deskripsi_diri') : $user['deskripsi_diri'] ?> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="no_rekening">no_rekening</label>
                                    <input name="no_rekening" type="text" class="form-control <?= ($validation->hasError('no_rekening')) ? 'is-invalid' : ''; ?>" id="no_rekening" value="<?= (old('no_rekening')) ? old('no_rekening') : $user['no_rekening'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('no_rekening'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <button type="submit" class="btn header-btn">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?= $this->endSection(); ?>