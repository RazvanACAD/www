import $, { ajax } from "jquery";

$("a.delete").on("click", function (e) {
  e.preventDefault();

  if (confirm("Are you sure?")) {
    var frm = $("<form>");
    frm.attr("method", "post");
    frm.attr("action", $(this).attr("href"));
    frm.appendTo("body");
    frm.submit();
  }
});

$.validator.addMethod(
  "dateTime",
  function (value, element) {
    return value == "" || !isNaN(Date.parse(value));
  },
  "Must be a valid date and time"
);

$("#formArticle").validate({
  rules: {
    title: {
      require: true,
    },
    content: {
      require: true,
    },
    published_at: {
      dateTime: true,
    },
  },
});

$("button.publish").on("click", function (e) {
  var id = $(this).data("id");
  var button = $(this);
  alert(id);
  $,
    ajax({
      url: "www/admin/publish-article.php",
      type: "POST",
      data: { id: id },
    }).done(function (data) {
      button.parent().html(data);
    });
});
