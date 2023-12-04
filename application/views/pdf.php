<!-- pdf.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDF Content</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
        }

        th {
            background-color: #343a40;
            color: #fff;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PDF Content</h1>

        <!-- Example: Generate a Bootstrap table based on the $entry data -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Account</th>
                    <th>Customer Name</th>
                    <th>OTS Amount</th>
                    <th>Sanction Date</th>
                    <th>Expiry Date</th>
                    <th>Updated By</th>
                    <!-- Add other table headers -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $entry['id']; ?></td>
                    <td><?php echo $entry['accounts']; ?></td>
                    <td><?php echo $entry['customer_name']; ?></td>
                    <td><?php echo $entry['ots_amount']; ?></td>
                    <td><?php echo $entry['sanction_date']; ?></td>
                    <td><?php echo $entry['expiry_date']; ?></td>
                    <td><?php echo $entry['updated_by']; ?></td>
                    <!-- Add other table data -->
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
