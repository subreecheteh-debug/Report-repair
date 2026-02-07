$(document).ready(function () {
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
        backgroundColor: 'rgba(59, 130, 246, 0.8)', // Primary Blue
        borderColor: '#3b82f6',
        borderWidth: 1,
        borderRadius: 5
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: { color: '#f3f4f6' }
        },
        x: {
          grid: { display: false }
        }
      }
    }
  });

  // Chart 2 - แยกตามสถานะ
  new Chart(document.getElementById('statusChart'), {
    type: 'doughnut',
    data: {
      labels: Object.keys(repairStats.status),
      datasets: [{
        data: Object.values(repairStats.status),
        backgroundColor: [
          '#f59e0b', // Waiting (Yellow/Amber)
          '#3b82f6', // In Progress (Blue)
          '#10b981'  // Done (Emerald)
        ],
        borderWidth: 0,
        hoverOffset: 4
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom',
          labels: {
            usePointStyle: true,
            padding: 20,
            font: { family: "'Prompt', sans-serif" }
          }
        }
      }
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
        borderColor: '#6366f1', // Indigo
        backgroundColor: 'rgba(99, 102, 241, 0.1)',
        tension: 0.4,
        pointBackgroundColor: '#fff',
        pointBorderColor: '#6366f1',
        pointBorderWidth: 2,
        pointRadius: 4
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: { color: '#f3f4f6' }
        },
        x: {
          grid: { display: false }
        }
      }
    }
  });
});