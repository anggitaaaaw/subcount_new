function format ( d ) {
    table = ''+
      'Detail of : '+d.dn_no+
            '<table class="table table-striped table-bordered nowrap" id="det_batch'+d.dn_no+'">'+
                '<thead>'+
                    '<tr>'+
                        '<th style="width: 50px;">SPK No</th>'+
                        '<th>Batch No</th>'+
                        '<th>LPP No</th>'+
                        '<th>Item Code</th>'+
                        '<th>Description</th>'+
                        '<th>Heat No</th>'+
                        '<th>Qty <br> (Pcs)</th>'+
                        '<th>Qty <br>(Kg)</th>'+
                        '<th>Actual <br>(Pcs)</th>'+
                        '<th>Actual <br>(Kg)</th>'+
                        '<th>Balance <br>(Pcs)</th>'+
                        '<th>Balance <br>(Kg)</th>'+
                        '<th>Create Report</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>'+
                '</tbody>'+
                '</table>';

                $.post('../Label/trx_ven_receive_det',{'dn_no' : d.dn_no},function(data){ 
                    dataa = JSON.parse(data);
                    console.log(dataa);
                    for(i in dataa){
                       table += '<tr>'+
                                    '<th>'+dataa[i].spk_no+'</th>'+
                                    '<th>'+dataa[i].batch_no+'</th>'+
                                    '<th>'+dataa[i].lpp_no+'</th>'+
                                    '<th>'+dataa[i].item_code+'</th>'+
                                    '<th>'+dataa[i].item_name+'</th>'+
                                    '<th>'+dataa[i].heatno_a+'</th>'+
                                    '<th>'+dataa[i].qty_real+'</th>'+
                                    '<th>'+dataa[i].weight_real+'</th>'+
                                    '<th>'+dataa[i].qty_actual+'</th>'+
                                    '<th>'+dataa[i].weight_actual+'</th>'+
                                    '<th>'+dataa[i].qty_balance+'</th>'+
                                    '<th>'+dataa[i].weight_balance+'</th>';
                                    if(dataa[i].qty_balance == '0'){
                                        table += '<td><button  class="btn btn-info  mr-2"  disabled>Receiving Report</button></td>';
                                    }else{
                                        table += '<button class="btn btn-primary mr-2" data-target="#editQty" data-toggle="modal" onclick="modal_notif(this.value)" value="'+d.dn_no+'"><i class="ik ik-plus"></i>Receiving</button>';

                                    }


                                '</tr>';
                       
                    }
    
                    $('#det_batch'+d.dn_no).html(table);
        
                });
                
                  
               

            return table;
}


$(document).ready(function() {

    var table = $('#receiving_disubcount').DataTable( {
        "ajax": "../Label/trx_ven_receive",
        "searching": false,
        "paging":   false,
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<i class="ik ik-plus-circle"></i>'
            },
            { "data": "dn_date" },
            { "data": "dn_no" },
            { "data": "plat_no" },
            { "data": "driver_name" },
            { "data": "receive_date" },
            { "data": "receive_user" }
        ],
        "order": [[1, 'asc']]
    } );
    
    // Add event listener for opening and closing details
    $('#receiving_disubcount tbody').on('click', 'td.details-control', function () {
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


function modal_notif(q){
    var dataId = q;
    //console.log(dataId);

    $.post('../Label/trx_ven_receive_det',{'dn_no' : dataId},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);
        var d = new Date();
        tgl = d.getDate();
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        bulan = months[d.getMonth()];
        tahun = d.getFullYear();
        trans_date = 'Transaction Date: <b>'+tgl+' '+bulan+' '+tahun+'</b>';
        $('#trans_date').html(trans_date);
        $('#dn_no').val(dataa[0].dn_no);
        $('#spk_no').val(dataa[0].spk_no);
        $('#lpp_no').val(dataa[0].lpp_no);
        $('#item_code').val(dataa[0].item_code);
        $('#item_name').val(dataa[0].item_name);
        $('#heatno_a').val(dataa[0].heatno_a);
        $('#qty_real').val(dataa[0].qty_real);
        $('#weight_real').val(dataa[0].weight_real);
        $('#qty_real2').val(dataa[0].qty_real);
        $('#weight_real2').val(dataa[0].weight_real);
        $('#qty_real3').val(dataa[0].qty_real);
        $('#weight_real3').val(dataa[0].weight_real);
        
    });

}