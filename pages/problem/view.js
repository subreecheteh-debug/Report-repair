$(document).ready(function () {
    // =================== ดึงข้อมูลมาแสดง ==================
    select_repair();//ตั้งชือฟังก์ชันในการดึง user
    function select_repair() {//ตั้งชือฟังก์ชันในการดึง user
        var html = "";
        $.ajax({
            type: "post",
            url: "pages/problem/action.php",//ส่งไปที่หน้าฐานข้อมูล user
            data: {
                fn: "select_repair"//ส่งไปที่หน้าฐานข้อมูล user
            },
            dataType: "json",
            success: function (response) {
                let index = 1;
                $.each(response.data, function (i, repair) {
                    // Status Badge Logic
                    let statusBadge = '';
                    if (repair.repair_status.includes("รอ")) {
                        statusBadge = `<span class="badge bg-warning text-dark"><i class="bi bi-clock me-1"></i>${repair.repair_status}</span>`;
                    } else if (repair.repair_status.includes("เสร็จ")) {
                        statusBadge = `<span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>${repair.repair_status}</span>`;
                    } else if (repair.repair_status.includes("กำลัง")) {
                        statusBadge = `<span class="badge bg-info text-dark"><i class="bi bi-gear-wide-connected me-1"></i>${repair.repair_status}</span>`;
                    } else {
                        statusBadge = `<span class="badge bg-secondary">${repair.repair_status}</span>`;
                    }

                    html += `
                        <tr>
                            <td class="ps-4 text-muted">${index++}</td>
                            <td class="text-nowrap">${repair.repair_date}</td>
                            <td><span class="badge bg-light text-dark border">${repair.repair_form}</span></td>
                            <td class="fw-medium">${repair.repair_user}</td>
                            <td>${repair.repair_list}</td>
                            <td>${repair.repair_responsible}</td>
                            <td class="text-center">${statusBadge}</td>
                            <td class="text-center text-nowrap">
                                <button class="btn btn-sm btn-outline-warning edit shadow-sm me-1" data-id="${repair.repair_id}" title="แก้ไข">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger delete shadow-sm me-1" data-id="${repair.repair_id}" title="ลบ">
                                    <i class="bi bi-trash"></i>
                                </button>
                                <a class="btn btn-sm btn-outline-info shadow-sm" href="?page=status&repair_id=${repair.repair_id}" title="รายละเอียด">
                                    <i class="bi bi-file-text"></i>
                                </a>
                            </td>
                        </tr>
                    `;
                });
                // Remove 'details' column logic from HTML as it is better handled by the detail button or modal
                $("#tbody_repair").html(html);
            }

        });
    }

    //================== ปุ่มเพิ่ม ==========================

    $("#btnAdd").click(function () {
        $("#repair_id").val("");
        $("#repair_date").val("");
        $("#repair_form").val("");
        $("#repair_user").val("");
        $("#repair_list").val("");
        $("#repair_responsible").val("");
        $("#repair_status").val("");
        $("#repair_details").val("");
        $("#btnSave").val("");

        $("#userModal").modal("show");//โชว์ modal
    });

    //================== ปุ่มแก้ไข ==========================

    $(document).on("click", ".edit", function () {
        let id = $(this).data("id");

        $.ajax({
            type: "post",
            url: "pages/problem/action.php",
            data: {
                fn: "get_repair",
                repair_id: id
            },
            dataType: "json",
            success: function (res) {
                $("#repair_id").val(res.data.repair_id);//
                $("#repair_date").val(res.data.repair_date);//
                $("#repair_form").val(res.data.repair_form);//
                $("#repair_user").val(res.data.repair_user);//
                $("#repair_list").val(res.data.repair_list);//
                $("#repair_responsible").val(res.data.repair_responsible);//
                $("#repair_status").val(res.data.repair_status);//
                $("#repair_details").val(res.data.repair_details);//

                $("#userModal").modal("show");
            }
        });
    });

    //========================= ปุ่มบันทึก =====================

    $("#btnSave").click(function () {

        let repair_id = $("#repair_id").val();
        let fn = repair_id ? "update_repair" : "insert_repair";//ฟังก็ชัน แก้ไข และเพิ่ม
        let repair_status = repair_id ? $("#repair_status").val() : "รอรับเรื่อง";

        $.ajax({
            type: "post",
            url: "pages/problem/action.php",
            data: {
                fn: fn,
                repair_id: repair_id, //ส่ง user_id ไปบันทึก
                repair_date: $("#repair_date").val(),//ส่ง ser_name ไปบันทึก
                repair_form: $("#repair_form").val(), //ส่ง user_address ไปบันทึก
                repair_user: $("#repair_user").val(),//ส่ง user_phone ไปบันทึก
                repair_list: $("#repair_list").val(),
                repair_responsible: $("#repair_responsible").val(),
                repair_status: repair_status,
                repair_details: $("#repair_details").val()

            },
            dataType: "json",
            success: function (res) {
                if (res.status === "success") {
                    $("#userModal").modal("hide");
                    alert("บันทึกสำเร็จ");//แจ้งเตือนว่าบันทึกสำเร็จ
                    select_repair();
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
            url: "pages/problem/action.php",
            data: {
                fn: "delete_repair",
                repair_id: id
            },
            dataType: "json",
            success: function (res) {
                if (res.status === "success") {
                    select_repair();
                } else {
                    alert(res.message);
                }
            }
        });
    });

});