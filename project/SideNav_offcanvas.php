<!-- Sidebar -->
<nav class="sidebar">
    <h3 class="mb-4"><i class="fas fa-tachometer-alt"></i> Admin Dashboard</h3>
    <ul class="nav flex-column">
        <li class="nav-item mb-3">
            <a href="#" class="nav-link active">
                <i class="fas fa-home"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="#" class="nav-link">
                <i class="fas fa-box"></i> Products
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="#" class="nav-link">
                <i class="fas fa-shopping-cart"></i> Orders
            </a>
        </li>

        <!-- Customers Menu -->
        <li class="nav-item mb-3">
            <a class="nav-link d-flex justify-content-between align-items-center menu-toggle" href="#" data-target="customersMenu">
                <span><i class="fas fa-users"></i> Customers</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="collapse list-unstyled ms-4" id="customersMenu">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-user-plus"></i> Add Customer</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-eye"></i> View Customers</a>
                </li>
            </ul>
        </li>

        <!-- Users Menu -->
        <li class="nav-item mb-3">
            <a class="nav-link d-flex justify-content-between align-items-center menu-toggle" href="#" data-target="usersMenu">
                <span><i class="fas fa-user-cog"></i> Users</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="collapse list-unstyled ms-4" id="usersMenu">
                <li class="nav-item">
                    <a href="user_registration_offcanvas.php" class="nav-link"><i class="fas fa-user-plus"></i> Add User</a>
                </li>
                <li class="nav-item">
                    <a href="view_users.php" class="nav-link"><i class="fas fa-eye"></i> View Users</a>
                </li>
                <li class="nav-item">
                    <a href="change_password.php" class="nav-link"><i class="fas fa-key"></i> Change Password</a>
                </li>
            </ul>
        </li>

        <!-- Reports Menu with Submenus -->
        <li class="nav-item mb-3">
            <a class="nav-link d-flex justify-content-between align-items-center menu-toggle" href="#" data-target="reportsMenu">
                <span><i class="fas fa-chart-line"></i> Reports</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="collapse list-unstyled ms-4" id="reportsMenu">
                <li class="nav-item">
                    <a href="sales_report.php" class="nav-link"><i class="fas fa-chart-bar"></i> Sales Report</a>
                </li>
                <li class="nav-item">
                    <a href="customer_report.php" class="nav-link"><i class="fas fa-user-chart"></i> Customer Report</a>
                </li>
                <li class="nav-item">
                    <a href="inventory_report.php" class="nav-link"><i class="fas fa-warehouse"></i> Inventory Report</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<!-- FontAwesome & Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".menu-toggle").forEach(toggle => {
            toggle.addEventListener("click", function (e) {
                e.preventDefault();
                const targetId = this.getAttribute("data-target");
                const targetMenu = document.getElementById(targetId);
                const chevronIcon = this.querySelector("i.fa-chevron-down");

                // Toggle visibility
                targetMenu.classList.toggle("show");
                chevronIcon.classList.toggle("rotate");

                // Collapse other menus
                document.querySelectorAll(".collapse").forEach(menu => {
                    if (menu !== targetMenu && menu.classList.contains("show")) {
                        menu.classList.remove("show");
                        menu.previousElementSibling.querySelector("i.fa-chevron-down").classList.remove("rotate");
                    }
                });
            });
        });
    });
</script>

<!-- CSS for Rotating Icon -->
<style>
    .rotate {
        transform: rotate(180deg);
        transition: transform 0.3s ease;
    }
</style>
