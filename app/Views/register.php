<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <title>Register</title>

    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-primary {
            width: 100%;
        }

        .text-danger {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form action="/register" method="post">
            <div>
                <label name="nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" />
            </div>
            <div>
                <label name="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" />
            </div>
            <div>
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" />
            </div>
            <div>
                <button class="btn btn-primary mt-3" type="submit">Submit</button>
            </div>
            <p class="mt-2">Belum punya akun? <a href="/login">Login</a> </p>
        </form>
        <p class="text-danger"><?= $error ?? '' ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

<script>
    const form = document.getElementById("register-form");
    const nama = document.getElementById("nama");
    const email = document.getElementById("email");
    const password = document.getElementById("password");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        // Validasi nama tidak kosong
        if (!nama.value) {
            alert("Nama tidak boleh kosong!");
            return;
        }

        // Validasi email tidak kosong dan harus valid
        if (!email.value || !isValidEmail(email.value)) {
            alert("Email tidak valid!");
            return;
        }

        // Validasi password minimal 8 karakter
        if (!password.value || password.value.length < 8) {
            alert("Password minimal 8 karakter!");
            return;
        }

        // Kirim data ke server
        this.submit();
    });

    // Validasi email harus valid
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
</script>
</body>

</html>