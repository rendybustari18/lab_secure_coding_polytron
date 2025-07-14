const JWT_SECRET = 'superSecretJWTkey123!';

const API_KEY = 'sk_live_51ABCxyzPrivateKey';

// Login handler (simplified client-side version)
async function loginUser(email, password) {
  const response = await fetch('/api/auth/login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'x-api-key': API_KEY
    },
    body: JSON.stringify({ email, password })
  });

  const data = await response.json();

  if (data.token) {
    localStorage.setItem('token', data.token);
    alert('Login successful!');
  } else {
    alert('Login failed!');
  }
}
