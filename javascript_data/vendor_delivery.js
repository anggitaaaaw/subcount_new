function format ( d ) {
    return  'Detail of : '+d.spk_no+
            '<table class="table">'+
                '<thead>'+
                    '<tr>'+
                        '<th>SPK No</th>'+
                        '<th>Batch No</th>'+
                        '<th>LPP No</th>'+
                        '<th>Item Code</th>'+
                        '<th>Description</th>'+
                        '<th>Heat No</th>'+
                        '<th>Quantity</th>'+
                        '<th>Actual</th>'+
                        '<th>Balance</th>'+
                        '<th>Create</th>'+
                        '<th>Print Label</th>'+
                        '<th>Status</th>'+
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
                        '<td>123333</td>'+
                        '<td>1233</td>'+
                        '<td><input type="checkbox"></td>'+
                        '<td><button data-toggle="modal" data-target="#modal_printlabel" class="btn btn-warning mr-2"><i class="ik ik-printer"></i>Print</button></td>'+
                        '<td>Open</td>'+
                    '</tr>'+
                '</tbody>'+
            '</table>';
}

$(document).ready(function() {
    var table = $('#vendor_delivery').DataTable( {
        "ajax": "../Label/vendor_delivery",
        "searching": false,
        "paging":   false,
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<i class="ik ik-plus-circle"></i>'
            },
            { "data": "dn_no" },
            { "data": "created_date" },
            { "data": "plat_no" },
            { "data": "driver_name" },
            { "data": "receive_date" },
            { "data": "receive_user" },
            { "data": "created_date" },
            { "data": "created_by" },
            { "data": "leadtime" },
            { "data": "pl_no" },
            { "data": "status_dn" }
        ],
        buttons: [
            'copy', 'excel', 'pdf'
        ],
        "order": [[1, 'asc']]
    } );
    
    // Add event listener for opening and closing details
    $('#vendor_delivery tbody').on('click', 'td.details-control', function () {
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