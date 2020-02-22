$(document).ready(function() {
  $("#btnSubmit").on("click", function(e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var text = $("#comment").val();
    var errors = new Array();
    var reEmail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var counter = 0;

    if (name == "") {
      errors.push("Name field is required");
    } else {
      errors.push("");
    }
    if (email == "") {
      errors.push("Email field is required");
    } else if (!reEmail.test(email)) {
      errors.push("Invalid email");
    } else {
      errors.push("");
    }
    if (text == "") {
      errors.push("Comment field is required");
    } else {
      errors.push("");
    }

    $(".err").each(function(index) {
      counter += errors[index].length;
      $(this).text(errors[index]);
    });
    if (counter == 0) {
      $.ajax({
        method: "POST",
        url: URL + "/add_comment.php",
        data: { name: name, email: email, text: text },
        success: function(data) {
          console.log(data);
          $(".feedback").text(data);
        },
        error: function(data) {
          console.log(data);
        }
      });
    }
  });
  $(".aprrove").on("click", function() {
    var id = $(this).attr("data-id");
    $.ajax({
      method: "POST",
      url: URL + "/approve_comment.php",
      data: { id: id },
      success: function(data) {
        console.log(data);
        $("#feedbackAdmin").text(data);
        $("#feedbackAdmin").removeClass("d-none");
        setTimeout(() => {
          location.reload();
        }, 800);
      },
      error: function(data) {
        console.log(data);
      }
    });
  });
});
