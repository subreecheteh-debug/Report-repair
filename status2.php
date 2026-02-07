<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สถานะการซ่อม | ระบบแจ้งซ่อมภายในหมู่บ้าน</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #f9fafb;
    }
    .navbar {
      background-color: #2c3e50;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .badge {
      font-size: 1em;
      padding: 6px 10px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <?php
      include('master/navbar.php');
  ?>

  <!-- Content -->
  <div class="container mt-4">
    <div class="alert alert-info">
      <i class="bi bi-tools"></i> รายละเอียดสถานะงานซ่อมภายในหมู่บ้าน
    </div>

    <div class="card p-4">
      <h4 class="mb-3">รายละเอียดใบแจ้งซ่อม</h4>
      <table class="table table-bordered">
        <tr>
          <th style="width: 25%">รหัสใบแจ้งซ่อม</th>
          <td>LVC-005337</td>
        </tr>
        <tr>
          <th>วันที่แจ้งซ่อม</th>
          <td>20 ตุลาคม 2568</td>
        </tr>
        <tr>
          <th>ผู้แจ้งซ่อม</th>
          <td>ซุบรี เจะเตะ</td>
        </tr>
        <tr>
          <th>บ้านเลขที่ / หน่วยงาน</th>
          <td>15/2 หมู่บ้านสวนทอง</td>
        </tr>
        <tr>
          <th>รายการแจ้งซ่อม</th>
          <td>ระบบอินเทอร์เน็ตไม่เชื่อมต่อ</td>
        </tr>
        <tr>
          <th>รายละเอียดเพิ่มเติม</th>
          <td>อินเทอร์เน็ตไม่สามารถใช้งานได้ตั้งแต่วันที่ 19 ต.ค. 2568 และมีไฟสถานะสีแดงบน Router</td>
        </tr>
        <tr>
          <th>ผู้รับผิดชอบ</th>
          <td>ฝ่ายช่างเทคนิค (นายสมชาย ใจดี)</td>
        </tr>
        <tr>
          <th>สถานะปัจจุบัน</th>
          <td><span class="badge bg-warning text-dark">กำลังซ่อม</span></td>
        </tr>
      </table>

      <hr>

      <h5>ประวัติการดำเนินงาน</h5>
      <ul class="list-group mb-3">
        <li class="list-group-item">
          <b>20 ต.ค. 2568</b> - รับเรื่องและจัดส่งให้ฝ่ายช่างเทคนิค
        </li>
        <li class="list-group-item">
          <b>21 ต.ค. 2568</b> - ช่างเข้าตรวจสอบ พบว่า Router เสีย ต้องเปลี่ยนใหม่
        </li>
        <li class="list-group-item">
          <b>22 ต.ค. 2568</b> - อยู่ระหว่างรออุปกรณ์ทดแทนจากผู้จำหน่าย
        </li>
      </ul>

      <div class="text-end">
        <a href="index.html" class="btn btn-secondary">ย้อนกลับ</a>
        <button class="btn btn-success">ปิดงานซ่อม</button>
      </div>
    </div>
  </div>

  <footer class="mt-5 text-center text-muted">
    <p>Copyright © วิทยาลัยอาชีวศึกษาปัตตานี | พัฒนาโดย  ซุบรี เจะเตะ</p>
  </footer>
</body>
</html>
