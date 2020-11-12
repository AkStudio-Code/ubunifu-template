<!DOCTYPE html>
<html lang="en">
<?php
$this->layout('layout/header');
?>
<body>
<?php
$this ->layout('layout/navigation');
?>
<main class="content">
    <?php
    $this ->layout('layout/topbar');
    $this ->content($this ->file);
    $this ->layout('layout/footer');
    ?>
</main>
<script src="<?= $this ->url()?>/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= $this ->url()?>/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= $this ->url()?>/vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="<?= $this ->url()?>/vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="<?= $this ->url()?>/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?= $this ->url()?>/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="<?= $this ->url()?>/vendor/countup.js/dist/countUp.umd.js"></script>
<script src="<?= $this ->url()?>/vendor/notyf/notyf.min.js"></script>
<script src="<?= $this ->url()?>/vendor/chartist/dist/chartist.min.js"></script>
<script src="<?= $this ->url()?>/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?= $this ->url()?>/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
<script src="<?= $this ->url()?>/vendor/simplebar/dist/simplebar.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="<?= $this ->url()?>/assets/js/volt.js"></script>
</body>
</html>
