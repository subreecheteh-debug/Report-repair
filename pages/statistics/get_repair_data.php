<?php
include 'db.php';

$data = [
    "types" => [],
    "status" => [],
    "months" => []
];

$sql = "SELECT repair_form, repair_status, repair_date FROM repair";
$result = $conn->query($sql);

$monthName = [
    "01"=>"ม.ค.","02"=>"ก.พ.","03"=>"มี.ค.","04"=>"เม.ย.",
    "05"=>"พ.ค.","06"=>"มิ.ย.","07"=>"ก.ค.","08"=>"ส.ค.",
    "09"=>"ก.ย.","10"=>"ต.ค.","11"=>"พ.ย.","12"=>"ธ.ค."
];

while($row = $result->fetch_assoc()){

    // ประเภท
    $form = $row['repair_form'];
    if(!isset($data["types"][$form])) $data["types"][$form] = 0;
    $data["types"][$form]++;

    // สถานะ
    $status = $row['repair_status'];
    if(!isset($data["status"][$status])) $data["status"][$status] = 0;
    $data["status"][$status]++;

    // เดือน
    $dateParts = explode("/", $row['repair_date']);
    if(count($dateParts) == 3){
        $month = $dateParts[1];
        if(isset($monthName[$month])){
            if(!isset($data["months"][$monthName[$month]]))
                $data["months"][$monthName[$month]] = 0;
            $data["months"][$monthName[$month]]++;
        }
    }
}

$conn->close();
?>