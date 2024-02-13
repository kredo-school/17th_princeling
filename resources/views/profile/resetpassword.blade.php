@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 15%">
            <div class="col-6">
                <h2 class="text-center">Please create your new Password.</h2>
                <br>
                <form action="#" method="POST">
                    <label for="password" class="form-label mt-3">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <i class="bi bi-eye-slash eye-place1" id="togglePassword1" onclick="togglePasswordVisibility('password', 'togglePassword1', 'confirm-password', 'togglePassword2')"></i>

                    <label for="confirm-password" class="form-label mt-3">Confirm Password</label>
                    <input type="password" name="confirm-password" id="confirm-password" class="form-control mb-4">
                    <i class="bi bi-eye-slash eye-place2" id="togglePassword2" onclick="togglePasswordVisibility('confirm-password', 'togglePassword2', 'password', 'togglePassword1')"></i>

                    <button type="submit" onclick="validateForm(event)" class="btn button-color1 text-white w-50 mt-5" style="margin-left: 25%">Confirm</button>
                </form>
            </div>
        </div>
        <script>
            function togglePasswordVisibility(passwordFieldId, toggleIconId) {
                var passwordField = document.getElementById(passwordFieldId);
                var toggleIcon = document.getElementById(toggleIconId);

                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    toggleIcon.classList.remove("bi-eye-slash");
                    toggleIcon.classList.add("bi-eye");
                } else {
                    passwordField.type = "password";
                    toggleIcon.classList.remove("bi-eye");
                    toggleIcon.classList.add("bi-eye-slash");
                }
            }

            function validateForm(event) {
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirm-password").value;

                if (password === "" || confirmPassword === "") {
                    alert("Please fill in both password fields.");
                    event.preventDefault();
                    return;
                }

                if (password !== confirmPassword) {
                    alert("Passwords do not match.");
                    event.preventDefault();
                    return;
                }
            }
        </script>
    </div>
@endsection