<script src="pages/problem/view.js"></script>
<div class="card shadow-custom border-0 mb-4">
    <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <div class="bg-warning bg-opacity-10 text-warning rounded p-2 me-3">
                <i class="bi bi-tools fs-4"></i>
            </div>
            <div>
                <h5 class="mb-0 fw-bold text-dark">รายการแจ้งซ่อม</h5>
                <small class="text-muted">จัดการข้อมูลการแจ้งซ่อมทั้งหมด</small>
            </div>
        </div>
        <button class="btn btn-success text-white shadow-sm" id="btnAdd">
            <i class="bi bi-plus-lg me-1"></i> แจ้งซ่อมใหม่
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light text-secondary">
                    <tr>
                        <th class="py-3 ps-4">#</th>
                        <th class="py-3">วันที่</th>
                        <th class="py-3">ใบแจ้งซ่อม</th>
                        <th class="py-3">ผู้แจ้ง/หน่วยงาน</th>
                        <th class="py-3">รายการ</th>
                        <th class="py-3">ผู้รับผิดชอบ</th>
                        <th class="py-3 text-center">สถานะ</th>
                        <th class="py-3 text-center">จัดการ</th>
                    </tr>
                </thead>
                <tbody id="tbody_repair">
                    
                </tbody>
            </table>
        </div>
        
        <!-- Pagination Placeholder -->
        <div class="p-3 border-top">
             <nav>
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item disabled"><a class="page-link border-0 rounded-circle mx-1" href="#"><i class="bi bi-chevron-left"></i></a></li>
                    <li class="page-item active"><a class="page-link border-0 rounded-circle mx-1 shadow-sm" href="#">1</a></li>
                    <li class="page-item"><a class="page-link border-0 rounded-circle mx-1" href="#">2</a></li>
                    <li class="page-item"><a class="page-link border-0 rounded-circle mx-1" href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>รายละเอียดการแจ้งซ่อม</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body p-4">
                <input type="hidden" id="repair_id">
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">วันที่แจ้งซ่อม</label>
                        <input type="text" id="repair_date" class="form-control" placeholder="วว/ดด/ปปปป">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">ใบแจ้งซ่อมเลขที่</label>
                        <input type="text" id="repair_form" class="form-control" placeholder="ระบุเลขที่ใบแจ้ง">
                    </div>
                    
                    <div class="col-12">
                        <label class="form-label fw-bold">ผู้แจ้งซ่อม / หน่วยงาน</label>
                        <input type="text" id="repair_user" class="form-control" placeholder="ระบุชื่อผู้แจ้งหรือหน่วยงาน">
                    </div>
                    
                    <div class="col-12">
                        <label class="form-label fw-bold">รายการแจ้งซ่อม</label>
                        <textarea id="repair_list" class="form-control" rows="2" placeholder="ระบุรายการอุปกรณ์ที่ต้องการซ่อม"></textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">ผู้รับผิดชอบ</label>
                        <input type="text" id="repair_responsible" class="form-control" placeholder="ระบุชื่อช่างผู้รับผิดชอบ">
                    </div>
                    
                    <div class="col-md-6">
                         <label class="form-label fw-bold">สถานะ</label>
                        <select id="repair_status" class="form-select">
                            <option value="รอรับเรื่อง">รอรับเรื่อง</option>
                            <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                            <option value="ดำเนินการเสร็จสิ้น">ดำเนินการเสร็จสิ้น</option>
                            <option value="ยกเลิก">ยกเลิก</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label fw-bold">รายละเอียดเพิ่มเติม</label>
                        <textarea id="repair_details" class="form-control" rows="3" placeholder="รายละเอียดอื่นๆ ของปัญหา"></textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <button class="btn btn-primary px-4" id="btnSave">บันทึกข้อมูล</button>
            </div>
        </div>
    </div>
</div>
