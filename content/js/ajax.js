$(document).ready(function () {
  $("#status_order").change(function () {
    var id = $("#status_order").val();
    var request = "status";
    $.post(
      "data.php",
      { status_id: id, name_request: request },
      function (data) {
        $(".load_data").html(data);
      }
    );
  });

  $("#date_order").change(function () {
    var id = $("#date_order").val();
    var request = "date";
    $.post(
      "data.php",
      { date_time: id, name_request: request },
      function (data) {
        $(".load_data").html(data);
      }
    );
  });

  /**
   * bang thong ke doanh thu
   */

  chart_money();
  function chart_money() {
    
    $.post("data_sale.php", function (data) {
        show_chart_money(data)
    });
    $("#search_date").change(function () {
      var date_time = $("#search_date").val();
      if (date_time == 100) {
        $(".card-header-change").html("Thống kê doanh thu 7 ngày gần nhất ");
      }else{
          $(".card-header-change").html("Thống kê doanh thu tháng "+ (12-Number(date_time)));
      }
      $.post("data_sale.php", { date_time: date_time }, function (data) {
        show_chart_money(data)

      });
    });

  }

  function show_chart_money(data) {
    var date_field = [];
    var total_money = [];
    var chart1 = document.getElementsByClassName("total_money");
    data = JSON.parse(data);
    
    let chartStatus = Chart.getChart("linechart"); // <canvas> id
    if (chartStatus != undefined) {
      chartStatus.destroy();
   
    }

    for (let i = 0; i < data.length; i++) {
      date_field.push(data[i].date_field);
      total_money.push(data[i].total_money);
    }
    var myChart1 = new Chart(chart1, {
      type: "line",
      data: {
        labels: date_field,
        datasets: [
          {
            data: total_money,
            backgroundColor: "rgba(48, 164, 255, 0.2)",
            borderColor: "rgba(48, 164, 255, 0.8)",
            fill: true,
            borderWidth: 1,
          },
        ],
      },
      options: {
        animation: {
          duration: 2000,
          easing: "easeOutQuart",
        },
        plugins: {
          legend: {
            display: false,
            position: "right",
          },
          title: {
            display: true,
            text: 'VND',
            position: 'left',
        },
        },
      },
    });
        
  }
/**
 * thong ke trạng thai
 */
  chart_status();
  function chart_status() {
    $.post("data.php", function (data2) {
      
      data2 = JSON.parse(data2);
      var status_name = [];
      var status_count = [];

      for (let i = 0; i < data2.length; i++) {
        status_name.push(data2[i].status_name);
        status_count.push(data2[i].count_status);
      }
      
      var chart3 = document.getElementById("piechart");
      // new
      var myChart3 = new Chart(chart3, {
        type: "pie",
        data: {
          labels: status_name,
          datasets: [
            {
              data: status_count,
              backgroundColor: [
                "#009688",
                "#795548",
                "#673AB7",
                "#2196F3",
                "#6da252",
              ],
              hoverOffset: 4,
            },
          ],
        },
        options: {
          animation: {
            duration: 2000,
            easing: "easeOutQuart",
          },
          plugins: {
            legend: {
              display: true,
              position: "right",
            },
            title: {
              display: false,
              text: "Total Value",
              position: "left",
            },
          },
        },
      });
    });
  }
// notification 

function load_noti_number(view ="") {
    $.post(
      "../notification.php",
      { view:view},
      function (data) {
        $(".noti_number").html(data);
      }
    );
    
  }
  setInterval(function () {
    load_noti_number();
    
  },3000);

/**
 * update notidica
 */

 $("#noti_number").click(function () {
  var view = "update";
  $.post(
    "../notification.php",
    { view:view },
    function (data) {
      $(".noti_number").html(data);
    }
  );
});


});
