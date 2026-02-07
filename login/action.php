<?php

    require_once '../php/config.php';
    session_start();

    $fn = $_POST['fn'] ?? "";

    switch ($fn) {

        case "login": login($conn); break;
        case "logout": logout($conn); break;

        default:
            echo json_encode([
                "status" => "error",
                "message" => "Invalid function"
            ]);
        break;
    }

    function login($conn) {
        $username = $_POST['admin_username'];
        $password = md5($_POST['admin_password']);

        // 1. ค้นหา admin_username ในฐานข้อมูล
        $sql = "SELECT admin_id, admin_name, admin_password, admin_role FROM admins WHERE admin_username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            // 2. ตรวจสอบรหัสผ่านที่กรอกมา เทียบกับตัวที่ Hash ไว้ใน DB
            if ($password = $row['admin_password']) {
                
                $_SESSION['admin_id'] = $row['admin_id'];
                $_SESSION['admin_name'] = $row['admin_name'];
                $_SESSION['admin_role'] = $row['admin_role'];

                echo json_encode([
                    "status" => "success",
                    "message" => "เข้าสู่ระบบสำเร็จ"
                ]);
            } else {
                // รหัสผ่านไม่ตรง
                echo json_encode([
                    "status" => "error", 
                    "message" => "รหัสผ่านไม่ถูกต้อง"
                ]);
            }
        } else {
            // ไม่พบชื่อผู้ใช้นี้
            echo json_encode([
                "status" => "error", 
                "message" => "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง"
            ]);
        }
        
        $stmt->close();

    }

    function logout() {
        session_destroy();
        echo json_encode([
            "status" => "success"
        ]);
    }
?>


