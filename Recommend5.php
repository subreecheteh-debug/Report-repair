<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แนะนำการใช้งาน | ระบบแจ้งซ่อมภายในหมู่บ้าน</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body { background: #f8fafc; }
    .navbar { background-color: #2c3e50; }
    .card { border-radius: 14px; }
    .step-box {
      border-left: 5px solid #3498db;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 15px;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.05);
    }
    .step-title { font-weight: bold; }
  </style>
</head>

<body>

<!-- NAV BAR -->
<?php
    include('master/navbar.php');
?>

<!-- Content -->
<div class="container mt-4 mb-5">
  <div class="alert alert-primary">
    <i class="bi bi-info-circle-fill"></i> คู่มือแนะนำการใช้งานระบบแจ้งซ่อมภายในหมู่บ้าน
  </div>

  <!-- Topic 1 -->
  <div class="card p-4 mb-4">
    <h4><i class="bi bi-tools"></i> 1) วิธีแจ้งซ่อม</h4>
    <div class="step-box">
      <p class="step-title"><i class="bi bi-pencil-square"></i> ขั้นตอนที่ 1 : เข้าหน้า "แจ้งปัญหา"</p>
      <p>คลิกเมนูด้านบน <strong>แจ้งปัญหา / แจ้งซ่อม</strong></p>
    </div>
    <div class="step-box">
      <p class="step-title"><i class="bi bi-journal-text"></i> ขั้นตอนที่ 2 : กรอกข้อมูลที่ต้องการแจ้งซ่อม</p>
      <ul>
        <li>ชื่อผู้แจ้ง</li>
        <li>บ้านเลขที่</li>
        <li>หมายเลขโทรศัพท์</li>
        <li>ประเภทงานซ่อม</li>
        <li>รายละเอียดปัญหา</li>
      </ul>
    </div>
    <div class="step-box">
      <p class="step-title"><i class="bi bi-send-check-fill"></i> ขั้นตอนที่ 3 : กดปุ่ม "ส่งเรื่องแจ้งซ่อม"</p>
      <p>ระบบจะบันทึกข้อมูลและขึ้นสถานะเป็น <span class="badge bg-danger">รอซ่อม</span></p>
    </div>
  </div>

  <!-- Topic 2 -->
  <div class="card p-4 mb-4">
    <h4><i class="bi bi-search"></i> 2) การตรวจสอบสถานะซ่อม</h4>
    <div class="step-box">
      <p class="step-title">เปิดหน้า <strong>สถานะการซ่อม</strong></p>
      <p>ระบบจะแสดงรายการทั้งหมด เช่น</p>
      <ul>
        <li>เลขที่ใบแจ้งซ่อม</li>
        <li>ประเภทงานซ่อม</li>
        <li>ผู้รับผิดชอบ</li>
        <li>สถานะปัจจุบัน</li>
      </ul>
    </div>

    <div class="step-box">
      <p class="step-title">สถานะมีทั้งหมด 3 รูปแบบ</p>
      <ul>
        <li><span class="badge bg-danger">รอซ่อม</span> = ช่างยังไม่เข้าไปดำเนินการ</li>
        <li><span class="badge bg-warning text-dark">กำลังซ่อม</span> = อยู่ระหว่างดำเนินการ</li>
        <li><span class="badge bg-success">เสร็จสิ้น</span> = ดำเนินการเรียบร้อยแล้ว</li>
      </ul>
    </div>
  </div>

  <!-- Topic 3 -->
  <div class="card p-4 mb-4">
    <h4><i class="bi bi-bar-chart-line"></i> 3) การดูสถิติ</h4>
    <p>สามารถดูจำนวนการแจ้งซ่อมแต่ละเดือน และสรุปตามประเภทงานซ่อมได้ที่หน้า <strong>สถิติการแจ้งซ่อม</strong></p>
    <p>ระบบแสดงผลเป็นกราฟ:</p>
    <ul>
      <li>กราฟแท่ง – ประเภทงานซ่อม</li>
      <li>กราฟโดนัท – สถานะซ่อม</li>
      <li>กราฟเส้น – จำนวนแจ้งซ่อมรายเดือน</li>
    </ul>
  </div>

  <!-- Topic 4 -->
  <div class="card p-4 mb-4">
    <h4><i class="bi bi-shield-lock"></i> 4) ข้อควรระวังในการใช้งานระบบ</h4>
    <ul>
      <li>ห้ามกรอกข้อมูลเท็จหรือหมายเลขโทรศัพท์ผิด</li>
      <li>ไม่ควรแจ้งซ่อมซ้ำหลายครั้ง ให้ตรวจสอบสถานะก่อน</li>
      <li>ควรอธิบายปัญหาให้ชัดเจนเพื่อให้ช่างดำเนินงานได้เร็วขึ้น</li>
      <li>ระบบจะบันทึกเวลาทุกครั้งที่มีการอัปเดตสถานะ</li>
    </ul>
  </div>

</div>

<footer class="text-center text-muted mb-4">
  Copyright © วิทยาลัยอาชีวศึกษาปัตตานี | พัฒนาโดย  ซุบรี เจะเตะ </p>
  </footer>
</footer>

</body>
</html>
