<?php

    include('../../php/config.php');

    $fn = $_POST['fn'] ?? "";

    switch ($fn) {

        case "select_admin": select_admin($conn); break;
        case "insert_admin": insert_admin($conn); break;
        case "update_admin": update_admin($conn); break;
        case "get_admin":    get_admin($conn);    break;
        case "delete_admin": delete_admin($conn); break;

        default:
            echo json_encode([
                "status" => "error",
                "message" => "Invalid function"
            ]);
        break;
    }

    $conn->close();

    //================ ฟังก์ชันดึงข้อมูล ===========================

    function select_admin($conn) {

        $sql = "SELECT * FROM admins ORDER BY admin_id DESC";//ดึงจากตาราง
        $result = $conn->query($sql);

        $admins = [];
        while ($row = $result->fetch_assoc()) {
            $admins[] = $row;
        }

        echo json_encode([
            "status" => "success",
            "data" => $admins
        ]);
    }

    //================== ฟังก์ชันเพิ่มข้อมูล ===========================

    function insert_admin($conn) {

        $sql = "INSERT INTO admins 
                (admin_name, admin_username, admin_password, admin_phone)
                VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        $password = md5($_POST['admin_password']);

        $stmt->bind_param(
            "ssss",
            $_POST['admin_name'],
            $_POST['admin_username'],
            $password,
            $_POST['admin_phone']
        );

        $stmt->execute();

        echo json_encode(["status" => "success"]);
    }


    //=================== ฟังก์ชันแก้ไขข้อมูล ==========================

    function update_admin($conn) {
        $sql = "UPDATE admins 
                SET admin_name=?, admin_username=?, admin_password=?, admin_phone=?
                WHERE admin_id=?";

        $stmt = $conn->prepare($sql);
        $password = md5($_POST['admin_password']);
        $stmt->bind_param(
            "ssssi",
            $_POST['admin_name'],//ค่า admin_name ที่ส่งมา
            $_POST['admin_username'],//ค่า admin_address ที่ส่งมา
            $password,//ค่า admin_password ที่ส่งมา
            $_POST['admin_phone'],//ค่า admin_phone ที่ส่งมา
            $_POST['admin_id']//ค่า admin_id ที่ส่งมา
        );

        $stmt->execute();

        echo json_encode(["status" => "success"]);
    }

    //================== ฟังก์ชันดึง admin มาแก้ไข ==================
    function get_admin($conn) {
        $sql = "SELECT * FROM admins WHERE admin_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_POST['admin_id']);
        $stmt->execute();

        $result = $stmt->get_result();
        echo json_encode([
            "status" => "success",
            "data" => $result->fetch_assoc()
        ]);
    }

    //=================== ฟังก์ชันลบข้อมูล =============================

    function delete_admin($conn) {
        $sql = "DELETE FROM admins WHERE admin_id=?";//ลบในตาราง admins
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_POST['admin_id']);//ลบในตาราง admin_id ที่ส่งมา

        if ($stmt->execute()) {
            echo json_encode([
                "status" => "success"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "ไม่สามารถลบข้อมูลได้"
            ]);
        }
    }



