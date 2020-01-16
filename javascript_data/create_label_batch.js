function format ( d ) {
    return  'Detail of : '+d.name+
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
}

$(document).ready(function() {
    var table = $('#create_label_batch').DataTable( {
        "ajax": "../json/data_clb.json",
        "searching": true,
        "paging":   true,
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
            { "data": "uom" },
            { "data": "cuser" },
            { "data": "cdate" }
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
        }
    } );
});