<div class="container-fluid">
    <div class="row">
        <!-- Bagian kiri: Form Login -->
        <div class="col-lg-6 d-flex align-items-center">
            <div class="login-form mx-auto">
                <h2 class="mb-4 text-center sign-in-text">Sign In</h2>
                <p class="mb-3 text-center department-text">DINAS PERTANAHAN KABUPATEN MOROWALI</p>

                <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>') ?>

                <?= $this->session->flashdata('msg'); ?>

                <?= form_open('Auth/LoginController', 'class="user"'); ?>
                <div class="form-group">
                    <div class="mb-3 email-text">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="mb-3 password-text">
                        <label for "password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" style="width: 188px;">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian kanan: Gambar Penuh -->
        <div class="col-lg-6 full-image d-none d-lg-block"></div>
    </div>
</div>
