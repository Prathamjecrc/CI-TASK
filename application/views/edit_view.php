<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form'); // Load form helper
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Entry</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-container h2 {
            margin-bottom: 30px;
            text-align: center;
        }
        .form-control {
            border-radius: 6px;
            border-color: #ced4da;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-update {
            width: 100%;
        }
        .btn-back {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2>Edit Entry</h2>
                    <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-secondary btn-back mb-4">Back to Dashboard</a>
                    
                    <?php echo form_open('dashboard/update', 'class="form"'); ?>
                        <input type="hidden" name="id" value="<?php echo $entry['id']; ?>">
                        
                        <div class="form-group">
                            <label for="accounts">Accounts:</label>
                            <input type="text" class="form-control" name="accounts" value="<?php echo $entry['accounts']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="customer_name">Customer Name:</label>
                            <input type="text" class="form-control" name="customer_name" value="<?php echo $entry['customer_name']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="ots_amount">OTS Amount:</label>
                            <input type="text" class="form-control" name="ots_amount" value="<?php echo $entry['ots_amount']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="sanction_date">Sanction Date:</label>
                            <input type="date" class="form-control" name="sanction_date" value="<?php echo $entry['sanction_date']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="expiry_date">Expiry Date:</label>
                            <input type="date" class="form-control" name="expiry_date" value="<?php echo $entry['expiry_date']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="updated_by">Updated By:</label>
                            <input type="text" class="form-control" name="updated_by" value="<?php echo $entry['updated_by']; ?>">
                        </div>

                        <button type="submit" class="btn btn-primary btn-update">Update Entry</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
