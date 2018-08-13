<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>


    $( function neg() {
      $( "#slider" ).slider({
        value:100,
        min: 0,
        max: 200000000,
        step: 500000,
        slide: function( event, ui ) {
          var zeel = $( "#amount" ).val(   ui.value + " ₮");
        }
      });
      $( "#amount" ).val(  $( "#slider" ).slider( "value" ) + " ₮");
    });
    //--------huu----------------

    $( function hoyr() {
      $( "#slider1" ).slider({
        value:0,
        min: 0,
        max: 19.9,
        step: 0.1,
        slide: function( event, ui ) {
          var huu = $( "#amount1" ).val(   ui.value + " %");
        }
      });
      $( "#amount1" ).val(  $( "#slider1" ).slider( "value" ) + " %");
    });

    //--------зээлийн хугацаа----------------

    $( function guraw() {
      $( "#slider2" ).slider({
        value:0,
        min: 0,
        max: 360,
        step: 1,
        slide: function( event, ui ) {
          var hugatsaa = $( "#amount2" ).val(   ui.value + " сар");
        }
      });
      $( "#amount2" ).val(  $( "#slider2" ).slider( "value" ) + " сар");

    });




  $('#amount').slider("value");

    function calculator() {
      // var zeel = $('#amount').val();
      // var huu = $('#amount1').val();
      // var hugatsaa = $('#amount2').val();

      var result = hugatsaa/(zeel * huu/100);
      $('#garalt').html(result);
}
$(document).ready(function(){
$('#slider2').bind('key up', function(){
  $('#garalt').val(hugatsaa).slider("value");
})

  // $('#slider').value("change", function(e) {
  //     alert("hoho");
  //     $('input[name=garalt]').css("background-color", "#d6d6c2");
  //     calculator();
  // });

})



    </script>

</head>
<body>

<div class="container">
  <h1>Зээлийн хэмжээ</h1>
      <p>
          <label for="amount">Зээлийн хэмжээ (500,000 ₮ өөр зайтай):</label>
          <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
    </p>

    <div id="slider"></div>

    <h1>Хүүгийн хэмжээ</h1>
        <p>
            <label for="amount">Хүүний хэмжээ (0,0 % сараар):</label>
            <input type="text" id="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;">
      </p>

      <div id="slider1"></div>

      <h1>Зээлийн хугацаа</h1>
          <p>
              <label for="amount2">Зээлийн хугацаа (сараар):</label>
              <input type="text" id="amount2" readonly style="border:0; color:#f6931f; font-weight:bold;">
        </p>

        <div id="slider2"></div>
        <hr>
        <h4>Сард төлбөл зохих зээлийн хэмжээ :</h4>
        <input type="text" name="garalt" id="garalt" value="">
</div>
</form>
</body>
</html>
