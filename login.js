document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault(); //menghentikan submit form sehingga bisa melakukan proses ajax
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'oten_lgn.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
          var json = JSON.parse(xhr.responseText);
          console.log(json); // untuk melihat response dari server

          if (json.success) {
              window.location.href = 'inputdata/input.php'; // redirect ke halaman beranda jika login berhasil
          } else {
              alert('Login Gagal! Username atau password salah.');
          }
      }
  };

  xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
});