<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>



<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style=" height: 50%; background-image: url('assets/img/bitcoin.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark  border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">
                                    <link rel="stylesheet" type="image/png" href="<?= base_url(); ?>/assets/img/logo.png"> Sign In
                                </h4>

                            </div>
                        </div>

                        <div class="card-body">
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <form role="form" class="text-start" action="<?= route_to('login') ?>" method="post">
                                <?= csrf_field() ?> <?php if ($config->validFields === ['email']) : ?>
                                <?php else : ?>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> autocomplete="off">
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>

                                <?php endif; ?>

                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>>
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>

                                <?php if ($config->allowRemembering) : ?>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                                        <?= lang('Auth.rememberMe') ?>
                                    </div>
                                <?php endif; ?>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2"> <?= lang('Auth.loginAction') ?> <i class="fa-solid fa-right-to-bracket"></i></button>
                                </div>
                                <?php if ($config->allowRegistration) : ?>
                                    <p class="mt-4 text-sm text-center">
                                        Don't have an account?
                                        <a href="<?= route_to('register') ?>" class="text-success text-gradient font-weight-bold">Sign up</a>
                                    </p>
                                <?php endif; ?>
                                <?php if ($config->allowRegistration) : ?>
                                    <p class="mt-4 text-sm text-center">
                                        forgot password?
                                        <a href="<?= route_to('forgot') ?>" class="text-success text-gradient font-weight-bold">click here</a>
                                    </p>
                                <?php endif; ?>
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