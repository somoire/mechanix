$(document).ready(function() {
  $("#but").click(function(event) {
    event.preventDefault();
    $(".myForm").hide();
    $(".dropdown").show();
  });
  $("#cbd").click(function(){
    $("#town").show();
    $(".dropdown").hide();
  });
  $("#thikaTown").click(function(){
    $("#thika").show();
    $("#town").hide();
    $(".dropdown").hide();
  });
});
