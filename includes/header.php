<!-- This session file contains code that starts/resumes a session -->
<!-- In the header so it is included on every page, allowing session capability to be used on every page -->
<?php include_once 'includes/session.php' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attendance - <?php echo $title ?> </title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css" />


</head>

<body>
    <nav id="myNav" class="topnav navbar navbar-expand-sm navbar-dark bg-primary bg-gradient">

        <a class="logo navbar-brand" href="index.php">IT Conference</a>
        <button id="toggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span id="toggler" class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav me-auto">
                <a id="btnHome" href="index.php" class="nav-item nav-link">Home</a>
                <a id="btnReg" href="viewrecords.php" class="nav-item nav-link">View Attendees</a>
            </div>
            <div class="navbar-nav ms-auto me-3">
                <?php if(!isset($_SESSION['userid'])) { ?>
                    <a href="login.php" class="nav-item nav-link">Login</a>
                <?php } else { ?>
                    <div class="container pt-2"><span class="text-light">Hello, <?php echo $_SESSION['username']?>!</span></div>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                <?php }?>
            </div>
        </div>

    </nav>
    <div id="mainContainer" class="container mt-3 center-">