<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });
});
</script>
</head>
<body>

<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>

</body>
</html>
new Morris.Line({
  element : 'chart',
  data:[<?php echo $chart_data; ?>],
  xkey:'year',
  ykeys:['profit', 'purchase', 'sale'],
  labels:['Profit', 'Purchase', 'Sale'],

});
