document.getElementById('switch-register').addEventListener('click', function () {
    const modalContent = document.querySelector('.modal-content');
    modalContent.innerHTML = `
        <h2>Register</h2>
        <form method="POST" action="proces_reg.php">
            <label for="user">Username</label>
            <input type="text" id="user" name="user" required>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
            <button type="submit">Register</button>
        </form>
        <p>Sudah punya akun? <button id="switch-login">Login</button></p>
    `;

    document.getElementById('switch-login').addEventListener('click', function () {
        location.reload(); // Kembali ke form login
    });
});
