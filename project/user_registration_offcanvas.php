
<?php
    include("common/header.php");
    include("SideNav_offcanvas.php");
    ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col">
                <h1 class="h3">Welcome, Admin</h1>
                <p class="text-muted">Overview of the system's performance</p>
            </div>
        </div>
        
        <!-- User Registration Section -->
        <div class="row mt-5">
            <div class="col">
                <h2 class="mb-4">User Registration</h2>
                <form id="registrationForm" enctype="multipart/form-data" method="POST" action="user_save_function.php">
                    
                    <!-- Profile Picture Upload -->
                    <div class="mb-3 text-center">
                        <img id="imagePreview" src="#" alt="Profile Preview" class="d-none mt-3 rounded" style="max-width: 150px; height: auto;">
                        <label for="profileImage" class="form-label d-block">Upload Profile Picture</label>
                        <input type="file" class="form-control" id="profileImage" accept="image/png, image/jpeg" name="profileImage">
                        <div class="alert alert-danger d-none" id="imageError">Please upload a valid PNG or JPG image.</div>
                    </div>

                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter full name" name="fullName" required>
                    </div>

                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                        <div class="alert alert-danger d-none" id="usernameError">Username must be 3-15 characters long and contain only letters, numbers, and underscores.</div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        <div class="alert alert-danger d-none" id="emailError">Enter a valid email address.</div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                        <div class="alert alert-danger d-none" id="passwordError">Password must be at least 6 characters long and contain both letters and numbers.</div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" required>
                        <div class="alert alert-danger d-none" id="confirmPasswordError">Passwords do not match.</div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert Library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- JavaScript for Image Preview & Validation -->
<script>
    document.getElementById("profileImage").addEventListener("change", function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById("imagePreview");
        const imageError = document.getElementById("imageError");

        if (file) {
            const validTypes = ["image/jpeg", "image/png"];
            if (!validTypes.includes(file.type)) {
                imageError.classList.remove("d-none");
                preview.classList.add("d-none");
            } else {
                imageError.classList.add("d-none");
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove("d-none");
                };
                reader.readAsDataURL(file);
            }
        } else {
            preview.classList.add("d-none");
        }
    });

    // Form submission with SweetAlert confirmation
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent immediate submission

        const form = this;

        // Basic validation checks
        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmPassword").value;

        if (username.length < 3 || username.length > 15 || !/^\w+$/.test(username)) {
            document.getElementById("usernameError").classList.remove("d-none");
            return;
        } else {
            document.getElementById("usernameError").classList.add("d-none");
        }

        if (!email.includes("@")) {
            document.getElementById("emailError").classList.remove("d-none");
            return;
        } else {
            document.getElementById("emailError").classList.add("d-none");
        }

        if (password.length < 6 || !/\d/.test(password) || !/[a-zA-Z]/.test(password)) {
            document.getElementById("passwordError").classList.remove("d-none");
            return;
        } else {
            document.getElementById("passwordError").classList.add("d-none");
        }

        if (password !== confirmPassword) {
            document.getElementById("confirmPasswordError").classList.remove("d-none");
            return;
        } else {
            document.getElementById("confirmPasswordError").classList.add("d-none");
        }

        // Show SweetAlert confirmation
        Swal.fire({
            title: "Confirm Registration",
            text: "Are you sure you want to register this user?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Register"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Submit form to server
            }
        });
    });
</script>


<?php
    include("common/footer.php");
    ?>