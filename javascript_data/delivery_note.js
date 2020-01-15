function format ( d ) {
    return  'Detail of : '+d.spk_no+
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
            '</table>';
}

$(document).ready(function() {
    var table = $('#delivery_note').DataTable( {
        "ajax": "../json/data_clb.json",
        "searching": false,
        "paging":   false,
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<i class="ik ik-plus-circle"></i>'
            },
            { "data": "spk_no" },
            { "data": "batch_no" },
            { "data": "item_code" },
            { "data": "desc" },
            { "data": "heatno" },
            { "data": "cuser" },
            { "data": "cdate" }
        ],
        "order": [[1, 'asc']]
    } );
    
    // Add event listener for opening and closing details
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