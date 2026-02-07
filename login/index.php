<?php
    session_start();
    if (isset($_SESSION["admin_id"])) {
        header("Location:../");
    }
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ | ศูนย์ข้อมูลงานแจ้งซ่อม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <!-- Animated Background Shapes -->
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>

    <div class="glass-card">
        <div class="login-header">
            <h2>ยินดีต้อนรับ</h2>
            <p>กรุณาลงชื่อเข้าใช้เพื่อดำเนินการต่อ</p>
        </div>
        
        <form id="loginForm">
            <input type="hidden" id="fn" name="fn" value="login">
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="admin_username" name="admin_username" placeholder="name@example.com" required>
                <label for="admin_username">บัญชีผู้ใช้</label>
            </div>
            
            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="admin_password" name="admin_password" placeholder="Password" required>
                <label for="admin_password">รหัสผ่าน</label>
            </div>
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">จดจำฉันไว้</label>
                </div>
            </div>

            <button class="w-100 btn btn-primary btn-login" type="submit">
                เข้าสู่ระบบ
            </button>
        </form>
    </div>
</body>

</html>