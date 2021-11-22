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
  document.getElementById('nisn').value = c;
  document.forms[0].submit();
})

function stop() {
  scanner.stop()
}

function play() {
  scanner.start()
}