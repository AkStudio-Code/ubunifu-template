
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Primary Meta Tags -->
    <title>Volt Premium Bootstrap Dashboard - Sign in page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt Premium Bootstrap Dashboard - Sign in page">
    <meta name="author" content="Themesberg">
    <meta name="description"
          content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta name="keywords"
          content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard"/>
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">
    
    <!-- Fontawesome -->
    <link type="text/css" href="<?=$this->url()?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="<?=$this->url()?>/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="<?=$this->url()?>/css/volt.css" rel="stylesheet">

</head>

<body>
<main>

    <!-- Section -->
    <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
        <div class="container">

            <div class="row justify-content-center form-bg-image"
                 data-background-lg="<?=$this->url()?>assets/img/illustrations/signin.svg">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <?php
                             $error =@ \Triposhub\Ubunifu\Application\Session::get('auth_error');

                             if(isset($error)):
                            ?>
                            <div class="alert-danger"><?=$error?></div>
                            <?php unset($_SESSION['auth_error']);endif;?>
                            <h1 class="mb-0 h3">Sign in to our platform</h1>
                        </div>
                        <form method="post" action=""  class="mt-4">
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><span
                                                class="fas fa-envelope"></span></span>
                                    <input name="user_email" type="email" class="form-control"
                                           id="email" autofocus required>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Your Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2"><span
                                                    class="fas fa-unlock-alt"></span></span>
                                        <input name="user_password" type="password" class="form-control" id="password"
                                               required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="d-flex justify-content-between align-items-top mb-4">
                                    <div class="form-check">
                                        <input name="remember_me" class="form-check-input" type="checkbox" value="" id="remember">
                                        <label class="form-check-label mb-0" for="remember">
                                            Remember me
                                        </label>
                                    </div>
                                    <div><a href="<?=$this ->link?>account/forgot-password/" class="small text-right">Lost password?</a>
                                    </div>
                                </div>
                                <?php if (!empty($this->redirect)) { ?>
                                    <input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
                                <?php } ?>
                                <input type="hidden" name="CSRF" value="">
                            </div>
                            <input type="submit" name="submit" class="btn btn-block btn-primary">Sign in</input>
                        </form>
                        <div class="mt-3 mb-4 text-center">
                            <span class="font-weight-normal">or login with</span>
                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <a href="#" class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2"
                               type="button" aria-label="facebook button" title="facebook button">
                                <span aria-hidden="true" class="fab fa-facebook-f"></span>
                            </a>
                            <a href="#" class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2"
                               type="button" aria-label="twitter button" title="twitter button">
                                <span aria-hidden="true" class="fab fa-twitter"></span>
                            </a>
                            <a href="#" class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button"
                               aria-label="github button" title="github button">
                                <span aria-hidden="true" class="fab fa-github"></span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="font-weight-normal">
                                    Not registered?
                                    <a href="./sign-up.html" class="font-weight-bold">Create account</a>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Core -->
<script src="<?=$this->url()?>/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=$this->url()?>/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- /vendor JS -->
<script src="<?=$this->url()?>/vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="<?=$this->url()?>/vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Jarallax -->
<script src="<?=$this->url()?>/vendor/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth scroll -->
<script src="<?=$this->url()?>/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Count up -->
<script src="<?=$this->url()?>/vendor/countup.js/dist/countUp.umd.js"></script>

<!-- Notyf -->
<script src="<?=$this->url()?>/vendor/notyf/notyf.min.js"></script>

<!-- Charts -->
<script src="<?=$this->url()?>/vendor/chartist/dist/chartist.min.js"></script>
<script src="<?=$this->url()?>/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="<?=$this->url()?>/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Simplebar -->
<script src="<?=$this->url()?>/vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="<?=$this->url()?>/assets/js/volt.js"></script>

</body>

</html>