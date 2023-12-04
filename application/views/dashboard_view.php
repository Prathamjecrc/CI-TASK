<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        h2 {
            margin-bottom: 20px;
        }
        /* Styling for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .action-links a {
            margin-right: 5px;
            text-decoration: none;
            color: blue;
        }
        .action-links a:hover {
            color: red;
        }
        .logout-link {
            float: right;
            margin-top: -40px;
            text-decoration: none;
            color: blue;
        }
        .logout-link:hover {
            color: red;
        }
        .add-link {
            float: left;
            margin-top: 0px;
            text-decoration: none;
            color: blue;
        }
        .add-link:hover {
            color: black;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Dashboard</h2>
        <a href="<?php echo base_url('login/logout'); ?>" class="logout-link">Logout</a>
        <a href="<?php echo base_url('dashboard/add'); ?>" class="add-link">Add New Entry</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Accounts</th>
                    <th>Customer Name</th>
                    <th>OTS Amount</th>
                    <th>Sanction Date</th>
                    <th>Expiry Date</th>
                    <th>Updated By</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ots_data as $row) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['accounts']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['ots_amount']; ?></td>
                        <td><?php echo $row['sanction_date']; ?></td>
                        <td><?php echo $row['expiry_date']; ?></td>
                        <td><?php echo $row['updated_by']; ?></td>
                        <td class="action-links">
                            <a href="<?php echo base_url('dashboard/edit/' . $row['id']); ?>">Edit</a>
                            <a href="<?php echo base_url('dashboard/delete/' . $row['id']); ?>" onclick="return confirm('Are you sure you want to delete this entry?');">Delete</a>
                            <a href="<?php echo base_url('dashboard/print/' . $row['id']); ?>">Print</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
