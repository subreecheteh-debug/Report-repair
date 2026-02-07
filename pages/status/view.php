<div class="alert alert-info">
      <i class="bi bi-tools"></i> รายละเอียดสถานะงานซ่อมภายในหมู่บ้าน
    </div>

    <?php
      $sql = "SELECT * FROM repair WHERE repair_id = ".$_GET["repair_id"]."";//ดึงจากตาราง
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>

    <div class="card p-4">
      <h4 class="mb-3">รายละเอียดใบแจ้งซ่อม</h4>
      <table class="table table-bordered">
        <tr>
          <th style="width: 25%">รหัสใบแจ้งซ่อม</th>
          <td><?=$row["repair_form"];?></td>
        </tr>
        <tr>
          <th>วันที่แจ้งซ่อม</th>
          <td><?=$row["repair_date"];?></td>
        </tr>
        <tr>
          <th>ผู้แจ้งซ่อม</th>
          <td><?=$row["repair_user"];?></td>
        </tr>
        <tr>
          <th>บ้านเลขที่ / หน่วยงาน</th>
          <td><?=$row["repair_list"];?></td>
        </tr>
        <tr>
          <th>รายการแจ้งซ่อม</th>
          <td><?=$row["repair_list"];?></td>
        </tr>
        <tr>
          <th>รายละเอียดเพิ่มเติม</th>
          <td><?=$row["repair_details"];?></td>
        </tr>
        <tr>
          <th>ผู้รับผิดชอบ</th>
          <td><?=$row["repair_responsible"];?></td>
        </tr>
        <tr>
          <th>สถานะปัจจุบัน</th>
          <td><span class="badge bg-warning text-dark"><?=$row["repair_status"];?></span></td>
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