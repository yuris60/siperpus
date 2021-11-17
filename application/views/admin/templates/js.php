</div>
</div>

<script src="<?= base_url('assets/vendor/'); ?>jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/js/mazer.js"></script>

<!-- Font Awesome -->
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/fontawesome/all.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>

<!-- Datepicker -->
<script src="<?= base_url('assets/') ?>vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/') ?>js/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<!-- Sweetalert -->
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>

<!-- JS -->
<script src="<?= base_url('assets/'); ?>js/myscript.js"></script>

<!-- Instascan -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<!-- Toast -->
<!-- <script src="<?= base_url('assets/'); ?>js/toast.js"></script> -->

<!-- filepond validation -->
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond-plugin-file-validate-size.js"></script>
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond-plugin-file-validate-type.js"></script>

<!-- image editor -->
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond-plugin-file-validate-size.js"></script>
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond-plugin-file-validate-type.js"></script>
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond-plugin-image-exif-orientation.js"></script>
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond-plugin-image-crop.js"></script>
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond-plugin-image-filter.js"></script>
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond-plugin-image-preview.js"></script>
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond-plugin-image-resize.js"></script>
<script src="<?= base_url('assets/') ?>vendor/image-uploader/js/filepond.js"></script>
<script src="<?= base_url('assets/') ?>js/myimage-uploader.js"></script>

<!-- Imask -->
<script src="<?= base_url('assets/') ?>vendor/imask/imask.js"></script>

<script>
  // Jquery Datatable
  let jquery_datatable = $("#table1").DataTable()

  // Tooltip
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

  //waktu berjalan
  function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date(); //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
    var ss = waktu.getSeconds() + ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
  }

  //imask
  var element = document.getElementById('isbn');
  var maskOptions = {
    mask: '000-000-0000-00-0'
  };
  var mask = IMask(element, maskOptions);

  //datepicker
  $(function() {
    $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
    });
  });

  $(function() { //custom
    $(".datepicker-range").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
    });
  });

  $(function() { //bulanan
    $('.datepicker-bulanan').datepicker({
      format: "yyyy-mm",
      todayHighlight: true,
      minViewMode: 1,
      maxViewMode: 2
    });
  });

  $(function() { //tahunan
    $(".datepicker-tahunan").datepicker({
      format: "yyyy",
      todayHighlight: true,
      minViewMode: 2,
      maxViewMode: 2
    });
  });

  $(function() {
    $('#datetimepicker2').datetimepicker({
      format: 'dddd',
      viewMode: 'days',
      icons: {
        time: 'fas fa-clock-o',
        date: 'fas fa-calendar',
        up: 'fas fa-chevron-up',
        down: 'fas fa-chevron-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right',
        today: 'fas fa-check',
        clear: 'fas fa-trash',
        close: 'fas fa-times'
      }
    });
  });

  $(function() {
    $('#datetimepicker3').datetimepicker({
      format: 'HH:mm',
      icons: {
        time: 'fas fa-clock-o',
        date: 'fas fa-calendar',
        up: 'fas fa-chevron-up',
        down: 'fas fa-chevron-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right',
        today: 'fas fa-check',
        clear: 'fas fa-trash',
        close: 'fas fa-times'
      }
    });
  });

  $(function() {
    $('#datetimepicker4').datetimepicker({
      format: 'HH:mm',
      icons: {
        time: 'fas fa-clock-o',
        date: 'fas fa-calendar',
        up: 'fas fa-chevron-up',
        down: 'fas fa-chevron-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right',
        today: 'fas fa-check',
        clear: 'fas fa-trash',
        close: 'fas fa-times'
      }
    });
  });
</script>

</body>

</html>