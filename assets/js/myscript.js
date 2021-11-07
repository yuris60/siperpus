const flashDataSuccess = $('.flash-data-success').data('flashdata');

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
    confirmButtonColor: '#4e73df',
    cancelButtonColor: '#e74a3b',
    confirmButtonText: 'Hapus',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  })
});