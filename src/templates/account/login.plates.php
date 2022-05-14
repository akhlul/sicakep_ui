<?php $this->layout('base::blank', $head); ?>

<div class="page page-center">
    <div class="py-4 container-tight">
        <div class="mb-4 text-center">
            <a href="." class="navbar-brand navbar-brand-autodark">
                <img src="<?= $this->assets('img/logo/sicakep-logo-horizontal.png') ?>" alt="" height="36">
            </a>
        </div>
        <form class="card card-md" action="/login" method="post" autocomplete="off">
            <div class="card-body">
                <h2 class="mb-4 text-center card-title">

                    Masuk ke akun anda
                </h2>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" placeholder="Masukkan username">
                </div>
                <div class="mb-2">
                    <label class="form-label">Password
                        <!-- <span class="form-label-description">
                            <a href="./forgot-password.html">Lupa kata sandi?</a>
                        </span> -->
                    </label>
                    <div class="input-group input-group-flat">
                        <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="" data-bs-toggle="tooltip" data-bs-original-title="Show password">
                                <i class="ti ti-eye"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <!-- <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <span class="form-check-label">Ingat saya pada perangkat ini</span>
                    </label>
                </div> -->
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                    <?php if ($msg = $session->getFlash("message")) : ?>
                        <small class="form-hint mt-2">
                            <?= $msg ?>
                        </small>
                    <?php endif ?>
                </div>
            </div>
            <!-- <div class="hr-text">Atau</div> -->
            <!-- <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-white w-100">
                            <i class="ti ti-brand-github text-success"></i>
                            Login with SSO
                        </a>
                    </div>
                </div>
            </div> -->
        </form>
        <!-- <div class="mt-3 text-center text-muted">
            Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
        </div> -->
    </div>
</div>