<?php

    include('../../php/config.php');

    $fn = $_POST['fn'] ?? "";

    switch ($fn) {

        case "select_repair": select_repair($conn); break;
        case "insert_repair": insert_repair($conn); break;
        case "update_repair": update_repair($conn); break;
        case "get_repair":    get_repair($conn);    break;
        case "delete_repair": delete_repair($conn); break;

        default:
            echo json_encode([
                "status" => "error",
                "message" => "Invalid function"
            ]);
        break;
    }

    $conn->close();

    //================ ฟังก์ชันดึงข้อมูล ===========================

    function select_repair($conn) {

        $sql = "SELECT * FROM repair ORDER BY repair_id DESC";//ดึงจากตาราง
        $result = $conn->query($sql);

        $repair = [];
        while ($row = $result->fetch_assoc()) {
            $repair[] = $row;
        }

        echo json_encode([
            "status" => "success",
            "data" => $repair
        ]);
    }

    //================== ฟังก์ชันเพิ่มข้อมูล ===========================

    function insert_repair($conn) {
        //บันทึกข้อมูล
        $sql = "INSERT INTO repair (repair_date, repair_form, repair_user, repair_list,repair_responsible,repair_status,repair_details)
                VALUES (?, ?, ?, ?, ?, ?, ?)";//เปลี่ยนตามจำนวน

        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "sssssss",//เปลี่ยนตามจำนวน
            $_POST['repair_date'],//ค่า user_name ที่ส่งมา
            $_POST['repair_form'],//ค่า user_address ที่ส่งมา
            $_POST['repair_user'],//ค่า user_phone ที่ส่งมา
            $_POST['repair_list'],//ค่า user_phone ที่ส่งมา
            $_POST['repair_responsible'],//ค่า user_phone ที่ส่งมา
            $_POST['repair_status'],//ค่า user_phone ที่ส่งมา
            $_POST['repair_details']//ค่า user_phone ที่ส่งมา
        );

        $stmt->execute();

        echo json_encode(["status" => "success"]);
    }

    //=================== ฟังก์ชันแก้ไขข้อมูล ==========================

    function update_repair($conn) {
        $sql = "UPDATE repair 
                SET repair_date=?, repair_form=?, repair_user=?, repair_list=?, repair_responsible=? , repair_status=?,repair_details=?
                WHERE repair_id=?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "sssssssi",
            $_POST['repair_date'],//ค่า user_name ที่ส่งมา
            $_POST['repair_form'],//ค่า user_address ที่ส่งมา
            $_POST['repair_user'],//ค่า user_phone ที่ส่งมา
            $_POST['repair_list'],//ค่า user_phone ที่ส่งมา
            $_POST['repair_responsible'],//ค่า user_phone ที่ส่งมา
            $_POST['repair_status'],//ค่า user_phone ที่ส่งมา
            $_POST['repair_details'],//ค่า user_phone ที่ส่งมา
            $_POST['repair_id']//ค่า user_id ที่ส่งมา
        );

        $stmt->execute();

        echo json_encode(["status" => "success"]);
    }

    //================== ฟังก์ชันดึง user มาแก้ไข ==================
    function get_repair($conn) {
        $sql = "SELECT * FROM repair WHERE repair_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_POST['repair_id']);
        $stmt->execute();

        $result = $stmt->get_result();
        echo json_encode([
            "status" => "success",
            "data" => $result->fetch_assoc()
        ]);
    }

    //=================== ฟังก์ชันลบข้อมูล =============================

    function delete_repair($conn) {
        $sql = "DELETE FROM repair WHERE repair_id=?";//ลบในตาราง users
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_POST['repair_id']);//ลบในตาราง user_id ที่ส่งมา

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



