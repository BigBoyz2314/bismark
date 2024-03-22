<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-nav">
        <div class="container-fluid w-75">
            <div class="d-flex flex-column py-1">
                <a class="navbar-brand p-0 fw-bold text-light fs-3" href="#">Bismarck Business Group, LLC</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="change-password.php">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>


    
    <nav class="navbar navbar-expand-lg bg-light text-primary border-bottom border-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 fw-semibold">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="index.php">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="bank-reg.php">Bank Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="software-reg.php">Software Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="production.php">Production</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="registration-codes.php">Registration Codes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="installation.php">Installation & Updates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="la-biblia.php">La Biblia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="software.php">Software Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="inquiries.php">Inquiries</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
	<div class="container-fluid w-75">
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Production 2023</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="table-warning">
                        <tr>
                            <th></th>
                            <th>2022</th>
                            <th>2021</th>
                            <th>2020</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Individuals - Accepted</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Corporations C - Accepted</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Corporations S - Accepted</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Partnership LLC - Acepted</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Non Profit Org - Accepted</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Total</td>
                            <td class="fw-bold">0</td>
                            <td class="fw-bold">0</td>
                            <td class="fw-bold">0</td>
                            <td class="fw-bold">0</td>
                        </tr>
                        <tr>
                            <td>Total Fee Collect Approved</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Total Trasmisions Efile only</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>