<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $head_title ?></title>
    <?= $this->debugbarRenderer("renderHead") ?>

    <link rel="stylesheet" href="<?= $this->assets('css/tabler.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->assets('iconfont/tabler-icons.min.css') ?>">
    <style>
    body {
        background-image: url('https://infoasn.id/wp-content/uploads/2021/10/background.webp');
    }
    </style>
</head>

<body class="theme-light">

    <div class="overflow-auto page">
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark">
                    <a href=".">
                        <img src="<?= $this->assets('img/logo/sicakep-logo-horizontal.png') ?>" alt="SICAKEP" class="navbar-brand-image" width="110" height="32">
                    </a>
                </h1>

                <div class="flex-row navbar-nav d-lg-none">
                    <div class="nav-item dropdown">
                        <a href="#" class="p-0 nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm" style="background-image: url(<?= $session->get('avatar') ?>)"></span>
                            <div class="d-none d-md-block ps-2">
                                <div><?= $session->get('nama') ?></div>
                                <div class="mt-1 small text-muted"><?= $session->get('jabatan') ?></div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="#" class="dropdown-item">Set status</a>
                            <a href="#" class="dropdown-item">Profile &amp; account</a>
                            <a href="#" class="dropdown-item">Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="/logout" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="navbar-nav pt-lg-3">
                        <li class="nav-item">
                            <a class="pb-3 nav-link d-flex lh-1 text-reset dropend" href="#">
                                <span class="avatar" style="background-image: url(<?= $session->get('avatar') ?>)"></span>
                                <div class="d-none d-xl-block ps-2">
                                    <div><?= $session->get('nama') ?></div>
                                    <div class="mt-1 small text-muted"><?= $session->get('jabatan') ?></div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <i class="fs-2 ti ti-smart-home"></i>
                                </span>
                                <span class="nav-link-title">
                                    Beranda
                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <i class="fs-2 ti ti-package"></i>
                                </span>
                                <span class="nav-link-title">
                                    Laporan Harian
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="/dailyreport/entry">
                                            Entri Laporan Harian
                                        </a>
                                        <a class="dropdown-item" href="/dailyreport/collection">
                                            Lihat Laporan Pegawai
                                        </a>
                                        <?php if ($session->get('eselon') <= 4 && $session->get('level_user') == 2) : ?>
                                        <a class="dropdown-item" href="/dailyreport/summary">
                                            Rekap Laporan Harian
                                            <!-- <span class="badge badge-sm bg-green text-uppercase ms-2">New</span> -->
                                        </a>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown <?= $this->uri(1, "entry", "active") ?>">
                            <a class="nav-link dropdown-toggle" data-bs-menu="entry" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <i class="fs-2 ti ti-package"></i>
                                </span>
                                <span class="nav-link-title">
                                    Entri
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item <?= $this->uri("/entry/target", "active") ?>" href="/entry/target">
                                            Entri Target/ Penugasan
                                        </a>
                                        <!-- CHANGEME: Digabung ke Entri Target Penugasan saja -->
                                        <!-- <a class="dropdown-item" <?= $this->uri("/entry/target/collective", "active") ?>" href="/entry/target/collective">
                                            Entri Kolektif
                                        </a> -->
                                        <a class="dropdown-item" <?= $this->uri("/entry/report", "active") ?>" href="/entry/report">
                                            Entri Laporan/ Realisasi
                                        </a>
                                        <a class="dropdown-item" <?= $this->uri("/entry/grade", "active") ?>" href="/entry/grade">
                                            Entri Penilaian
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown <?= $this->uri(1, "print", "active") ?>">
                            <a class=" nav-link dropdown-toggle" data-bs-menu="print" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <i class="fs-2 ti ti-package"></i>
                                </span>
                                <span class="nav-link-title">
                                    Cetak
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item <?= $this->uri("/print/CKP", "active") ?>" href="/print/CKP">
                                            CKP
                                        </a>
                                        <a class="dropdown-item <?= $this->uri("/print/SKP", "active") ?>" href="/print/SKP">
                                            SKP
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <i class="fs-2 ti ti-package"></i>
                                </span>
                                <span class="nav-link-title">
                                    Matriks Dinas Luar
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="/matrices/flag">
                                            Entri Flag
                                        </a>
                                        <a class="dropdown-item" href="/matrices/service">
                                            Entri Matriks Dinas Luar
                                        </a>
                                        <a class="dropdown-item" href="/matrices/report">
                                            Laporan SPD
                                        </a>
                                        <a class="dropdown-item" href="/master/matrices">
                                            Master Kode Dinas Luar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Other -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="./form-elements.html">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    http://tabler-icons.io/i/checkbox
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="9 11 12 14 20 6">
                                        </polyline>
                                        <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9">
                                        </path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Forms
                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    http://tabler-icons.io/i/star
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Extra
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./activity.html">
                                            Activity
                                        </a>
                                        <a class="dropdown-item" href="./gallery.html">
                                            Gallery
                                        </a>
                                        <a class="dropdown-item" href="./invoice.html">
                                            Invoice
                                        </a>
                                        <a class="dropdown-item" href="./search-results.html">
                                            Search results
                                        </a>
                                        <a class="dropdown-item" href="./pricing.html">
                                            Pricing cards
                                        </a>
                                        <a class="dropdown-item" href="./faq.html">
                                            FAQ
                                            <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./users.html">
                                            Users
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./license.html">
                                            License
                                        </a>
                                        <a class="dropdown-item" href="./music.html">
                                            Music
                                        </a>
                                        <a class="dropdown-item" href="./tasks.html">
                                            Tasks
                                            <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./uptime.html">
                                            Uptime monitor
                                        </a>
                                        <a class="dropdown-item" href="./widgets.html">
                                            Widgets
                                        </a>
                                        <a class="dropdown-item" href="./wizard.html">
                                            Wizard
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    http://tabler-icons.io/i/layout-2
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="4" width="6" height="5" rx="2"></rect>
                                        <rect x="4" y="13" width="6" height="7" rx="2"></rect>
                                        <rect x="14" y="4" width="6" height="7" rx="2"></rect>
                                        <rect x="14" y="15" width="6" height="5" rx="2"></rect>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Layout
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./layout-horizontal.html">
                                            Horizontal
                                        </a>
                                        <a class="dropdown-item" href="./layout-boxed.html">
                                            Boxed
                                            <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                        </a>
                                        <a class="dropdown-item active" href="./layout-vertical.html">
                                            Vertical
                                        </a>
                                        <a class="dropdown-item" href="./layout-vertical-transparent.html">
                                            Vertical transparent
                                        </a>
                                        <a class="dropdown-item" href="./layout-vertical-right.html">
                                            Right vertical
                                        </a>
                                        <a class="dropdown-item" href="./layout-condensed.html">
                                            Condensed
                                        </a>
                                        <a class="dropdown-item" href="./layout-combo.html">
                                            Combined
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./layout-navbar-dark.html">
                                            Navbar dark
                                        </a>
                                        <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                            Navbar sticky
                                        </a>
                                        <a class="dropdown-item" href="./layout-navbar-overlap.html">
                                            Navbar overlap
                                        </a>
                                        <a class="dropdown-item" href="./layout-rtl.html">
                                            RTL mode
                                        </a>
                                        <a class="dropdown-item" href="./layout-fluid.html">
                                            Fluid
                                        </a>
                                        <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                            Fluid vertical
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./icons.html">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    http://tabler-icons.io/i/ghost
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7">
                                        </path>
                                        <line x1="10" y1="10" x2="10.01" y2="10"></line>
                                        <line x1="14" y1="10" x2="14.01" y2="10"></line>
                                        <path d="M10 14a3.5 3.5 0 0 0 4 0">
                                        </path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    1719 icons
                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    http://tabler-icons.io/i/lifebuoy
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <line x1="15" y1="15" x2="18.35" y2="18.35"></line>
                                        <line x1="9" y1="15" x2="5.65" y2="18.35"></line>
                                        <line x1="5.65" y1="5.65" x2="9" y2="9">
                                        </line>
                                        <line x1="18.35" y1="5.65" x2="15" y2="9"></line>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Help
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="./docs/index.html">
                                    Documentation
                                </a>
                                <a class="dropdown-item" href="./changelog.html">
                                    Changelog
                                </a>
                                <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">
                                    Source code
                                </a>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </aside>


        <div class="page-wrapper">
            <?= $this->section('content') ?>
        </div>
    </div>

    <?= $this->debugbarRenderer("render") ?>

    <script type="module" src="<?= $this->assets('js/tabler.js') ?>"></script>
    <script type="module">
    window.ready = function(fn) {
        if (document.readyState != 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    window.ready(() => {
        var selected_menu = "<?= $this->uri(1) ?>"
        console.log(selected_menu)
        window.bsmenu = document.querySelector(".dropdown-toggle[data-bs-menu=" + selected_menu + "]")
        window.bsmenu.click()
    })
    </script>
</body>

</html>