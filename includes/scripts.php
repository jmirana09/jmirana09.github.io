
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/parallax/parallax.min.js"></script>
    <script type="text/javascript" src="/assets/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/assets/sticky/jquery.sticky.js"></script>
    <script>
    // Can also be used with $(document).ready()
$(window).load(function() {
  $('#slide1').flexslider({
    animation: "fade",
    slideshow: false
  });
  $('#slide2').flexslider({
    animation: "slide",
    slideshow: false
  });
});

$(document).ready(function(){


    $("#sticker").sticky({topSpacing:0});

    $("#button1").click(function() {
      $(".form1").slideToggle();
      $(".form2").css("display","none");

      if ($(this).text() == "Personal Credit Application Form") {
       $(this).text("Now Showing Personal Credit Application Form")
       } else {
         $(this).text("Personal Credit Application Form");
       }
       if ($("#button2").text() == "Now Showing Business Credit Application Form") {
       $("#button2").text("Business Credit Application Form")
       }
    });

    $("#button2").click(function() {
      $(".form2").slideToggle();
      $(".form1").css("display","none");

      if ($(this).text() == "Business Credit Application Form") {
       $(this).text("Now Showing Business Credit Application Form")
       } else {
         $(this).text("Business Credit Application Form");
       }
       if ($("#button1").text() == "Now Showing Personal Credit Application Form") {
       $("#button1").text("Personal Credit Application Form")
       }

    });

});
    </script>
  </body>
</html>