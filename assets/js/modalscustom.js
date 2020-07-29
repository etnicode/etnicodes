$(function (portfolio) {
  //Menu--------------
  $(".addMenuButton").on("click", function (p) {
    $("#PortfolioModalLabel").html("Tambah Portfolio");
    $(".modal-footer button[type=submit]").html("Add");
    $("#id").val("");
    $("#nama").val("");
    $("#link").val("");
    $("#filter").val("");
    $("#image").val("");
  });

  $(".showModalPortfolio").on("click", function (p) {
    $("#PortfolioModalLabel").html("Edit Portfolio");
    $(".modal-footer button[type=submit]").html("Update");
    $(".modal-content form").attr(
      "action",
      "http://localhost/etnicodes/admin/portfolio/editportfolio"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/etnicodes/admin/portfolio/geteditport",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#nama").val(data.nama);
        $("#link").val(data.link);
        $("#filter").val(data.filter);
      },
    });
  });
  //   end
});
$(function (client) {
  //Menu--------------
  $(".addMenuButton").on("click", function (c) {
    $("#ClientModalLabel").html("Tambah Client");
    $(".modal-footer button[type=submit]").html("Add");
    $("#id").val("");
    $("#image").val("");
    $("#link").val("");
  });

  $(".showModalClient").on("click", function (c) {
    $("#ClientModalLabel").html("Edit Client");
    $(".modal-footer button[type=submit]").html("Update");
    $(".modal-content form").attr(
      "action",
      "http://localhost/etnicodes/admin/client/editclient"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/etnicodes/admin/client/geteditclient",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#link").val(data.link);
      },
    });
  });
  //   end
});
