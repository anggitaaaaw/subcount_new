function format ( d ) {
    table = 'Detail of : '+d.spk_no+
            '<table class="table" id="det_batch'+d.dn_no+'">'+
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
                        '<th>Print Label</th>'+
                        '<th>Status</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>'+
                '</tbody>'+
                '</table>';
                $.post('../Label/trx_ven_delivery_det',{'dn_no' : d.dn_no},function(data){ 
                    dataa = JSON.parse(data);
                    console.log(dataa);
                    for(i in dataa){
                         table +='<tr>'+
                                '<td>'+dataa[i].spk_no+'</td>'+
                                '<td>'+dataa[i].batch_no+'</td>'+
                                '<td>'+dataa[i].lpp_no+'</td>'+
                                '<td>'+dataa[i].item_code+'</td>'+
                                '<td>'+dataa[i].item_name+'</td>'+
                                '<td>'+dataa[i].heatno_a+'</td>'+
                                '<td>'+dataa[i].qty_real+'</td>'+
                                '<td>'+dataa[i].qty_actual+'</td>'+
                                '<td>'+dataa[i].qty_balance+'</td>'+
                                '<td><button data-toggle="modal" data-target="#modal_printlabel" class="btn btn-warning mr-2" value='+dataa[i].spk_no+' onclick="print_label(this.value)"><i class="ik ik-printer"></i>Print</button></td>'+
                                '<td>Open</td>'+
                            '</tr>';
                    }
                    $('#det_batch'+d.dn_no).html(table);
                });

                return table;
              
}

function print_label(spk_no){
    $("#iframe4").attr("src","print_label/"+spk_no);
}

function print_packinglist(spk_no){
    $("#iframe5").attr("src","print_packing_list/"+spk_no);
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
            {
                "targets": -1,
                "data": null,
                "defaultContent": "<button class='btn btn-info mr-2'><i class='ik ik-printer'></i>Print</button>"
            },
            { "data": "status_dn" }
        ],
        buttons: [
            'copy', 'excel', 'pdf'
        ],
        "order": [[1, 'asc']]
    } );
    
    $('#vendor_delivery tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
        console.log(data.vendor_name);
      //  alert( data.vendor_name +"'s salary is: "+ data.item_id );
        
     
      $("#iframe5").attr("src","print_packing_list/"+data.dn_no);
        $("#modal_packinglist").modal("show");
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

    $('#print_label_vendor').click(function() {
        $("#iframe4").get(0).contentWindow.print();
    });
    $('#print_packing_list').click(function() {
        $("#iframe5").get(0).contentWindow.print();
    });
});