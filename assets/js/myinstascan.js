//Instascan
  let scanner = new Instascan.Scanner({
    video: document.getElementById('preview')
  });
  scanner.addListener('scan', function(content) {
    console.log(content)
  });
  Instascan.Camera.getCameras().then(function(cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    } else {
      alert('no cameras found');
    }
  }).catch(function(e) {
    console.error(e)
  });

  scanner.addListener('scan', function(c) {
    document.getElementById('text').value = c;

    const id = document.getElementById('text').value;

    $.ajax({
      url: 'getscan',
      data: {
        id: id
      },
      method: 'POST',
      dataType: 'json',
      success: function(data) {
        $('#kode_sumberbuku').val(data.kode_sumberbuku),
          $('#nm_sumberbuku').val(data.nm_sumberbuku)
      }
    });
  })

  function stop() {
    scanner.stop()
  }

  function play() {
    scanner.start()
  }