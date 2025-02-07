<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            overflow-x: hidden;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            background: #28a745;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            color: #fff;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .sidebar .active {
            font-weight: bold;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<nav class="sidebar">
    <h3 class="mb-4">Admin Dashboard</h3>
    <ul class="nav flex-column">
        <li class="nav-item mb-3">
            <a href="#" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item mb-3">
            <a href="#" class="nav-link">Products</a>
        </li>
        <li class="nav-item mb-3">
            <a href="#" class="nav-link active">Orders</a>
        </li>
        <li class="nav-item mb-3">
            <a href="#" class="nav-link">Customers</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Reports</a>
        </li>
    </ul>
</nav>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col">
                <h1 class="h3">Orders</h1>
                <p class="text-muted">Manage and track all orders</p>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="row">
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Paracetamol</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>2024-12-24</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">View</button>
                                        <button class="btn btn-sm btn-danger">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>Cough Syrup</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>2024-12-23</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">View</button>
                                        <button class="btn btn-sm btn-danger">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Michael Lee</td>
                                    <td>Antibiotics</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                    <td>2024-12-22</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
