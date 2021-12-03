const flashDataSuccess = $('.flash-data-success').data('flashdata');
const flashDataGagalPinjam = $('.flash-data-gagal-pinjam').data('flashdata');
const flashDataGagalPinjamBuku = $('.flash-data-gagal-pinjam-buku').data('flashdata');
const flashDataGagalBukuKurang = $('.flash-data-gagal-buku-kurang').data('flashdata');

if (flashDataSuccess) {
  var toastTriggerSuccess = document.getElementById('ToastBtnSuccess')
  var toastSuccess = document.getElementById('ToastSuccess')
  if (toastTriggerSuccess) {
    toastTriggerSuccess.addEventListener('click', function() {
      var toastsuccess = new bootstrap.Toast(toastSuccess)
      
      toastsuccess.show()
    })
  }
  document.getElementById("ToastBtnSuccess").click(); // Click on the checkbox
}

else if (flashDataGagalPinjam) {
  var toastTriggerGagalPinjam = document.getElementById('ToastBtnGagalPinjam')
  var toastGagalPinjam = document.getElementById('ToastGagalPinjam')
  if (toastTriggerGagalPinjam) {
    toastTriggerGagalPinjam.addEventListener('click', function() {
      var toastgagalpinjam = new bootstrap.Toast(toastGagalPinjam)
      
      toastgagalpinjam.show()
    })
  }
  document.getElementById("ToastBtnGagalPinjam").click(); // Click on the checkbox
}

else if (flashDataGagalPinjamBuku) {
  var toastTriggerGagalPinjamBuku = document.getElementById('ToastBtnGagalPinjamBuku')
  var toastGagalPinjamBuku = document.getElementById('ToastGagalPinjamBuku')
  if (toastTriggerGagalPinjamBuku) {
    toastTriggerGagalPinjamBuku.addEventListener('click', function() {
      var toastgagalpinjambuku = new bootstrap.Toast(toastGagalPinjamBuku)
      
      toastgagalpinjambuku.show()
    })
  }
  document.getElementById("ToastBtnGagalPinjamBuku").click(); // Click on the checkbox
}

else if (flashDataGagalBukuKurang) {
  var toastTriggerGagalBukuKurang = document.getElementById('ToastBtnGagalBukuKurang')
  var toastGagalBukuKurang = document.getElementById('ToastGagalBukuKurang')
  if (toastTriggerGagalBukuKurang) {
    toastTriggerGagalBukuKurang.addEventListener('click', function() {
      var toastgagalBukuKurang = new bootstrap.Toast(toastGagalBukuKurang)
      
      toastgagalBukuKurang.show()
    })
  }
  document.getElementById("ToastBtnGagalBukuKurang").click(); // Click on the checkbox
}

// //tombol-hapus
// $('.tombol-hapus').on('click', function (e) {

//   e.preventDefault();
//   const href = $(this).attr('href');

//   var toastTriggerDelete = document.getElementById('ToastBtnDelete')
//   var toastDelete = document.getElementById('ToastDelete')
//   if (toastTriggerDelete) {
//     toastTriggerDelete.addEventListener('click', function() {
//       var toastDelete = new bootstrap.Toast(toastDelete)
      
//       toastDelete.show()
//     })
//     document.getElementById("ToastBtnDelete").click(); // Click on the checkbox
//   }then((result) => {
//     if (result.value) {
//       document.location.href = href;
//     }
//   })
// });

//tombol-hapus
$('.tombol-hapus').on('click', function (e) {

  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Peringatan!',
    text: "Apakah anda yakin data ini akan dihapus?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#435ebe',
    cancelButtonColor: '#6e7881',
    confirmButtonText: 'Hapus',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  })
});

//tombol-konfirmasi
$('.tombol-pengembalian-buku').on('click', function (e) {

  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Konfirmasi!',
    text: "Apakah anda yakin akan menyelesaikan peminjaman?",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#435ebe',
    cancelButtonColor: '#6e7881',
    confirmButtonText: 'Kembalikan',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  })
});

//tombol-konfirmasi
$('.tombol-perpanjang-buku').on('click', function (e) {

  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Konfirmasi!',
    text: "Apakah anda yakin akan memperpanjang peminjaman?",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#435ebe',
    cancelButtonColor: '#6e7881',
    confirmButtonText: 'Perpanjang',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  })
});