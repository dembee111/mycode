<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">

        <div class="row">
              <div class="col-sm-3" style="background-color:lavender;">.col-sm-4</div>
              <div class="col-sm-6" style="background-color:lavenderblush;">
                <h1>Зээл үүсгэх</h1>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Zeel angilal</label>
                    <select class="form-control" id="creditcategoryid">
                      echo '<option value="">Сонгох</option>';
                  <?php

                  include "controller.php";

                      foreach($result as $row)
                      {

                        echo '<option value="'.$row["zturul_id"].'">'.$row["name"].'</option>';
                      }

                  ?>


                    </select>
                  </div>

                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Zeeliin hugatsaa</label>
                      <select class="form-control" id="getdayid">


                      </select>
                    </div>
                    <div id="loan_huu" class="form-group">
                        <label for="exampleFormControlSelect1">Zeeliin hugatsaa</label>

                        <!-- <input type="text"
                               name="huu" id="loan_huu" class="form-control bignumber auto"
                              data-v-min="0" data-v-max="30"
                               data-m-dec="2" data-toggle="tooltip"
                             title="Хоногт харгалзах хүү" value=""
                             placeholder="0.00" maxlength="3"> -->
                      </div>

              </div>
              <div class="col-sm-3" style="background-color:lavender;">.col-sm-4</div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
          $(document).ready(function(){
            $("#creditcategoryid").on('change', function(){
                  var selected = $(this).val();

                  $.ajax({
                    url:"controller1.php",
                    method:"POST",
                    data:{'selected' : selected},
                    success: function(data){
                      $('#getdayid').html(data);

                    },
                    error:function(){
                      alert('Error accur....!!!');
                    }
                  });

               });

               $("#getdayid").on('change', function(){
                     var songolt = $(this).val();

                     $.ajax({
                       url:"controller2.php",
                       method:"POST",
                       dataType: 'json',
                       data:{'songolt' : songolt},
                       success: function(data){
                         $('#loan_huu').html(data);

                       },
                       error:function(){
                         alert('Error accur....!!!');
                       }
                     });

                  });
          });

    </script>
  </body>
</html>
