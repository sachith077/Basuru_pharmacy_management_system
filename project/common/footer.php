<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- user registration form validation  -->
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