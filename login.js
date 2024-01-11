document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault(); // menghentikan pengeksekusian default form
  let username = document.getElementById('username').value;
  let password = document.getElementById('password').value;

  // Memvalidasi input
  if (username === '' || password === '') {
      alert('Username atau password tidak boleh kosong');
      return;
  }

  // Mengirimkan data ke server
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'auth.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
          let json = JSON.parse(xhr.responseText);
          if (json.success) {
              // Login berhasil, melakukan arahkan ke halaman berikutnya
              window.location.href = 'dashboard.html';
          } else {
              // Login gagal, menampilkan pesan error
              alert('Username atau password salah');
          }
      }
  }
  xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
});