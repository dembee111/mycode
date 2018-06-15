
<!DOCTYPE html>
<html>
 <head>
  <title>Bootstrap Multi Select Dynamic Dependent Select box using PHP Ajax </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  <!-- <script type="text/javascript" src="assets/divider/dist/number-divider.min.js"></script> -->
  <script src="assets/number_format/jquery.number.js"></script>
  <script src="assets/number_format/jquery.number.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script> -->
 </head>
 <body>
  <br />


  <div class="container">
    <div class="col-md-4">

      <input type="text"
         name="huu" id="bolno" class="form-control bignumber auto divide"
        data-v-min="0" data-v-max="30"
         data-m-dec="2" data-toggle="tooltip"
       title="Хоногт харгалзах хүү" value=""
       placeholder="0.00" >
       <p id="haha"><p>

      <input type="text"
         name="huu" id="loan_huu" class="form-control bignumber auto"
        data-v-min="0" data-v-max="30"
         data-m-dec="2" data-toggle="tooltip"
       title="Хоногт харгалзах хүү" value="6"
       placeholder="0.00" maxlength="3">


      <div class="form-group"><label>Зээлийн хэмжээ</label>
        <div class="input-group">
          <input type="text" id="foo" name="creditzeel" class="form-control bignumber auto" data-v-min="0" data-v-max="1000000000" data-m-dec="2" data-toggle="tooltip" title="Нийт зээлийн хэмжээ" placeholder="0.00" maxlength="10" value="">
              <span class="input-group-addon">₮</span>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
      <table class="table" style="font-size: 20px;">
        <tbody>
       <tr>
        <th style="width:25%">Дуусах өдөр:</th>
        <td style="width:25%" id="enddate" value=""></td>
        <th style="width:25%">Хүү:</th>
        <td style="width:25%" id="sumkhuu"></td>
        </tr>
      </tbody>
    </table>
      </div>
    </div>
  </div>
 <div class="moo">
   <p id="version"></p>
   <input id="demo" type="text" value="">
 </div>
  </div>
 </body>
</html>
<script>
// const anElement = new AutoNumeric('#foo');
$(document).ready(function(){
//   $('input').divide({
//     delimiter:',',
//     divideThousand:false
// });
$('input').number(true, ',');

  $('#bolno').bind("keyup change", function(e) {
    var utga  = $(this).val();

       $('#haha').html(utga);

})

  $('input[name=creditzeel]').bind("keyup change", function(e) {

    calculator();
})

  function calculator() {
      var loan_huu = define_conf($('#loan_huu').val());
      var money = define_conf($('input[name=creditzeel]').val());
      var mungu = money * loan_huu / 100;
      $('#sumkhuu').html(mungu);
  }

  function define_conf(value) {
      if (value === undefined || value === null || value == '') {
          return 0;
      } else {
          return parseFloat(value.replace(/,/g, ''));
      }
  }

});
</script>
