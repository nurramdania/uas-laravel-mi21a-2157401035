<link rel="stylesheet" href="Login.css">
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <h3 class="title">My Account</h3>
                    <form class="form-horizontal" method="post" action="/Profil">
                        @csrf
                        <div class="form-icon">
                            <i class="fa fa-user-circle"></i>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input type="email" name="Email" class="form-control" placeholder="Email">
                            
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="Password" class="form-control" placeholder="Password">
                            
                        </div>
                        <button class="btn signin">Login</button>
                        <br>
                        <button class="btn signin"><a href="/">Back</a></button>
                    </form>
                    <?php
    // Proses login di file proses_login.php
    if (isset($_GET['error']) && $_GET['error'] === 'invalid') {
        echo '<p class="error-message">Email atau password salah. Silakan coba lagi.</p>';
    }
    ?>
                </div>
            </div>
        </div>
    </div>
</div>