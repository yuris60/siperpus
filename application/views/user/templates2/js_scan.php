</div>
</div>
<script src="<?= base_url('assets/vendor/'); ?>jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/vendor/mazer/dist/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/vendor/mazer/dist/') ?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/vendor/mazer/dist/') ?>assets/vendors/apexcharts/apexcharts.js"></script>
<script src="<?= base_url('assets/vendor/mazer/dist/') ?>assets/js/pages/dashboard.js"></script>

<script src="<?= base_url('assets/vendor/mazer/dist/') ?>assets/js/pages/horizontal-layout.js"></script>

<!-- Font Awesome -->
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/fontawesome/all.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>

<!-- Instascan -->
<script type="text/javascript" src="<?= base_url('assets/vendor/'); ?>instascan/adapter.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/vendor/'); ?>instascan/vue.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/vendor/'); ?>instascan/instascan.min.js"></script>

<!-- Instascan JS -->
<script src="<?= base_url('assets/js/myinstascan_absen.js') ?>"></script>

<!-- JS -->
<script src="<?= base_url('assets/'); ?>js/myscript.js"></script>

<script>
  // Jquery Datatable
  let jquery_datatable = $("#table1").DataTable()

  //tooltip
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>
</body>

</html>