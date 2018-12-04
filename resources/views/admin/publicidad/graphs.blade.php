@extends ('layouts.admin')
@section ('contenido')
  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

    	var analytics = <?php echo $est_publicidad; ?>


      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for publicidad pizza when Charts is loaded.
      google.charts.setOnLoadCallback(publicidadChart);


      // Callback that draws the pie chart for Sarah's pizza.
      function publicidadChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.arrayDataTable([
        	['Publicidad','Activa'],
        		@foreach($pub as $publi)
        		['{{$publi->est_publicidad}}']@endforeach


        	]);
            

        // Set options for publicidad's pie chart.
        var options = {title:'Publicidad activa / no activa',
                       width:400,
                       height:300};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('publicidadChartPie'));
        chart.draw(data, options);
      }

    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="publicidadChartPie" style="border: 1px solid #ccc"></div></td>
        <td><div id="Anthony_chart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
    </table>
  </body>
</html>


 @endsection
