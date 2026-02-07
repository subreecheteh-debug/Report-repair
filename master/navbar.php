<script>
    $(document).ready(function () {
        $('#logout').click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "./login/action.php",
                data: {
                    fn: "logout"
                },
                dataType: "json",
                success: function (res) {
                    if (res.status === "success") {
                        location.reload();
                    }
                }
            });
        });
    });
</script>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">ระบบแจ้งซ่อมออนไลน์ ภายในหมู่บ้าน</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="./">หน้าหลัก</a></li>
                <?php if ($_SESSION['admin_role'] == 1) {
                ?>
                <li class="nav-item"><a class="nav-link" href="?page=admin">ผู้ดูแลระบบ</a></li>
                <?php
                }?>
               <!-- <li class="nav-item"><a class="nav-link" href="?page=user">ผู้ใช้</a></li> -->
                <li class="nav-item"><a class="nav-link" href="?page=problem">แจ้งปัญหา/แจ้งซ่อม</a></li>
                <?php if ($_SESSION['admin_role'] == 1) {
                ?>
                <li class="nav-item"><a class="nav-link" href="?page=statistics">สถิติการแจ้งซ่อม</a></li>
                <?php
                }?>
                <li class="nav-item"><a class="nav-link" href="?page=Recommend">แนะนำการใช้งาน</a></li>
                <li class="nav-item"><a class="nav-link" id="logout" href="#">ออกจากระบบ</a></li>
            </ul>
            <span class="navbar-text ms-3 text-white">👤 <?php echo $_SESSION["admin_name"];?></span>
        </div>
    </div>
</nav>