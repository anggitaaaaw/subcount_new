$(document).ready(function() {
    $.post('../Label/chart_progress_dn',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
    var c3DonutChart = c3.generate({
        bindto: '#c3-donut-chart',
        //size: { height: 300, width: 600 },
        data: {
          columns: [
            ['Open', dataa[0].opened],
            ['Close', dataa[1].closed],
          ],
          type: 'donut'
        }
      });
    });
    $.post('../Label/chart_dn_delivery',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
      var c3DonutChart2 = c3.generate({
        bindto: '#c3-donut-chart2',
        data: {
          columns: [
            ['Early', dataa[0].early],
            ['Late', dataa[0].late],
            ['On Time', dataa[0].ontime],
          ],
          type: 'donut'
        }
      });
    });
      $.post('../Label/chart_incoming_qc',{},function(data){ 
        dataa = JSON.parse(data);
        //console.log(dataa);
      var c3DonutChart3 = c3.generate({
        bindto: '#c3-donut-chart3',
        data: {
          columns: [
            ['NG', dataa[1].ng],
            ['NC', dataa[2].nc],
            ['Good', dataa[0].ok],
          ],
          type: 'donut'
        }
      });
    });
    
});