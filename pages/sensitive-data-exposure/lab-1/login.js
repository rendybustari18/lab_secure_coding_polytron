

fetch('login.php')
    .then(response => response.json())
    .then(data => {
      localStorage.setItem('token', data.token);
      alert('Login successful!');
    })
    .catch(error => {
      alert('Login failed!');
    });