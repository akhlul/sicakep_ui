<?php $this->layout('base::auth');
?>

<div class="page page-center">
    <div class="container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" alt="" height="36"></a>
        </div>
        <form class="card card-md" action="." method="get" autocomplete="off">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login to your account</h2>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Password
                        <span class="form-label-description">
                            <a href="./forgot-password.html">I forgot password</a>
                        </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" placeholder="Password" autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="" data-bs-toggle="tooltip" data-bs-original-title="Show password">
                                <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                <i class="ti ti-eye"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <span class="form-check-label">Remember me on this device</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </div>
            </div>
            <div class="hr-text">or</div>
            <div class="card-body">
                <div class="row">
                    <div class="col"><a href="#" class="btn btn-white w-100">
                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                            <i class="ti ti-brand-github text-success"></i>
                            Login with Github
                        </a></div>
                    <div class="col"><a href="#" class="btn btn-white w-100">
                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                            <i class="ti ti-brand-twitter"></i>
                            Login with Twitter
                        </a></div>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
        </div>
    </div>
</div>