<!DOCTYPE html>
<html>
<head>
    <title>Add New Entry</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        h2 {
            margin-bottom: 30px;
            text-align: center;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 3px;
        }
        button[type="submit"] {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Entry</h2>
        <form action="<?php echo base_url('dashboard/insert'); ?>" method="post">
            <div class="form-group">
                <label for="accounts">Accounts:</label>
                <input type="text" class="form-control" id="accounts" name="accounts" required>
            </div>
            <div class="form-group">
                <label for="customer_name">Customer Name:</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
            </div>
            <div class="form-group">
                <label for="ots_amount">OTS Amount:</label>
                <input type="text" class="form-control" id="ots_amount" name="ots_amount" required>
            </div>
            <div class="form-group">
                <label for="sanction_date">Sanction Date:</label>
                <input type="date" class="form-control" id="sanction_date" name="sanction_date" required>
            </div>
            <div class="form-group">
                <label for="expiry_date">Expiry Date:</label>
                <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
            </div>
            <div class="form-group">
                <label for="updated_by">Updated By:</label>
                <input type="text" class="form-control" id="updated_by" name="updated_by" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Entry</button>
            </div>
        </form>
    </div>
</body>
</html>
