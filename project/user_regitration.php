<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .is-invalid {
            border-color: red !important;
        }
        .is-valid {
            border-color: green !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">User Registration</h2>
        <form id="registrationForm">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                <div class="alert alert-danger d-none" id="usernameError">Username must be 3-15 characters long and contain only letters, numbers, and underscores.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                <div class="alert alert-danger d-none" id="emailError">Enter a valid email address.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                <div class="alert alert-danger d-none" id="passwordError">Password must be at least 6 characters long and contain both letters and numbers.</div>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" required>
                <div class="alert alert-danger d-none" id="confirmPasswordError">Passwords do not match.</div>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    
    <script>
        $(document).ready(function () {
            function validateInput(input, regex, errorDiv) {
                if (regex.test(input.val())) {
                    input.removeClass("is-invalid").addClass("is-valid");
                    $(errorDiv).addClass("d-none");
                } else {
                    input.removeClass("is-valid").addClass("is-invalid");
                    $(errorDiv).removeClass("d-none");
                }
            }

            $("#username").on("keyup", function () {
                validateInput($(this), /^[a-zA-Z0-9_]{3,15}$/, "#usernameError");
            });

            $("#email").on("keyup", function () {
                validateInput($(this), /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/, "#emailError");
            });

            $("#password").on("keyup", function () {
                validateInput($(this), /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/, "#passwordError");
            });

            $("#confirmPassword").on("keyup", function () {
                if ($(this).val() === $("#password").val() && $(this).val().length > 0) {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                    $("#confirmPasswordError").addClass("d-none");
                } else {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    $("#confirmPasswordError").removeClass("d-none");
                }
            });

            $("#registrationForm").on("submit", function (e) {
                e.preventDefault();
                let isValid = $(".is-invalid").length === 0;
                if (isValid) {
                    $.ajax({
                        url: "register.php",
                        type: "POST",
                        data: $(this).serialize(),
                        success: function (response) {
                            alert("Registration Successful!");
                        }
                    });
                } else {
                    alert("Please correct the errors before submitting.");
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>