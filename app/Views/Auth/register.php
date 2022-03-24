<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>



<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark  border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">
                                    <link rel="stylesheet" type="image/png" href="<?= base_url(); ?>/assets/img/logo.png"> Form Registrasi
                                </h4>

                            </div>
                        </div>

                        <div class="card-body" <?= lang('Auth.register') ?>>
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <!-- menampilkan pesan eror -->


                            <form action="<?= route_to('register') ?>" method="post" class="text-start">
                                <?= csrf_field() ?>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>value="<?= old('username') ?>">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> autocomplete="off" value="<?= old('email') ?>">


                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="pass_confirm" class="form-control" <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> autocomplete="off">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark btn-block"><?= lang('Auth.register') ?></button>
                                    <!-- <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button> -->
                                </div>
                                <p class="mt-4 text-sm text-center"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>" class="text-success text-gradient font-weight-bold"><?= lang('Auth.signIn') ?></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-12 col-md-6 my-auto">
                        <div class="copyright text-center text-sm text-white text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script> My Creative
                            <i class="fa fa-heart" aria-hidden="true"></i> By
                            <a href="https://www.instagram.com/zufieee/" class="font-weight-bold text-white" target="_blank">Zulfiqri</a>

                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>
</main>

<?= $this->endSection(); ?>