$(document).ready(function(){
    $("#status_order").change(function(){
        var id = $("#status_order").val();
        var request = "status";
        $.post("data.php",{status_id: id, name_request: request }, function (data) {
            $(".load_data").html(data);
        })
    })
});
$(document).ready(function(){
    $("#date_order").change(function(){
        var id = $("#date_order").val();
        var request = "date";
        $.post("data.php",{date_time: id, name_request: request }, function (data) {
            $(".load_data").html(data);
        })
    })
})