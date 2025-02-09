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
        <h2 class="mb-4">Change Password</h2>
        <form id="changePasswordForm" enctype="multipart/form-data">
            
            <!-- Current Password -->
            <div class="mb-3">
                <label for="currentPassword" class="form-label">Current Password</label>
                <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password" required>
                <div class="alert alert-danger d-none" id="currentPasswordError">Please enter your current password.</div>
            </div>

            <!-- New Password -->
            <div class="mb-3">
                <label for="newPassword" class="form-label">New Password</label>
                <input type="password" class="form-control" id="newPassword" placeholder="Enter new password" required>
                <div class="alert alert-danger d-none" id="newPasswordError">New password must be at least 6 characters long and contain both letters and numbers.</div>
            </div>

            <!-- Confirm New Password -->
            <div class="mb-3">
                <label for="confirmNewPassword" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" id="confirmNewPassword" placeholder="Confirm new password" required>
                <div class="alert alert-danger d-none" id="confirmNewPasswordError">Passwords do not match.</div>
            </div>

            <button type="submit" class="btn btn-primary w-100">
            <i class="fas fa-key me-2"></i>Change Password</button>
        </form>
    </div>
</div>

    </div>
</div>




<?php
include("common/footer.php");
?>