<?php
include("common/header.php");
include("SideNav_offcanvas.php");
?>
<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col">
                <h1 class="h3">Customer Report</h1>
                <p class="text-muted">Overview of customer details</p>
            </div>
        </div>
        <div class="container mt-5">
            <h2 class="mb-4">Customer List</h2>

            <!-- Customer Table -->
            <table class="table table-bordered table-striped" id="customerTable">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row 1 -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>+1234567890</td>
                        <td>123 Main Street, City</td>
                    </tr>
                    <!-- Example Row 2 -->
                    <tr>
                        <td>2</td>
                        <td>Jane Doe</td>
                        <td>janedoe@example.com</td>
                        <td>+0987654321</td>
                        <td>456 Elm Street, City</td>
                    </tr>

                     <!-- Example Row 2 -->
                     <tr>
                        <td>2</td>
                        <td>Jane Doe</td>
                        <td>janedoe@example.com</td>
                        <td>+0987654321</td>
                        <td>456 Elm Street, City</td>
                    </tr>

                     <!-- Example Row 2 -->
                     <tr>
                        <td>2</td>
                        <td>Jane Doe</td>
                        <td>janedoe@example.com</td>
                        <td>+0987654321</td>
                        <td>456 Elm Street, City</td>
                    </tr>
                    <!-- Additional rows would go here -->
                </tbody>
            </table>
            
            <!-- Print Button -->
            <button class="btn btn-primary mt-3" onclick="printReport()">
                <i class="fas fa-print"></i> Print Report
            </button>
        </div>
    </div>
</div>

<script>
    function printReport() {
        let printContent = document.getElementById("customerTable").outerHTML;
        let printWindow = window.open('', '', 'width=800,height=600');
        printWindow.document.write('<html><head><title>Customer Report</title>');
        printWindow.document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<h2 class="text-center">Customer Report</h2>');
        printWindow.document.write(printContent);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>

</body>
</html>

<?php
include("common/footer.php");
?>