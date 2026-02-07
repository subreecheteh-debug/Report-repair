<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แจ้งปัญหา / แจ้งซ่อม | ระบบแจ้งซ่อมภายในหมู่บ้าน</title>
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
  </style>
</head>

<body>
  <!-- Navbar -->
  <?php
      include('master/navbar.php');
  ?>

  <!-- Content -->
  <div class="container mt-4">
    <div class="alert alert-primary">
      <i class="bi bi-pencil-square"></i> แบบฟอร์มแจ้งปัญหา / แจ้งซ่อม
    </div>

    <div class="card p-4">
      <form action="save_report.php" method="POST">
        <div class="mb-3">
          <label class="form-label">ชื่อผู้แจ้งซ่อม</label>
          <input type="text" class="form-control" name="reporter_name" placeholder="กรอกชื่อ-สกุล" required>
        </div>

        <div class="mb-3">
          <label class="form-label">หน่วยงาน / บ้านเลขที่</label>
          <input type="text" class="form-control" name="department" placeholder="เช่น 15/2 หมู่บ้านสวนทอง" required>
        </div>

        <div class="mb-3">
          <label class="form-label">ประเภทปัญหา</label>
          <select class="form-select" name="problem_type" required>
            <option value="">-- เลือกประเภทปัญหา --</option>
            <option value="ระบบไฟฟ้า">ระบบไฟฟ้า</option>
            <option value="ระบบน้ำประปา">ระบบน้ำประปา</option>
            <option value="ระบบอินเทอร์เน็ต">ระบบอินเทอร์เน็ต</option>
            <option value="ระบบคอมพิวเตอร์">ระบบคอมพิวเตอร์</option>
            <option value="อื่น ๆ">อื่น ๆ</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">รายละเอียดปัญหา</label>
          <textarea class="form-control" name="problem_detail" rows="4" placeholder="ระบุรายละเอียดเพิ่มเติม..." required></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">วันที่แจ้ง</label>
          <input type="date" class="form-control" name="report_date" required>
        </div>

        <div class="text-end">
          <button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
          <button type="submit" class="btn btn-success">ส่งข้อมูลแจ้งซ่อม</button>
        </div>
      </form>
    </div>
  </div>

  <footer class="mt-5 text-center text-muted">
    <p>Copyright © วิทยาลัยอาชีวศึกษาปัตตานี | พัฒนาโดย  ซุบรี เจะเตะ </p>
  </footer>
</body>
</html>
