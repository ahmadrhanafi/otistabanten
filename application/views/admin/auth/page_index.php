<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Administrator</title>
    <link rel="shortcut icon" href="<?= base_url('assets/images/Logo-otista.png') ?>" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<style>
    * {
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }

    body,
    html {
        height: 100%;
        margin: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-box {
        width: 350px;
        padding: 40px;
        background: rgba(0, 0, 0, .5);
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
        position: relative;
    }

    .kotak {
        width: 100px;
        height: 100px;
        margin: 0 auto 30px auto;
    }

    .kotak img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .login-box h2 {
        margin: 0 0 30px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        text-align: center;
    }

    .user-box {
        position: relative;
    }

    .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 15px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .user-box input:focus~label,
    .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .btn-show-password {
        position: absolute;
        right: 5px;
        top: 10px;
        color: #fff;
        cursor: pointer;
        z-index: 10;
    }

    .btn {
        width: 100%;
        padding: 10px;
        background-color: #2d99f7;
        border: none;
        color: white;
        text-transform: uppercase;
        font-weight: 600;
    }

    .alert {
        font-size: 13px;
        text-align: center;
        margin-bottom: 20px;
    }
</style>

<body>
    <div class="login-box">
        <div class="kotak">
            <img src="<?= base_url('assets/images/Logo-otista.png') ?>" alt="Logo">
        </div>
        <h2>Administrator Otista</h2>

        <?php if ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger" role="alert" id="errorAlert">
                <?= $this->session->flashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('login') ?>" method="post">
            <div class="user-box">
                <input type="text" name="username" autocomplete="off" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password" required>
                <label>Password</label>
                <i class="fas fa-eye btn-show-password" id="togglePassword"></i>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>

    <script>
        // toggle
        const togglePassword = document.querySelector('#togglePassword');
        const passwordField = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            if (passwordField.getAttribute('type') === 'text') {
                this.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                this.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });

        // alert
        document.addEventListener("DOMContentLoaded", function() {
            const alertElement = document.querySelector('.alert');
            if (alertElement) {
                setTimeout(() => {
                    alertElement.style.transition = "opacity 0.5s ease";
                    alertElement.style.opacity = "0";
                    setTimeout(() => alertElement.remove(), 500);
                }, 3000);
            }
        });
    </script>
</body>

</html>