function format ( d ) {
   /* table =  'Detail of : '+d.serial_number+
            '<table class="table table-striped table-bordered nowrap">'+
                '<thead>'+
                    '<tr>'+
                        '<th>LPP No</th>'+
                        '<th>Qty</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>'+
                    '<tr>'+
                        '<td>1233</td>'+
                        '<td>123333</td>'+
                    '</tr>'+
                '</tbody>'+
            '</table>';

            return table;*/
    var table = '';
           table = 'Detail of : '+d.serial_number;
           table +='<table class="table table-striped table-bordered nowrap" id="det_batch'+d.serial_number+'">';
               table += '<thead>';
                   table += '<tr>';
                       table += '<th>SPK NO</th>';
                       table += '<th>Item ID</th>';
                       table += '<th>Item Name</th>';
                       table += '<th>Heat No A</th>';
                       table += '<th>Heat No B</th>';
                       table += '<th>LPP NO</th>';
                       table += '<th>LPP Qty</th>';
                       table += '<th>Weight</th>';
                       table += '<th>Date Created</th>';
                   table += '</tr>';
               table += '</thead>';
               table += '<tbody >'; 
            table += '</tbody>';
            table += '</table>';

            $.post('../Label/view_label_all',{'serial_number' : d.serial_number},function(data){ 
                dataa = JSON.parse(data);
                console.log(dataa);
                for(i in dataa){
                    table += '<tr>';
                    table += '<th>'+dataa[i].spk_no+'</th>';
                    table += '<th>'+dataa[i].item_id+'</th>';
                    table += '<th>'+dataa[i].item_name+'</th>';
                    table += '<th>'+dataa[i].heatno_a+'</th>';
                    table += '<th>'+dataa[i].heatno_b+'</th>';
                    table += '<th>'+dataa[i].lpp_no+'</th>';
                    table += '<th>'+dataa[i].lpp_qty+'</th>';
                    table += '<th>'+dataa[i].weight+'</th>';
                    table += '<th>'+dataa[i].date_created+'</th>';
                    table += '</tr>';
                   
                }

                $('#det_batch'+d.serial_number).html(table);
    
            });
            
            return table;

            
}

$(document).ready(function() {
    
    var table = $('#create_label_batch').DataTable( {
        "ajax": "../Label/view_label_sn",
        "searching": true,
        "paging":   true,
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<i class="ik ik-plus-circle"></i>'
            },
           
            { "data": "serial_number" },
            { "data": "user_created" },
            { "data": "status_print" }
        ],
        "order": [[1, 'asc']]
    } );
    
    // Add event listener for opening and closing details
    $('#create_label_batch tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
            tr.removeClass('shown');
        }
    } );
});