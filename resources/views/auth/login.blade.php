<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - DoTrack</title>
    <link rel="icon" href="../assets/img/doctracklogo.png">
    <link rel="stylesheet" href="../app/css/styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Function to display SweetAlert
        function showInvalidAccountMessage() {
            Swal.fire({
                icon: 'error',
                title: 'Invalid account',
                text: 'Account not registered!',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        }
    </script>
</head>

<body style="background-image: url('../assets/img/Um_background.png')">
    <div class="wrapper-main">
        <div class="wrapper">
            <form method="post" class="form" action="{{ route('login.store') }}">
                @csrf
                <div class="logoimg">
                    <a href="{{route('login')}}">
                        <img src="../assets/img/doctracklogo.png">
                    </a>
                </div>
                <h1>Login</h1>

                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" required>
                    <span class="material-symbols-outlined haha">
                        account_circle
                    </span>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <span class="material-symbols-outlined haha">
                        lock
                    </span>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="{{route('password.request')}}">Forgot password?</a>
                </div>
                <button type="submit" class="button">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>

    @if(Session::has('error'))
        <script>
            showInvalidAccountMessage();
        </script>
    @endif
</body>

</html>
