$(document).ready(function () {
  function getData() {
    $.ajax({
      url: "php/select-data.php",
      type: "GET",
      success: function (data) {
        $("#get-data").html(data);
      },
    });
  }
  getData();

  $("#save").on("click", function (e) {
    e.preventDefault();
    const name = $("#name").val();
    const age = $("#age").val();
    const city = $("#city").val();

    if (name == "" || age == "" || city == "") {
      alert("Please fill all the field");
    } else {
      $.ajax({
        url: "php/insert-data.php",
        type: "POST",
        data: {
          name: name,
          age: age,
          city: city,
        },
        success: function (data) {
          if (data == 1) {
            alert("data add successfully");
            $("#form-data").trigger("reset");
            $("#myModal").modal("hide");
            getData();
          } else {
            alert("Not add successfully");
          }
        },
      });
    }
  });

  $(document).on("click", "#delete-data", function () {
    const id = $(this).data("id");
    $.ajax({
      url: "php/delete-data.php",
      type: "POST",
      data: { id: id },
      success: function (data) {
        if (data == 1) {
          alert("data delete successfully");
          getData();
        } else {
          alert("Not delete successfully");
        }
      },
    });
  });
});
