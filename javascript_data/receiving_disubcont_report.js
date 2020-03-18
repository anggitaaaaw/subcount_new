$(document).ready(function() {
    console.log('ss');
    var table = $('#receiving_disubcount_report').DataTable( {
        "ajax": "../Label/view_receiving_report",
        "searching": true,
        "paging":   true,
        "columns": [
            { "data": "id" },
            { "data": "dn_date" },
            { "data": "dn_no" },
            { "data": "vendor_name" },
            { "data": "spk_no" },
            { "data": "lpp_no" },
            { "data": "item_code" },
            { "data": "item_name" },
            { "data": "heatno_a" },
            { "data": "qty_real" },
            { "data": "weight_real" },
            { "data": "qty_actual" },
            { "data": "weight_actual" },
            { "data": "qty_balance" },
            { "data": "weight_balance" },
            { "data": "receive_date" }
        ],
        "order": [[1, 'asc']]
    } );
    
    console.log(table);
    // Add event listener for opening and closing details
    $('#receiving_disubcount_report tbody').on('click', 'td.details-control', function () {
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
