$(document).ready(function () {
    // =================== ดึงข้อมูลมาแสดง ==================
    select_admin();//ตั้งชือฟังก์ชันในการดึง admin
    function select_admin() {//ตั้งชือฟังก์ชันในการดึง admin
        var html = "";
        $.ajax({
            type: "post",
            url: "pages/admin/action.php",//ส่งไปที่หน้าฐานข้อมูล admin
            data: {
                fn: "select_admin"//ส่งไปที่หน้าฐานข้อมูล admin
            },
            dataType: "json",
            success: function (response) {
                let index = 1;
                $.each(response.data, function (i, user) {
                    let roleBadge = "";
                    if (user.admin_role == 1) {
                        roleBadge = '<span class="badge bg-primary rounded-pill"><i class="bi bi-shield-check me-1"></i>ผู้ดูแลระบบ</span>';
                    } else {
                        roleBadge = '<span class="badge bg-secondary rounded-pill"><i class="bi bi-person me-1"></i>ผู้ใช้</span>';
                    }
                    html += `
                        <tr>
                            <td class="ps-4 text-muted">${index++}</td>
                            <td class="fw-bold text-dark">${user.admin_name}</td>
                            <td><span class="text-primary fw-medium">${user.admin_username}</span></td>
                            <td>${user.admin_phone}</td>
                            <td>${roleBadge}</td>
                            <td class="text-end pe-4">
                                <button class="btn btn-sm btn-outline-warning edit me-1" data-id="${user.admin_id}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger delete" data-id="${user.admin_id}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    `;
                });

                $("#tbody_user").html(html);
            }

        });
    }

    //================== ปุ่มเพิ่ม ==========================

    $("#btnAdd").click(function () {
        $("#admin_id").val(""); //กล่องid
        $("#admin_name").val(""); //กล่องเพิ่มชือ
        $("#admin_username").val(""); //กล่องบัญชีผู้ใช้
        $("#admin_password").val(""); //กล่องรหัสผ่าน
        $("#admin_phone").val(""); //กล่องเบอร์โทรศัพท์

        $("#adminModal").modal("show");//โชว์ modal
    });

    //================== ปุ่มแก้ไข ==========================

    $(document).on("click", ".edit", function () {
        let id = $(this).data("id");

        $.ajax({
            type: "post",
            url: "pages/admin/action.php",
            data: {
                fn: "get_admin",
                admin_id: id
            },
            dataType: "json",
            success: function (res) {
                $("#admin_id").val(res.data.admin_id);//
                $("#admin_name").val(res.data.admin_name);//
                $("#admin_username").val(res.data.admin_username);//
                $("#admin_password").val("");
                $("#admin_phone").val(res.data.admin_phone);

                $("#adminModal").modal("show");
            }
        });
    });

    //========================= ปุ่มบันทึก =====================

    $("#btnSave").click(function () {

        let admin_id = $("#admin_id").val();
        let fn = admin_id ? "update_admin" : "insert_admin";//ฟังก็ชัน แก้ไข และเพิ่ม

        $.ajax({
            type: "post",
            url: "pages/admin/action.php",
            data: {
                fn: fn,
                admin_id: admin_id, //ส่ง admin_id ไปบันทึก
                admin_name: $("#admin_name").val(),//ส่ง admin_name ไปบันทึก
                admin_username: $("#admin_username").val(), //ส่ง admin_username ไปบันทึก
                admin_password: $("#admin_password").val(), //ส่ง admin_password ไปบันทึก
                admin_phone: $("#admin_phone").val() //ส่ง admin_phone ไปบันทึก
            },
            dataType: "json",
            success: function (res) {
                if (res.status === "success") {
                    $("#adminModal").modal("hide");
                    alert("บันทึกสำเร็จ");//แจ้งเตือนว่าบันทึกสำเร็จ
                    select_admin();
                } else {
                    alert(res.message);
                }
            }
        });
    });

    //================= ปุ่มลบ ===================================

    $(document).on("click", ".delete", function () {
        let id = $(this).data("id");

        if (!confirm("ยืนยันการลบข้อมูล ?")) return;

        $.ajax({
            type: "post",
            url: "pages/admin/action.php",
            data: {
                fn: "delete_admin",
                admin_id: id
            },
            dataType: "json",
            success: function (res) {
                if (res.status === "success") {
                    select_admin();
                } else {
                    alert(res.message);
                }
            }
        });
    });

});