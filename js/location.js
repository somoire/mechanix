$(document).ready(function() {
  $("#but").click(function(event) {
    var message = $("#message").val();
    if (message == "") {
      alert("Please State your Problem!!");
      return;
    }
    event.preventDefault();
    $(".myForm").hide();
    $(".dropdown").show();
  });
  $("#cbd").click(function() {
    $("#town").show();
    $(".dropdown").hide();
  });
  $("#thikaTown").click(function() {
    $("#thika").show();
    $("#town").hide();
    $(".dropdown").hide();
  });

});
