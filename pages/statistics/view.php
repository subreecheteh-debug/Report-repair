<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="pages/statistics/view.js"></script>

<div class="card shadow-custom border-0 mb-4">
    <div class="card-header bg-white border-0 py-3 d-flex align-items-center">
        <div class="bg-info bg-opacity-10 text-info rounded p-2 me-3">
            <i class="bi bi-bar-chart-fill fs-4"></i>
        </div>
        <div>
             <h5 class="mb-0 fw-bold text-dark">สถิติการแจ้งซ่อมประจำเดือน</h5>
             <small class="text-muted">ภาพรวมข้อมูลการแจ้งซ่อมและการดำเนินงาน</small>
        </div>
    </div>
    <div class="card-body bg-light">
        <div class="row g-4">
            <!-- สถิติตามประเภทปัญหา -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                         <h6 class="fw-bold text-center text-secondary">จำนวนการแจ้งซ่อมแยกตามประเภท</h6>
                    </div>
                    <div class="card-body">
                         <canvas id="typeChart" height="250"></canvas>
                    </div>
                </div>
            </div>

            <!-- สถิติตามสถานะ -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                        <h6 class="fw-bold text-center text-secondary">สถานะการซ่อมทั้งหมด</h6>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div style="max-width: 350px; width: 100%;">
                             <canvas id="statusChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- สถิติตามเดือน -->
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                        <h6 class="fw-bold text-center text-secondary">แนวโน้มการแจ้งซ่อมในแต่ละเดือน</h6>
                    </div>
                    <div class="card-body">
                         <canvas id="monthChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>