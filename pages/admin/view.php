<script src="pages/admin/view.js"></script>
<div class="card shadow-custom border-0">
    <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <div class="bg-primary bg-opacity-10 text-primary rounded p-2 me-3">
                <i class="bi bi-shield-lock-fill fs-4"></i>
            </div>
            <h5 class="mb-0 fw-bold text-primary">จัดการผู้ดูแลระบบ</h5>
        </div>
        <button class="btn btn-primary" id="btnAdd">
            <i class="bi bi-plus-lg me-1"></i> เพิ่มผู้ดูแลระบบ
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3 ps-4">#</th>
                        <th class="py-3">ชื่อ-สกุล</th>
                        <th class="py-3">บัญชีผู้ใช้</th>
                        <th class="py-3">เบอร์โทร</th>
                        <th class="py-3">ประเภท</th>
                        <th class="py-3 text-end pe-4">การจัดการ</th>
                    </tr>
                </thead>
                <tbody id="tbody_user">
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="adminModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="bi bi-person-gear me-2"></i>จัดการผู้ใช้</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body p-4">
                <input type="hidden" id="admin_id">

                <div class="mb-3">
                    <label class="form-label fw-bold">ชื่อ-สกุล</label>
                    <input type="text" id="admin_name" class="form-control" placeholder="ระบุชื่อ-สกุล">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">บัญชีผู้ใช้</label>
                    <input type="text" id="admin_username" class="form-control" placeholder="ระบุชื่อผู้ใช้สำหรับเข้าระบบ">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">รหัสผ่าน</label>
                    <input type="password" id="admin_password" class="form-control" placeholder="ระบุรหัสผ่าน (ถ้าต้องการเปลี่ยน)">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">เบอร์โทร</label>
                    <input type="text" id="admin_phone" class="form-control" placeholder="ระบุเบอร์โทรศัพท์">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">ประเภท</label>
                    <select id="admin_role" class="form-select">
                        <option value="">เลือกประเภท</option>
                        <option value="1">ผู้ดูแลระบบ</option>
                        <option value="2">ผู้ใช้</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button class="btn btn-primary px-4" id="btnSave">บันทึกข้อมูล</button>
            </div>
        </div>
    </div>
</div>
