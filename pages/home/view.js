$(document).ready(function () {
    loadDashboardStats();

    function loadDashboardStats() {
        $.ajax({
            type: "post",
            url: "pages/home/action.php",
            data: {
                fn: "get_dashboard_stats"
            },
            dataType: "json",
            success: function (res) {
                if (res.status === "success") {
                    $("#stat_users").text(res.data.users);
                    $("#stat_total").text(res.data.total_problems);
                    $("#stat_progress").text(res.data.in_progress);
                    $("#stat_resolved").text(res.data.resolved);
                }
            },
            error: function (err) {
                console.error("Error fetching stats", err);
            }
        });
    }
});