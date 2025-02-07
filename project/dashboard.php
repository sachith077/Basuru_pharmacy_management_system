<?php
include("common/header.php");

?>
<body>

<?php
include("SideNav.php");

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
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text display-6">120</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">New Orders</h5>
                        <p class="card-text display-6">45</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>
                        <p class="card-text display-6">89</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Revenue</h5>
                        <p class="card-text display-6">$12K</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Recent Orders</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Paracetamol</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>2024-12-24</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>Cough Syrup</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>2024-12-23</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Michael Lee</td>
                                    <td>Antibiotics</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                    <td>2024-12-22</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("common/footer.php");
?>
