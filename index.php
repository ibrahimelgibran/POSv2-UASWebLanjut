<?php include('server/connection.php'); ?>
<?php include('login.php');?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #003285 !important;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }
        .container {
            text-align: center;
            position: relative;
        }
        .main {
            position: relative;
        }
        .main img {
            max-width: 100%;
            height: auto;
            max-height: 80vh;
            margin-bottom: 48px;
        }
        .fixed-top-center {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
        }
        .btn {
            display: inline-block;
            width: 200px; /* Adjust the width as needed */
            margin: 10px; /* Adjust the margin as needed */
            background-color: #003285;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #3ABEF9 !important;
        }
    </style>
    <?php include('templates/head.php'); ?>
    <script src="bootstrap4/jquery/sweetalert.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="fixed-top-center">
            <button type="button" id="admin" class="btn btn-lg btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm">
                <i class="fas fa-user-tie"></i> Administrator
            </button>
            <button type="button" id="user" class="btn btn-lg btn-secondary" data-toggle="modal" data-target="#modal-user">
                <i class="fas fa-user"></i> User
            </button>
        </div>
        <div class="main">
            <img class="img-fluid" src="images/ba.png" style="border-radius: 30%;" alt="Logo"/>
            <?php include('error.php'); ?>
        </div>
    </div>
    <script src="bootstrap4/jquery/jquery.min.js"></script>
    <script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
    <?php include('modals/admin_login_modal.php'); ?>
    <?php include('modals/employee_login_modal.php'); ?>
</body>
</html>
