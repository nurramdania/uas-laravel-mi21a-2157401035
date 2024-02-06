<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login() {
        return view('login');
    }
}

// Pemrosesan login
if ($_SERVER['REQUEST_METHOD'] === 'post') {
    $email = 'dania07@gmail.com';
    $password = 'dania07';

    $inputemail = $_POST['email'];
    $inputpassword = $_POST['password'];

    // Gantilah kondisi ini dengan logika autentikasi yang sesuai di sisi server
    if ($inputemail === $email && $inputpassword === $password) {
        // Login berhasil, arahkan ke halaman profil
        header("Location: /Profil");
        exit();
    } else {
        // Login gagal, kirimkan pesan error
        header("Location: /Login");
        exit();
    }
}
?>

