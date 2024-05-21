<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Sign Up - DoTrack</title>
    <link rel="icon" href="../assets/img/doctracklogo.png">
</head>

<body background="../assets/img/Um_background.png">

    <div class="wrapper-main-1">
        <div class="Signup">
            <h1>Sign Up</h1>
            <h3>It`s quick and easy</h3>
            <form class="sign-up" action="{{ route('register.store') }}" method="post">
                @csrf
                <div class="FLname">
                    <div class="input-box1">
                        <label for="firstName"> First Name </label>
                        <input type="text" class="form-control" id="firstName" name="firstname" value="{{ old('firstname') }}" required>
                    </div>
                    <div class="input-box1">
                        <label for="lastName"> Last Name </label>
                        <input type="text" class="form-control" id="lastName" name="lastname" value="{{ old('lastname') }}" required>
                    </div>
                </div>

                <div class="input-box">
                    <label for="Email"> Email </label>
                    <input type="email" class="form-control" id="Email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="input-box">
                    <label for="Username"> Username </label>
                    <input type="text" class="form-control" id="Username" name="username" value="{{ old('username') }}" required>
                </div>
                <div class="input-box">
                    <label for="Password"> Password </label>
                    <input type="password" class="form-control" id="Password" name="password" required>
                </div>
                <div class="input-box">
                    <label for="Password"> Confirm Password </label>
                    <input type="password" class="form-control" id="Password" name="password_confirmation" required>
                </div>
                <div class="MDY">
                    <div class="birday">
                        <label for="happy">Month:</label>
                        <select name="month" required>
                            <?php
                                 echo "< <option disabled selected>Month</option>";
                            $months = [
                                'January', 'February', 'March', 'April', 'May', 'June',
                                'July', 'August', 'September', 'October', 'November', 'December'
                            ];
                            foreach ($months as $month) {
                                echo "<option value=\"$month\"" . (old('month') == $month ? ' selected' : '') . ">$month</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="birday">
                        <label for="happy">Day:</label>
                        <select name="day" required>
                            <?php
                             echo "< <option disabled selected>Day</option>";
                            for ($day = 1; $day <= 31; $day++) {
                                echo "<option value=\"$day\"" . (old('day') == $day ? ' selected' : '') . ">$day</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="birday">
                        <label for="happy">Year:</label>
                        <select name="year" required>
                            <?php
                             echo "< <option disabled selected>Year</option>";
                            $currentYear = date('Y');
                            for ($year = $currentYear; $year >= 1960; $year--) {
                                echo "<option value=\"$year\"" . (old('year') == $year ? ' selected' : '') . ">$year</option>";
                            }
                            ?>
                        </select>
                    </div>

                </div>
                <div class="gndr">
                    <div class="FM">
                        <label for="gender">Gender: </label>
                        <select name="gender" required>
                            < <option disabled selected></option>";
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Rather not to say" {{ old('gender') == 'Rather not to say' ? 'selected' : '' }}>Rather not to say</option>
                        </select>

                    </div>

                    <div class="learnmore">
                        <p>People who use our service may have uploaded your contact information to Instagram.</p>
                        <a href="">Learn More.</a>
                    </div>
                    <span class="terms">
                        <p>By signing up, you agree to our Terms, Privacy Policy and Cookies Policy.</p>
                    </span>

                    <button type="submit" class="signupbutton">Sign up</button>
                    <div class="register-link">
                        <p> Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                    </div>

            </form>
        </div>
    </div>

    <script>
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ $errors->first() }}',
            });
        @endif
    </script>
</body>

</html>
