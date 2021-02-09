
  <script>
document.getElementById("total_incomes").innerHTML="<?php echo $total_sales ?>$";
document.getElementById("commandes").innerHTML="<?php echo $chart_commander ?>";
document.getElementById("users").innerHTML="<?php echo $users_number ?>";
</script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});

      google.charts.setOnLoadCallback(drawChart);


      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['commander', <?php echo $chart_commander ?>],
          ['non commander', <?php echo $chart_non_commander ?>],
       
        ]);


        var options = {'title':'products selected in the cart',
                       'width':400,
                       'height':300};

        var chart = new google.visualization.PieChart(document.getElementById('cart'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});

google.charts.setOnLoadCallback(drawChart2);


function drawChart2() {

  var data2 = new google.visualization.DataTable();
  data2.addColumn('string', 'Topping');
  data2.addColumn('number', 'Slices');
  data2.addRows([
    ['refused', <?php echo $chart_refused ?>],
    ['validate', <?php echo $chart_validate ?>],
    ['waiting for validationg', <?php echo $chart_waiting ?>],
 
  ]);


  var options2 = {'title':'stat of commands',
                 'width':400,
                 'height':300};

  var chart2 = new google.visualization.PieChart(document.getElementById('2'));
  chart2.draw(data2, options2);
}
</script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});

google.charts.setOnLoadCallback(drawChart3);
function drawChart3() {

var data3 = new google.visualization.DataTable();
data3.addColumn('string', 'Topping');
data3.addColumn('number', 'Slices');
data3.addRows([
  <?php
  for ($x = 0; $x < count($distinct_category); $x++) {                  
  ?>

   ['<?php echo $distinct_category[$x] ?>', <?php echo  $distinct_category_sales[$x] ; ?> ],
  
  <?php             
  }
  ?>


]);


var options3 = {'title':'sales by category',
               'width':600,
               'height':500};

var chart3 = new google.visualization.PieChart(document.getElementById('3'));
chart3.draw(data3, options3);
}
</script>




<script>
  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Time of Day');
      data.addColumn('number', 'Motivation Level');

      data.addRows([
        ['January',<?php echo $January ?>],
        ['February',<?php echo $February?>],
        ['march', <?php echo $march?>],
        ['april',<?php echo $april?>],
        ['may',<?php echo $may?>],
        ['june',<?php echo $june?>],
        ['july',<?php echo $july?>],
        ['august',<?php echo $august?>],
        ['september',<?php echo $september?>],
        ['october',<?php echo $october?>],
        ['november',<?php echo $november?>],
        ['december',<?php echo $december?>],
 

      ]);

      var options = {
        title: 'sales during the year',
        hAxis: {
          title: 'monts',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'sales benefits with $'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('sales by year'));

      chart.draw(data, options);
    }
</script>