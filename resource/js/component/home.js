$(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
$('.datepicker').bootstrapMaterialDatePicker({
    format: 'YYYY-MM-DD HH:mm:00',
    clearButton: false,
    weekStart: 0,
    okText: 'ยืนยัน',
    lang: 'th',
    cancelText: 'ยกเลิก',
    minDate : new Date()
});
var datestart, dateend, diffDays;
$('#date-end').bootstrapMaterialDatePicker({weekStart: 0}).on('change', function (e, date) {
    dateend = date;
    var a = moment(datestart, 'M/D/YYYY');
    var b = moment(dateend, 'M/D/YYYY');
    diffDays = b.diff(a, 'days') + 1;
    //alert(diffDays);
});
$('#date-start').bootstrapMaterialDatePicker().on('change', function (e, date) {
    datestart = date;
    $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
});

window.onload = function () {
  $(".datepicker").bootstrapMaterialDatePicker({
    format: "YYYY-MM-DD HH:mm:00",
    clearButton: false,
    weekStart: 0,
    okText: "ยืนยัน",
    lang: "th",
    cancelText: "ยกเลิก",
  });
  var datestart, dateend, diffDays;
  $("#date-end")
    .bootstrapMaterialDatePicker({ weekStart: 0 })
    .on("change", function (e, date) {
      dateend = date;
      var a = moment(datestart, "M/D/YYYY");
      var b = moment(dateend, "M/D/YYYY");
      diffDays = b.diff(a, "days") + 1;
      //alert(diffDays);
    });
  $("#date-start")
    .bootstrapMaterialDatePicker({ weekStart: 0 })
    .on("change", function (e, date) {
      datestart = date;
      $("#date-end").bootstrapMaterialDatePicker("setMinDate", date);
    });
  $("#btn-searchroom").click(function (e) {
    swal("ค้นหาห้องหรือกลุ่ม", {
      content: "input",
    }).then((value) => {
      if (!value) throw null;
      $.ajax({
        url: "ajax/searchroom.php",
        type: "POST",
        data: { id: value },
        dataType: "json",
        success: function (data) {
          if (data.data.status == "success") {
            swal({
              text: "คุณต้องการเข้าร่วมห้อง หรือไม่\n"+ data.data.room_name,
              buttons: ["ยกเลิก", "เข้าร่วม"],
            }).then((willConfirm) => {
              if (willConfirm) {
                var room_id = data.data.room_id;
                var profile_id = data.data.profile_id;
                $.ajax({
                  url: "ajax/joinroom.php",
                  type: "POST",
                  data: { room_id: room_id, profile_id: profile_id },
                  dataType: "json",
                  success: function (data) {
                    if (data.data.status == "success") {
                      swal("เข้าร่วมห้องเรียบร้อย !", {
                        icon: "success",
                        buttons: false,
                      }).then((e) => {
                        window.location.replace("/?content=join");
                      });
                    }else if(data.data.status == "error"){
                      swal("ไม่สามารถเข้าร่วมได้ !", {
                        icon: "error",
                        buttons: false,
                      });
                    }
                  },
                });
              }
            });
          } else if (data.data.status == "error") {
            swal(`ไม่พบห้องหรือกลุ่มที่ค้นหา`);
          }
        },
      });
    });
  });
  $("form#create_room").submit(function (e) {
    e.preventDefault();
    var inputTypeAgeStart = $("#inputTypeAgeStart").val();
    var inputTypeAgeEnd = $("#inputTypeAgeEnd").val();
    if (inputTypeAgeEnd < inputTypeAgeStart) {
      swal("อายุสิ้นสุดต้องไม่น้อยกว่า อายุเริ่มต้น", {
        button: {
          text: "ตกลง",
        },
        icon: "warning",
      }).then((e) => {
        $("#inputTypeAgeStart").focus();
      });
    } else {
      swal({
        text:
          "กรุณายืนยันการสร้าง\nหมายเหตุ : เมื่อทำการสร้างจะแสดงให้กับผู้ใช้อื่นทันที และจะไม่สามารถแก้ไขได้ในภายหลัง",
        icon: "warning",
        buttons: ["ยกเลิก", "ยืนยัน"],
      }).then((willConfirm) => {
        if (willConfirm) {
          var formData = new FormData(this);
          $.ajax({
            url: "ajax/create.php",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function (data) {
              //console.log(data);
              if (data.data.status == "success") {
                swal("สร้างห้องเรียบร้อยแล้ว !", {
                  icon: "success",
                  buttons: false,
                }).then((e) => {
                  window.location.replace("/?content=join");
                });
              } else {
                swal("เกิดข้อผิดพลาด !", {
                  icon: "error",
                  buttons: false,
                });
              }
            },
            cache: false,
            contentType: false,
            processData: false,
          });
        } else {
        }
      });
    }
  });
  var room_pop_content = document.getElementById("room_pop");
  if (typeof room_pop_content != "undefined" && room_pop_content != null) {
    setInterval(room_pop, 1000);
  }
  function room_pop() {
    $.ajax({
      type: "POST",
      url: "ajax/roompop.php",
      dataType: "html",
      success: function (data) {
        document.getElementById("room_pop").innerHTML = data;
      },
      error: function (xhr, status) {
        //alert("Sorry, there was a problem!");
      },
      complete: function (xhr, status) {
        //$('#showresults').slideDown('slow')
      },
    });
  }
};