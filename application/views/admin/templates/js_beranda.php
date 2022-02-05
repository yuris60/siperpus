<?php
//pengunjung
// $pengunjunghariinilakilaki = 0;
// foreach ($jumlahpengunjunghariinilakilaki as $pengunjunglakilakihariini) {
//   $pengunjunghariinilakilaki += $pengunjunglakilakihariini;
// }
// $pengunjunghariiniperempuan = 0;
// foreach ($jumlahpengunjunghariiniperempuan as $pengunjungperempuanhariini) {
//   $pengunjunghariiniperempuan += $pengunjungperempuanhariini;
// }
// $pengunjunglakilaki = 0;
// foreach ($jumlahpengunjunglakilaki as $pengunjunglakilaki) {
//   $pengunjunglakilaki += $pengunjunglakilaki;
// }
// $pengunjungperempuan = 0;
// foreach ($jumlahpengunjungperempuan as $pengunjungperempuan) {
//   $pengunjungperempuan += $pengunjungperempuan;
// }

//peminjaman buku
$qtyjanuari = 0;
foreach ($jumlahqtyjanuari as $peminjamanjanuari) {
  $qtyjanuari += $peminjamanjanuari;
}
$qtyfebruari = 0;
foreach ($jumlahqtyfebruari as $peminjamanfebruari) {
  $qtyfebruari += $peminjamanfebruari;
}
$qtymaret = 0;
foreach ($jumlahqtymaret as $peminjamanmaret) {
  $qtymaret += $peminjamanmaret;
}
$qtyapril = 0;
foreach ($jumlahqtyapril as $peminjamanapril) {
  $qtyapril += $peminjamanapril;
}
$qtymei = 0;
foreach ($jumlahqtymei as $peminjamanmei) {
  $qtymei += $peminjamanmei;
}
$qtyjuni = 0;
foreach ($jumlahqtyjuni as $peminjamanjuni) {
  $qtyjuni += $peminjamanjuni;
}
$qtyjuli = 0;
foreach ($jumlahqtyjuli as $peminjamanjuli) {
  $qtyjuli += $peminjamanjuli;
}
$qtyagustus = 0;
foreach ($jumlahqtyagustus as $peminjamanagustus) {
  $qtyagustus += $peminjamanagustus;
}
$qtyseptember = 0;
foreach ($jumlahqtyseptember as $peminjamanseptember) {
  $qtyseptember += $peminjamanseptember;
}
$qtyoktober = 0;
foreach ($jumlahqtyoktober as $peminjamanoktober) {
  $qtyoktober += $peminjamanoktober;
}
$qtynovember = 0;
foreach ($jumlahqtynovember as $peminjamannovember) {
  $qtynovember += $peminjamannovember;
}
$qtydesember = 0;
foreach ($jumlahqtydesember as $peminjamandesember) {
  $qtydesember += $peminjamandesember;
}
?>

</div>
</div>

<script src="<?= base_url('assets/vendor/'); ?>jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>

<script>
  // Tooltip
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>

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


<!-- Instascan -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

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

