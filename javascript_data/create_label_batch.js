/*function format ( d ) {
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
});*/

$(document).ready(function() {
    $.post('../Label/select_spk',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '';
        for(i in dataa){
            table += '<option value="'+dataa[i].id_spk+'">'+dataa[i].spk_number+'</option>';
        }
        $('#spk_no').html(table);
    });

   
});

function select_spk(spk){
    //console.log(spk);
    $.post('../Label/item_deskripsi',{'id_spk' : spk},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
        $('#item_code').val(dataa[0].item_code);
        $('#deskripsi').val(dataa[0].item_name);
        
       
    });

    $.post('../Label/get_heat_no',{'id_spk' : spk},function(data){ 
        dataa = JSON.parse(data);
      //  console.log(dataa);
        $('#heatno_a').val(dataa[0].heat_no_a);
        $('#heatno_b').val(dataa[0].heat_no_b);
        
       
    });

    $.post('../Label/select_lpp_no',{'id_spk' : spk},function(data){ 
        dataa = JSON.parse(data);
        //console.log(dataa);
            table = '';
        for(i in dataa){
            table += '<option value="'+dataa[i].qty_lot+'">'+dataa[i].lot_number+'</option>';
        }
        $('#lpp_no').html(table);
    });
}

function select_lpp_no(str){
    $('#lpp_qty').val(str);
    /*$.post('../Label/lpp_qty',{'lot_number' : str},function(data){ 
        dataa = JSON.parse(data);
      //  console.log(dataa);
        $('#lpp_qty').val(dataa.qty_lot);
        
       
    });*/
}