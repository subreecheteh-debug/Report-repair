<script src="pages/home/view.js"></script>
<div class="alert alert-info">
    <i class="bi bi-info-circle"></i> ระบบบันทึกข้อมูลแจ้งซ่อมอุปกรณ์ ระบบภายในหมู่บ้าน
</div>

<div class="card shadow-custom border-0 mb-4">
    <div class="card-header bg-white border-0 py-3">
        <div class="d-flex align-items-center">
            <div class="bg-primary bg-opacity-10 text-primary rounded p-2 me-3">
                <i class="bi bi-house-door-fill fs-4"></i>
            </div>
            <h5 class="mb-0 fw-bold text-primary">หน้าแรก</h5>
        </div>
    </div>
    <div class="card-body">
        <h6 class="text-muted mb-4">ภาพรวมระบบ</h6>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card bg-gradient-primary text-white h-100 stat-card border-0">
                    <div class="card-body text-center p-4">
                        <div class="mb-3 text-white-50"><i class="bi bi-people-fill fs-1"></i></div>
                        <h5 class="card-title text-white">จำนวนผู้ใช้</h5>
                        <p class="card-text fs-2 fw-bold" id="stat_users">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-gradient-info text-white h-100 stat-card border-0">
                    <div class="card-body text-center p-4">
                        <div class="mb-3 text-white-50"><i class="bi bi-clipboard-data-fill fs-1"></i></div>
                        <h5 class="card-title text-white">จำนวนปัญหาทั้งหมด</h5>
                        <p class="card-text fs-2 fw-bold" id="stat_total">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-gradient-warning text-white h-100 stat-card border-0">
                    <div class="card-body text-center p-4">
                        <div class="mb-3 text-white-50"><i class="bi bi-tools fs-1"></i></div>
                        <h5 class="card-title text-white">กำลังแก้ไข</h5>
                        <p class="card-text fs-2 fw-bold" id="stat_progress">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-gradient-success text-white h-100 stat-card border-0">
                    <div class="card-body text-center p-4">
                        <div class="mb-3 text-white-50"><i class="bi bi-check-circle-fill fs-1"></i></div>
                        <h5 class="card-title text-white">แก้ไขเสร็จสิ้น</h5>
                        <p class="card-text fs-2 fw-bold" id="stat_resolved">0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