<!-- Charts -->
<script src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/apexcharts/apexcharts.js"></script>
<!-- <script src="<?= base_url('assets/'); ?>js/dashboard.js"></script> -->
<script>
  //grafik
  var optionsProfileVisit = {
    annotations: {
      position: 'back'
    },
    dataLabels: {
      enabled: false
    },
    chart: {
      type: 'bar',
      height: 300
    },
    fill: {
      opacity: 1
    },
    plotOptions: {},
    series: [{
      name: 'peminjaman',
      data: [<?= $jumlahpeminjamanjanuari; ?>, <?= $jumlahpeminjamanfebruari; ?>, <?= $jumlahpeminjamanmaret; ?>, <?= $jumlahpeminjamanapril; ?>, <?= $jumlahpeminjamanmei; ?>, <?= $jumlahpeminjamanjuni; ?>, <?= $jumlahpeminjamanjuli; ?>, <?= $jumlahpeminjamanagustus; ?>, <?= $jumlahpeminjamanseptember; ?>, <?= $jumlahpeminjamanoktober; ?>, <?= $jumlahpeminjamannovember; ?>, <?= $jumlahpeminjamandesember; ?>]
    }],
    colors: '#435ebe',
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
    },
  }
  let optionsPengunjungHariini = {
    series: [<?= $pengunjunghariinilakilaki; ?>, <?= $pengunjunghariiniperempuan; ?>],
    labels: ['Laki-Laki', 'Perempuan'],
    colors: ['#435ebe', '#55c6e8'],
    chart: {
      type: 'donut',
      width: '100%',
      height: '350px'
    },
    legend: {
      position: 'bottom'
    },
    plotOptions: {
      pie: {
        donut: {
          size: '30%'
        }
      }
    }
  }
  let optionsPengunjungKeseluruhan = {
    series: [<?= $pengunjunglakilaki; ?>, <?= $pengunjungperempuan; ?>],
    labels: ['Laki-Laki', 'Perempuan'],
    colors: ['#435ebe', '#55c6e8'],
    chart: {
      type: 'donut',
      width: '100%',
      height: '350px'
    },
    legend: {
      position: 'bottom'
    },
    plotOptions: {
      pie: {
        donut: {
          size: '30%'
        }
      }
    }
  }

  var areaOptions = {
    series: [{
        name: "Peminjaman",
        data: [<?= $jumlahpeminjamanjanuari ?>, 30],
      },
      {
        name: "Qty Pinjam",
        data: [<?= $qtyjanuari ?>, 20],
      },
    ],
    chart: {
      height: 350,
      type: "bar",
    },
    dataLabels: {
      enabled: false,
    },
    xaxis: {
      type: "category",
      categories: [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Dsember",
      ],
    },
    theme: {
      mode: 'light',
      palette: 'palette2',
      monochrome: {
        enabled: false,
        color: '#255aee',
        shadeTo: 'light',
        shadeIntensity: 0.65
      },
    },
    tooltip: {},
  };

  // var chartProfileVisit = new ApexCharts(document.querySelector("#chart-profile-visit"), areaOptions);
  var chartProfileVisit = new ApexCharts(document.querySelector("#chart-profile-visit"), optionsProfileVisit);
  var chartPengunjungHariIni = new ApexCharts(document.getElementById('pengunjung-hariini'), optionsPengunjungHariini)
  var chartPengunjungKeseluruhan = new ApexCharts(document.getElementById('pengunjung-keseluruhan'), optionsPengunjungKeseluruhan)


  chartProfileVisit.render();
  chartPengunjungHariIni.render()
  chartPengunjungKeseluruhan.render()
</script>

<!-- Simple Calendar -->
<script type="text/javascript" src="<?= base_url('assets/vendor/simple-calendar/dist/'); ?>jquery.simple-calendar.js"></script>

<!-- Imask -->
<script src="<?= base_url('assets/') ?>vendor/imask/imask.js"></script>

<!-- JS -->
<script src="<?= base_url('assets/'); ?>js/myscript.js"></script>

<!-- Load Zooming library -->
<script src="https://unpkg.com/zooming/build/zooming.min.js"></script>

<script>
  // simple calendar
  $(document).ready(function() {
    $("#kalender").simpleCalendar({
      //Defaults options below
      //string of months starting from january
      months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      days: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
      displayYear: true, // Display year in header
      fixedStartDay: true, // Week begin always by monday or by day set by number 0 = sunday, 7 = saturday, false = month always begin by first day of the month
      displayEvent: true, // Display existing event
      disableEventDetails: true, // disable showing event details
      disableEmptyDetails: true, // disable showing empty date details
      events: [], // List of events
      onInit: function(calendar) {}, // Callback after first initialization
      onMonthChange: function(month, year) {}, // Callback on month change
      onDateSelect: function(date, events) {}, // Callback on date selection
      onEventSelect: function() {}, // Callback on event selection - use $(this).data('event') to access the event
      onEventCreate: function($el) {}, // Callback fired when an HTML event is created - see $(this).data('event')
      onDayCreate: function($el, d, m, y) {} // Callback fired when an HTML day is created   - see $(this).data('today'), .data('todayEvents')
    });
  });

  // Listen to images after DOM content is fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    new Zooming({
      // options...
    }).listen('.img-zoomable')
  })

  //pilihan laporan
  $(document).ready(function() {
    $("#pilihan").change(function() {
      $(this).find("option:selected").each(function() {
        var optionValue = $(this).attr("id");
        if (optionValue) {
          $(".pilihan").not("." + optionValue).hide();
          $("." + optionValue).show();
        } else {
          $(".pilihan").hide();
        }
      });
    }).change();
  });
  $(document).ready(function() {
    $("#pilihan2").change(function() {
      $(this).find("option:selected").each(function() {
        var optionValue = $(this).attr("id");
        if (optionValue) {
          $(".pilihan2").not("." + optionValue).hide();
          $("." + optionValue).show();
        } else {
          $(".pilihan2").hide();
        }
      });
    }).change();
  });
  $(document).ready(function() {
    $("#pilihan3").change(function() {
      $(this).find("option:selected").each(function() {
        var optionValue = $(this).attr("id");
        if (optionValue) {
          $(".pilihan3").not("." + optionValue).hide();
          $("." + optionValue).show();
        } else {
          $(".pilihan3").hide();
        }
      });
    }).change();
  });

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
</script>

</body>

</html>