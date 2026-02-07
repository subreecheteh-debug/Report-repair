<div class="card shadow-custom border-0 mb-4">
    <div class="card-header bg-white border-0 py-3 d-flex align-items-center">
        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 me-3">
            <i class="bi bi-book-half fs-4"></i>
        </div>
        <div>
             <h5 class="mb-0 fw-bold text-dark">คู่มือแนะนำการใช้งาน</h5>
             <small class="text-muted">ขั้นตอนการใช้งานระบบแจ้งซ่อมภายในหมู่บ้าน</small>
        </div>
    </div>
    <div class="card-body">
        
        <!-- 1. วิธีแจ้งซ่อม -->
        <div class="mb-5">
            <h5 class="fw-bold text-primary mb-4"><i class="bi bi-1-circle-fill me-2"></i>ขั้นตอนการแจ้งซ่อม</h5>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <div class="card-body text-center p-4">
                            <div class="bg-white rounded-circle shadow-sm d-inline-flex p-3 mb-3 text-primary">
                                <i class="bi bi-pencil-square fs-3"></i>
                            </div>
                            <h6 class="fw-bold">1. เข้าเมนู "แจ้งปัญหา"</h6>
                            <p class="text-muted small">คลิกที่เมนูแจ้งปัญหา/แจ้งซ่อม จากแถบเมนูด้านบน</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <div class="card-body text-center p-4">
                            <div class="bg-white rounded-circle shadow-sm d-inline-flex p-3 mb-3 text-primary">
                                <i class="bi bi-journal-text fs-3"></i>
                            </div>
                            <h6 class="fw-bold">2. กรอกรายละเอียด</h6>
                            <p class="text-muted small">ระบุชื่อ, ที่อยู่, เบอร์โทร และอาการเสียให้ชัดเจน</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <div class="card-body text-center p-4">
                            <div class="bg-white rounded-circle shadow-sm d-inline-flex p-3 mb-3 text-primary">
                                <i class="bi bi-send-check-fill fs-3"></i>
                            </div>
                            <h6 class="fw-bold">3. บันทึกข้อมูล</h6>
                            <p class="text-muted small">กดปุ่มบันทึก ระบบจะสร้างใบงานสถานะ <span class="badge bg-warning text-dark">รอรับเรื่อง</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4 text-muted opacity-25">

        <!-- 2. ตรวจสอบสถานะ -->
        <div class="mb-5">
            <h5 class="fw-bold text-primary mb-4"><i class="bi bi-2-circle-fill me-2"></i>ความหมายของสถานะ</h5>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="d-flex align-items-center p-3 border rounded shadow-sm">
                        <span class="badge bg-warning text-dark me-3 p-2"><i class="bi bi-clock fs-5"></i></span>
                        <div>
                            <h6 class="mb-0 fw-bold">รอรับเรื่อง / รอซ่อม</h6>
                            <small class="text-muted">รับเรื่องแล้ว อยู่ระหว่างจัดหาช่าง</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center p-3 border rounded shadow-sm">
                        <span class="badge bg-info text-dark me-3 p-2"><i class="bi bi-gear-wide-connected fs-5"></i></span>
                        <div>
                            <h6 class="mb-0 fw-bold">กำลังดำเนินการ</h6>
                            <small class="text-muted">ช่างกำลังเข้าดำเนินการซ่อมแซม</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center p-3 border rounded shadow-sm">
                        <span class="badge bg-success me-3 p-2"><i class="bi bi-check-circle fs-5"></i></span>
                        <div>
                            <h6 class="mb-0 fw-bold">ดำเนินการเสร็จสิ้น</h6>
                            <small class="text-muted">การซ่อมเสร็จสมบูรณ์</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4 text-muted opacity-25">

        <!-- 3. ข้อควรระวัง -->
        <div class="alert alert-warning border-0 shadow-sm d-flex" role="alert">
            <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
            <div>
                <h6 class="alert-heading fw-bold">ข้อควรระวัง!</h6>
                <ul class="mb-0 small ps-3">
                    <li>กรุณาตรวจสอบเบอร์โทรศัพท์ให้ถูกต้อง เพื่อให้ช่างติดต่อกลับได้</li>
                    <li>หากต้องการยกเลิกการแจ้งซ่อม โปรดแจ้งเจ้าหน้าที่หรือลบรายการก่อนสถานะเปลี่ยนเป็น "กำลังดำเนินการ"</li>
                    <li>อธิบายปัญหาให้ละเอียดที่สุด เพื่อความรวดเร็วในการแก้ไข</li>
                </ul>
            </div>
        </div>

    </div>
</div>