<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
