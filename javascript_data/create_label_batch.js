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
           table = 'Detail of : '+d.spk_no;
           table +='<table class="table table-striped table-bordered nowrap" id="det_batch'+d.spk_no+'">';
               table += '<thead>';
                   table += '<tr>';
                       table += '<th>Serial Number</th>';
                       table += '<th>LPP NO</th>';
                       table += '<th>LPP Qty</th>';
                       table += '<th>Weight</th>';
                       table += '<th>Date Created</th>';
                   table += '</tr>';
               table += '</thead>';
               table += '<tbody >'; 
            table += '</tbody>';
            table += '</table>';

            $.post('../Label/view_label_all',{'serial_number' : d.spk_no},function(data){ 
                dataa = JSON.parse(data);
                console.log(dataa);
                for(i in dataa){
                    table += '<tr>';
                    table += '<th>'+dataa[i].serial_number+'</th>';
                    table += '<th>'+dataa[i].lpp_no+'</th>';
                    table += '<th>'+dataa[i].lpp_qty+'</th>';
                    table += '<th>'+dataa[i].weight+' KG</th>';
                    table += '<th>'+dataa[i].date_created+'</th>';
                    table += '</tr>';
                   
                }

                $('#det_batch'+d.spk_no).html(table);
    
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
           
            { "data": "vendor_name" },
            { "data": "spk_no" },
            { "data": "item_id" },
            { "data": "item_name" },
            { "data": "container_qty" },
            { "data": "batch_qty" },
            { "data": "user_created" },
            {
                "targets": -1,
                "data": null,
                "defaultContent": "<button>Reprint</button>"
            }
        ],
        "order": [[1, 'asc']]
    } );
    
    $('#create_label_batch tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
        console.log(data.vendor_name);
      //  alert( data.vendor_name +"'s salary is: "+ data.item_id );
        
     
        $("#iframe3").attr("src","print_label/"+data.spk_no);
        $("#modal_printlabel").modal("show");
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