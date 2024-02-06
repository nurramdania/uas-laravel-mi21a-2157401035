<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .registration-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }
        .register-button, .back-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 10px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="registration-container">
    <h2>Form Pendaftaran</h2>
    <form action="/Login" method="post">
        @csrf
        <!-- Tambahkan elemen formulir yang diperlukan -->
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" class="input-field" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="input-field" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="input-field" required>

        <button type="submit" class="register-button">Daftar</button>
    </form>
        <br>
    <a href="/" class="back-button">Back</a>
</div>

</body>
</html>
