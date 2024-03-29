<!-- Vendor JS Files -->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<!-- <script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Instascan -->
<script type="text/javascript" src="<?= base_url('assets/vendor/'); ?>instascan/adapter.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/vendor/'); ?>instascan/vue.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/vendor/'); ?>instascan/instascan.min.js"></script>

<!-- Font Awesome -->
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/fontawesome/all.min.js"></script>

<!-- Instascan JS -->
<script src="<?= base_url('assets/js/myinstascan_absen.js') ?>"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>

<!-- AOS -->
<script src="<?= base_url('assets/') ?>vendor/aos/aos.js"></script>
<script src="<?= base_url('assets/'); ?>js/myscript.js"></script>
<script>
  AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 1000, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

  });

  // Jquery Datatable
  $(document).ready(function() {
    $('.datatables').DataTable();
  });
  // Tooltip
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/vendor/sailor/') ?>assets/js/main.js"></script>

</body>

</html>