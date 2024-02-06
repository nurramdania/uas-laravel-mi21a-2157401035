<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .profile-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .profile-email {
            color: #666;
            margin-bottom: 20px;
        }
        .logout-button {
            background-color: #f44336;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="profile-container" method="post" action="/">
    <img src="nia.jpeg" alt="Profil" class="profile-image">
    <div class="profile-name">Nur Ramdania</div>
    <div class="profile-email">nurramdania48@gmail.com</div>
    <button onclick="redirecToHalamanawalPage()">Logout</button>

        <script>
            function redirecToHalamanawalPage() {
                window.location.href = "/";
            }
        </script>
</div>

</body>
</html>
