<script src="pages/admin/view.js"></script>
<button class="btn btn-success" id="btnAdd">เพิ่มผู้ดูแลระบบ</button>
<!-- ปุ่มเพิ่ม -->

<!-- ตาราง -->
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>ชื่อ-สกุล</th>
            <th>บัญชีผู้ใช้</th>
            <th>เบอร์โทร</th>
            <th>การจัดการ</th>
        </tr>
    </thead>
    <!-- ส่วนตัว -->
    <tbody id="tbody_user">
    </tbody>
</table>

<div class="modal fade" id="adminModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">จัดการผู้ใช้</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <input type="hidden" id="admin_id">

                <div class="mb-2">
                    <label>ชื่อ-สกุล</label>
                    <input type="text" id="admin_name" class="form-control">
                </div>

                <div class="mb-2">
                    <label>บัญชีผู้ใช้</label>
                    <input type="text" id="admin_username" class="form-control">
                </div>

                <div class="mb-2">
                    <label>รหัสผ่าน</label>
                    <input type="password" id="admin_password" class="form-control">
                </div>

                <div class="mb-2">
                    <label>เบอร์โทร</label>
                    <input type="text" id="admin_phone" class="form-control">
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" id="btnSave">บันทึก</button>
            </div>
        </div>
    </div>
</div>
