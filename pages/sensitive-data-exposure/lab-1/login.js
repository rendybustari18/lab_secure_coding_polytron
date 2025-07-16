
// Login handler (simplified client-side version)
async function loginUser(email, password) {
  fetch('login.php',{
    body: JSON.stringify({ email, password }) 
  })
  .then(response => response.json())
  .then(data => {
    localStorage.setItem('token', data.token);
    alert('Login successful!');
  })
  .catch(error => {
    alert('Login failed!');
  });
}
