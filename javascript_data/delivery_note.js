function format ( d ) {
    /*return  'Detail of : '+d.dn_no+
            '<table class="table">'+
                '<thead>'+
                    '<tr>'+
                        '<th>SPK No</th>'+
                        '<th>Batch No</th>'+
                        '<th>Item Code</th>'+
                        '<th>Description</th>'+
                        '<th>Heat No</th>'+
                        '<th>Quantity</th>'+
                        '<th>Uom</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>'+
                    '<tr>'+
                        '<td>1233</td>'+
                        '<td>123333</td>'+
                        '<td>1233</td>'+
                        '<td>123333</td>'+
                        '<td>1233</td>'+
                        '<td>123333</td>'+
                        '<td>1233</td>'+
                    '</tr>'+
                '</tbody>'+
            '</table>';*/

            var table = '';
            table = 'Detail of : '+d.dn_no;
            table +='<table class="table table-striped table-bordered nowrap" id="det_batch'+d.dn_no+'">';
                table += '<thead>';
                    table += '<tr>';
                        table += '<th>SPK No</th>'+
                        '<th>Batch No</th>'+
                        '<th>Item Code</th>'+
                        '<th>Description</th>'+
                        '<th>Heat No</th>'+
                        '<th>Quantity</th>'+
                        '<th>Uom</th>';
                    table += '</tr>';
                table += '</thead>';
                table += '<tbody >'; 
             table += '</tbody>';
             table += '</table>';
 
             $.post('../Label/view_dn_det',{'dn_no' : d.dn_no},function(data){ 
                 dataa = JSON.parse(data);
                 console.log(dataa);
                 for(i in dataa){
                     table += '<tr>';
                     table += '<th>'+dataa[i].spk_no+'</th>';
                     table += '<th>'+dataa[i].serial_id+'</th>';
                     table += '<th>'+dataa[i].item_code+'</th>';
                     table += '<th>'+dataa[i].item_name+' KG</th>';
                     table += '<th>'+dataa[i].heatno_a+'</th>';
                     table += '<th>'+dataa[i].lpp_qty+'</th>';
                     table += '<th></th>';
                     table += '</tr>';
                    
                 }
 
                 $('#det_batch'+d.dn_no).html(table);
     
             });
             
             return table;
 
}

$(document).ready(function() {
    var table = $('#delivery_note').DataTable( {
        "ajax": "../Label/view_deliverynote",
        "searching": true,
        "paging":   true,
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<i class="ik ik-plus-circle"></i>'
            },
            { "data": "dn_no" },
            { "data": "created_date" },
            { "data": "vendor_name" },
            { "data": "plat_no" },
            { "data": "driver_name" },
            { "data": "created_by" },
            { "data": "created_date" }
        ],
        "order": [[1, 'asc']]
    } );

     $('#delivery_note tbody').on('click', 'td.details-control', function () {
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
        }
    } );
});

function search(){
    $status_delivery = $('#status_delivery').val();
    $kategori = $('#kategori').val();
    $search_by = $('#search_by').val();
    console.log($status_delivery);
    console.log($kategori);
    console.log($search_by);
    $('#delivery_note').DataTable().destroy();

}