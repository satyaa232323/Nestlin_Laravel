// Menambahkan event listener untuk tombol Daftar
const btnRegister = document.querySelector('#create');
btnRegister.addEventListener('click', () => {
  // Mengarahkan ke halaman createakun.html saat tombol "Daftar" diklik
  window.location.href = "createakun.html";
});

// Masuk
const btnLogin = document.querySelector('#btLogin');
btnLogin.addEventListener('click', () => {
  window.location.href = "login.html";
});

// Event listener untuk tombol submit pada halaman login
const txUsername = document.querySelector('#username');
const txPassword = document.querySelector('#password');
const btnSubmit = document.querySelector('#btSubmit');

btnSubmit.addEventListener('click', (e) => {
  e.preventDefault();

  // Verifikasi login dengan username dan password yang benar
  if (txUsername.value === 'admin' && txPassword.value === 'admin') {
    alert("Berhasil Login");
    window.location.href = "index.html"; // Mengarahkan ke halaman index.html setelah login berhasil
  } else {
    alert("Username atau Password Salah");
  }
});