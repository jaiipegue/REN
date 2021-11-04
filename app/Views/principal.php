<div class="col-lg-3 col-xs-6">
  <canvas id="myChart" width="400" height="400"></canvas>
</div>

<script>

var chart = $('#myChart');
$(document).ready(function(){
    $.post("<?= base_url() ?>report",{},function(data){
    var labeles = [];
    var datales= []
    data.map((indicator)=>{
      labeles.push(indicator.fecha)
      datales.push(indicator.cantidad)
    })
    chartRender('Cantidad de solicitudes por mes',datales,labeles,chart);
  },'Json')
})

function chartRender(title,dataa,labels,instance){
    var myChart = new Chart(instance, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
              label: title,
              data: dataa,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
  }

</script>