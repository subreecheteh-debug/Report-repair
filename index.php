<?php
    session_start();
    require_once('php/config.php');
    if (!isset($_SESSION["admin_id"])) {
        header("Location:./login");
        exit();
    }
    $page = (!isset($_GET["page"])) ? 'home' : $_GET["page"] ;
?>
</html>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ศูนย์ข้อมูลงานแจ้งซ่อม</title>
    <!-- Google Fonts: Prompt -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- แถบเมนู -->
    
        <?php
            include('master/navbar.php');
        ?>
    <div class="container mt-4">
        <?php include('pages/'.$page.'/view.php')?>
    </div>

    <footer class="mt-5 text-center">
        <p>Copyright © วิทยาลัยอาชีวศึกษาปัตาานี | พัฒนาโดย ซุบรี เจะเตะ</p>
    </footer>
</body>
</html>