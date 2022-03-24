<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>



<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style=" height: 50%; background-image: url('assets/img/bitcoin.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">

                        <div class="card-body">
                            <p class="mt-4 text-sm text-center"> Enter your email below and we will send instructions to reset your password.
                                <?= view('Myth\Auth\Views\_message_block') ?>
                            <form role="form" class="text-start" action="<?= route_to('login') ?>" method="post">
                                <?= csrf_field() ?> <?php if ($config->validFields === ['email']) : ?>
                                <?php else : ?>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Input your Email</label>
                                        <input type="email" class="form-control" name="email" <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> autocomplete="off">
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>

                                <?php endif; ?>


                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark btn-block btn-sm"> Send </button>


                                </div>
                                <?php if ($config->allowRegistration) : ?>

                                    <p class="mt-4 text-sm text-center"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>" class="text-success text-gradient font-weight-bold"><?= lang('Auth.signIn') ?></a></p>


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