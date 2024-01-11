document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault(); // menghentikan submit form

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'login.php', true);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
          const json = JSON.parse(xhr.responseText);
          if (json.success) {
              alert('Login berhasil');
              window.location.href = 'input_data/input.php' ;
          } else {
              alert(json.message);
          }
      }
  };
  xhr.send(JSON.stringify({username: username, password: password}));
});