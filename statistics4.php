<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สถิติการแจ้งซ่อม | ระบบแจ้งซ่อมภายในหมู่บ้าน</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body { background-color: #f9fafb; }
    .navbar { background-color: #2c3e50; }
    .card { border-radius: 15px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
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
      <i class="bi bi-bar-chart-fill"></i> สถิติการแจ้งซ่อมประจำเดือน
    </div>

    <div class="row g-4">
      <!-- สถิติตามประเภทปัญหา -->
      <div class="col-md-6">
        <div class="card p-3">
          <h5 class="text-center">จำนวนการแจ้งซ่อมแยกตามประเภท</h5>
          <canvas id="typeChart" height="200"></canvas>
        </div>
      </div>

      <!-- สถิติตามสถานะ -->
      <div class="col-md-6">
        <div class="card p-3">
          <h5 class="text-center">สถานะการซ่อมทั้งหมด</h5>
          <canvas id="statusChart" height="200"></canvas>
        </div>
      </div>
    </div>

    <div class="card mt-4 p-3">
      <h5 class="text-center">จำนวนการแจ้งซ่อมในแต่ละเดือน</h5>
      <canvas id="monthChart" height="120"></canvas>
    </div>
  </div>

  <footer class="mt-5 text-center text-muted">
    <p>Copyright © วิทยาลัยอาชีวศึกษาปัตตานี | พัฒนาโดย ซุบรี เจะเตะ</p>
  </footer>

  <script>
    // 📊 จำลองข้อมูล (สามารถดึงจากฐานข้อมูลจริงได้ภายหลัง)
    const repairStats = {
      types: {
        "ระบบไฟฟ้า": 8,
        "ระบบน้ำประปา": 4,
        "ระบบอินเทอร์เน็ต": 6,
        "ระบบคอมพิวเตอร์": 3,
        "อื่น ๆ": 2
      },
      status: {
        "รอซ่อม": 5,
        "กำลังซ่อม": 4,
        "เสร็จสิ้น": 6
      },
      months: {
        "ม.ค.": 3,
        "ก.พ.": 5,
        "มี.ค.": 4,
        "เม.ย.": 2,
        "พ.ค.": 6,
        "มิ.ย.": 3,
        "ก.ค.": 4,
        "ส.ค.": 5,
        "ก.ย.": 2,
        "ต.ค.": 7,
        "พ.ย.": 3,
        "ธ.ค.": 4
      }
    };

    // Chart 1 - แยกตามประเภท
    new Chart(document.getElementById('typeChart'), {
      type: 'bar',
      data: {
        labels: Object.keys(repairStats.types),
        datasets: [{
          label: 'จำนวนครั้ง',
          data: Object.values(repairStats.types),
          backgroundColor: '#3498db'
        }]
      },
      options: {
        responsive: true,
        scales: { y: { beginAtZero: true } }
      }
    });

    // Chart 2 - แยกตามสถานะ
    new Chart(document.getElementById('statusChart'), {
      type: 'doughnut',
      data: {
        labels: Object.keys(repairStats.status),
        datasets: [{
          data: Object.values(repairStats.status),
          backgroundColor: ['#e74c3c', '#f1c40f', '#2ecc71']
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { position: 'bottom' } }
      }
    });

    // Chart 3 - แยกตามเดือน
    new Chart(document.getElementById('monthChart'), {
      type: 'line',
      data: {
        labels: Object.keys(repairStats.months),
        datasets: [{
          label: 'จำนวนแจ้งซ่อม',
          data: Object.values(repairStats.months),
          fill: true,
          borderColor: '#2980b9',
          backgroundColor: 'rgba(52, 152, 219, 0.3)',
          tension: 0.3
        }]
      },
      options: {
        responsive: true,
        scales: { y: { beginAtZero: true } }
      }
    });
  </script>
</body>
</html>
