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

  $("form#feedback").submit(function(event){
    event.preventDefault();
    var output = $("#answer").val();
    $("ul#reviews").append('<h3 id="rev"></h3>');
    $("#rev").text(output);
    function reload () {
      location.reload();
    }
  })
});

$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 32) {
      $(".gotop").slideDown(1000);
    } else {
      $(".gotop").fadeOut();
    }
  });

  $("#hire").click(function() {
    $("#nai").fadeOut();
    $("#service").toggle();
  });

  $("#comment").click(function() {
    $("#service").fadeOut();
    $("#chance").slideDown(1000);
  })

  $("#hire2").click(function() {
    $("#nai2").fadeOut();
    $("#service2").toggle();
  });

  $("#comment2").click(function() {
    $("#service2").fadeOut();
    $("#chance2").slideDown(1000);
  })

  $("#hire3").click(function() {
    $("#nai3").fadeOut();
    $("#service3").toggle();
  });

  $("#comment3").click(function() {
    $("#service3").fadeOut();
    $("#chance3").slideDown(1000);
  })

  $("#t-hire").click(function() {
    $("#thikatown").fadeOut();
    $("#tservice").fadeIn()
  });


  $("#tcomment").click(function() {
    $("#tservice").fadeOut();
    $("#tchance").slideDown(1000);
  })

  $("#thire2").click(function() {
    $("#thika2").fadeOut();
    $("#tservice2").fadeIn()
  });

  $("#tcomment2").click(function() {
    $("#tservice2").fadeOut();
    $("#tchance2").slideDown(1000);
  })

  $("#thire3").click(function() {
    $("#thika3").fadeOut();
    $("#tservice3").fadeIn()
  });

  $("#tcomment3").click(function() {
    $("#tservice3").fadeOut();
    $("#tchance3").slideDown(1000);
  })

  $("#mhire").click(function() {
    $("#m-body").fadeOut();
    $("#mservice").fadeIn()
  });

  $("#mcomment").click(function() {
    $("#mservice").fadeOut();
    $("#mchance").slideDown(1000);
  })

  $("#mhire2").click(function() {
    $("#mbody2").fadeOut();
    $("#mservice2").fadeIn()
  });

  $("#mcomment2").click(function() {
    $("#mservice2").fadeOut(2000);
    $("#mchance2").slideDown(1000);
  })

  $("#mhire3").click(function() {
    $("#mbody3").fadeOut();
    $("#mservice3").fadeIn()
  });

  $("#mcomment3").click(function() {
    $("#mservice3").fadeOut(2000);
    $("#mchance3").slideDown(1000);
  })

  $("#jhire").click(function() {
    $("#mjogoo1").fadeOut();
    $("#jservice").fadeIn()
  });

  $("#jcomment").click(function() {
    $("#jservice").fadeOut(2000);
    $("#jchance").slideDown(1000);
  })

  $("#jhire2").click(function() {
    $("#mjogoo2").fadeOut();
    $("#jservice2").fadeIn()
  });

  $("#jcomment2").click(function() {
    $("#jservice2").fadeOut(2000);
    $("#jchance2").slideDown(1000);
  })

  $("#jhire3").click(function() {
    $("#mjogoo3").fadeOut();
    $("#jservice3").fadeIn()
  });

  $("#jcomment3").click(function() {
    $("#jservice3").fadeOut(2000);
    $("#jchance3").slideDown(1000);
  })

  $("#nhire").click(function() {
    $("#ngong1").fadeOut();
    $("#nservice").fadeIn()
  });

  $("#ncomment").click(function() {
    $("#nservice").fadeOut(2000);
    $("#nchance").slideDown(1000);
  })

  $("#nhire2").click(function() {
    $("#ngong3").fadeOut();
    $("#nservice2").fadeIn()
  });

  $("#ncomment2").click(function() {
    $("#nservice2").fadeOut(2000);
    $("#nchance2").slideDown(1000);
  })

  $("#nhire3").click(function() {
    $("#ngong6").fadeOut();
    $("#nservice3").fadeIn()
  });


  $("#ncomment3").click(function() {
    $("#nservice2").fadeOut(2000);
    $("#nchance3").slideDown(1000);
  })

  $("#lhire").click(function() {
    $("#la").fadeOut();
    $("#lservice").fadeIn()
  });

  $("#lcomment").click(function() {
    $("#lservice").fadeOut(2000);
    $("#lchance").slideDown(1000);
  })

  $("#lhire2").click(function() {
    $("#la3").fadeOut();
    $("#lservice2").fadeIn()
  });

  $("#lcomment2").click(function() {
    $("#lservice2").fadeOut(2000);
    $("#lchance2").slideDown(1000);
  })

  $("#lhire3").click(function() {
    $("#la4").fadeOut();
    $("#lservice3").fadeIn()
  });

  $("#lcomment3").click(function() {
    $("#lservice3").fadeOut(2000);
    $("#lchance3").slideDown(1000);
  })

  $("#whire").click(function() {
    $("#waiyaki1").fadeOut();
    $("#wservice").fadeIn()
  });

  $("#wcomment").click(function() {
    $("#wservice").fadeOut(2000);
    $("#wchance").slideDown(1000);
  })

  $("#whire2").click(function() {
    $("#waiyaki2").fadeOut();
    $("#wservice2").fadeIn()
  });

  $("#wcomment2").click(function() {
    $("#wservice2").fadeOut(2000);
    $("#wchance2").slideDown(1000);
  })

  $("#whire3").click(function() {
    $("#waiyaki3").fadeOut();
    $("#wservice3").fadeIn()
  });

  $("#wcomment3").click(function() {
    $("#wservice3").fadeOut(2000);
    $("#wchance3").slideDown(1000);
  })
});
