$(document).ready(function () {
    $('form').submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "action.php",
            data: $(this).serialize(),
            dataType: "json",
            success: function (res) {
                if (res.status === "success") {
                    window.location.href = "../";
                } else {
                    alert(res.message);
                }
            }
        });
    });
});