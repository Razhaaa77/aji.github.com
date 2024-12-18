<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/sneat/')?>/assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/sneat/')?>img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/sneat/')?>/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/sneat/')?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('assets/sneat/')?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('assets/sneat/')?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/sneat/')?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/sneat/')?>/assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="<?= base_url('assets/sneat/')?>/assets/vendor/js/helpers.js"></script>

    <!-- Config -->
    <script src="<?= base_url('assets/sneat/')?>/assets/js/config.js"></script>
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <h4 class="mb-2">Registrasi</h4>
                        </div>
                        <!-- /Logo -->

                        <form id="formAuthentication" class="mb-3" action="<?= base_url('registrasi') ?>" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your nama" autofocus required />
                                <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus required />
                                <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <button class="btn btn-secondary d-grid w-100"  style="background-color:black;"  type="submit">Sign up</button>
                        </form>

                        <p class="text-center">
                            Already have an account? <a href="<?= base_url('auth') ?>" class="f-w-400">Log in</a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="<?= base_url('assets/sneat/')?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('assets/sneat/')?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url('assets/sneat/')?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('assets/sneat/')?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/sneat/')?>/assets/vendor/js/menu.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('assets/sneat/')?>/assets/js/main.js"></script>

    <!-- Page JS -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>