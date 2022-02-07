$(document).ready(function() {
  var bsa1 = function() {
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa1/wlu",
        success: function(msg) {
            $(".bsa1-wlu").html(msg.nilai + " cm");
            $(".rf-waktu-bsa1").html(msg.created_at);
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa1/wld",
        success: function(msg) {
            $(".bsa1-wld1").html(msg.nilai + " cm");
            $(".bsa1-wld2").html(msg.nilai + " cm");
            $(".bsa1-wld3").html(msg.nilai + " cm");
            $(".bsa1-wld4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa1/gt1",
        success: function(msg) {
            $(".bsa1-gt1").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa1/gt2",
        success: function(msg) {
            $(".bsa1-gt2").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa1/gt3",
        success: function(msg) {
            $(".bsa1-gt3").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa1/gt4",
        success: function(msg) {
            $(".bsa1-gt4").html(msg.nilai + " cm");
        }
    });
  }

// ===============================================================

  var bpk8 = function() {
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bpk8/wl1",
        success: function(msg) {
            $(".bpk8-wlu").html(msg.nilai + " cm");
            $(".bpk8te-wlu").html(msg.nilai + " cm");
            $(".rf-waktu-bpk8").html(msg.created_at);
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bpk8/wl2",
        success: function(msg) {
            $(".bpk8-wld1").html(msg.nilai + " cm");
            $(".bpk8-wld2").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bpk8/wl3",
        success: function(msg) {
            $(".bpk8-wld3").html(msg.nilai + " cm");
            $(".bpk8-wld4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bpk8/wl4",
        success: function(msg) {
            $(".bpk8te-wld").html(msg.nilai + " cm");
        }
    });
    // $.ajax({
    //     type: "GET",
    //     datatype: "JSON",
    //     url: "api/get_bpk8/wl5",
    //     success: function(msg) {
    //         $(".bpk8-wl2").html(msg.nilai + " cm");
    //     }
    // });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bpk8/gt1",
        success: function(msg) {
            $(".bpk8-gt1").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bpk8/gt2",
        success: function(msg) {
            $(".bpk8-gt2").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bpk8/gt3",
        success: function(msg) {
            $(".bpk8-gt3").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bpk8/gt4",
        success: function(msg) {
            $(".bpk8-gt4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/get_bpk8/gt5",
      success: function(msg) {
          $(".bpk8te-gt1").html(msg.nilai + " cm");
      }
    });
  }
  
  // ===============================================================

  var bsa10 = function() {
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa10/wl1",
        success: function(msg) {
            $(".bsa10-wlu").html(msg.nilai + " cm");
            $(".rf-waktu-bsa10").html(msg.created_at);
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa10/wl2",
        success: function(msg) {
            $(".bsa10-wld1").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa10/wl3",
        success: function(msg) {
            $(".bsa10-wld2").html(msg.nilai + " cm");
            $(".bsa10-wld3").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa10/wl4",
        success: function(msg) {
            $(".bsa10-wld4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa10/wl5",
        success: function(msg) {
            $(".bsa10-wld5").html(msg.nilai + " cm");
            $(".bsa10-wld6").html(msg.nilai + " cm");
        }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/get_bsa10/wl6",
      success: function(msg) {
          $(".bsa10-wld7").html(msg.nilai + " cm");
          $(".bsa10-wld8").html(msg.nilai + " cm");
          $(".bsa10-wld9").html(msg.nilai + " cm");
          $(".bsa10-wld10").html(msg.nilai + " cm");
      }
  });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa10/gt1",
        success: function(msg) {
            $(".bsa10-gt1").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa10/gt2",
        success: function(msg) {
            $(".bsa10-gt2").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa10/gt3",
        success: function(msg) {
            $(".bsa10-gt3").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bsa10/gt4",
        success: function(msg) {
            $(".bsa10-gt4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/get_bsa10/gt5",
      success: function(msg) {
          $(".bsa10-gt5").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/get_bsa10/gt6",
      success: function(msg) {
          $(".bsa10-gt6").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/get_bsa10/gt7",
      success: function(msg) {
          $(".bsa10-gt7").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/get_bsa10/gt8",
      success: function(msg) {
          $(".bsa10-gt8").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/get_bsa10/gt9",
      success: function(msg) {
          $(".bsa10-gt9").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/get_bsa10/gt10",
      success: function(msg) {
          $(".bsa10-gt10").html(msg.nilai + " cm");
      }
    });
  }

  var bmj1 = function() {
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bmj1/wlu",
        success: function(msg) {
            $(".bmj1-wlu").html(msg.nilai + " cm");
            $(".tma-waktu-bmj1").html(msg.created_at);
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bmj1/wld",
        success: function(msg) {
            $(".bmj1-wld").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/get_bmj1/gt1",
        success: function(msg) {
            $(".bmj1-gt1").html(msg.nilai + " cm");
        }
    });
  }


  bsa1();
  bpk8();
  bsa10();
  bmj1();
  setInterval(bsa1(), 30000);
  setInterval(bsa10(), 30000);
  setInterval(bpk8(), 30000);
  setInterval(bmj1(), 30000);
});