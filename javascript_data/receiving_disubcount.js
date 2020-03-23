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

                                        table += '<th><button class="btn btn-primary mr-2" data-target="#editQty2" data-toggle="modal" onclick="modal_notif_receive(this.value)" value="'+d.dn_no+'" disabled><i class="ik ik-plus"></i>Receiving</button></th>';
                                    }else{

                                        table += '<th><button class="btn btn-primary mr-2" data-target="#editQty2" data-toggle="modal" onclick="modal_notif_receive(this.value)" value="'+d.dn_no+'"><i class="ik ik-plus"></i>Receiving</button></th>';

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


function modal_notif_receive(q){
    var dataId = q;
    //console.log(dataId);

    $.post('../Label/trx_ven_receive_det',{'dn_no' : dataId},function(data){ 
        dataa = JSON.parse(data);
      //  console.log(dataa);
        var d = new Date();
        tgl = d.getDate();
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        bulan = months[d.getMonth()];
        tahun = d.getFullYear();
        trans_date = 'Transaction Date: <b>'+tgl+' '+bulan+' '+tahun+'</b>';
        console.log(trans_date);
        $('#trans_date2').html(trans_date);
        $('#dn_no2').val(dataa[0].dn_no);
        $('#spk_no2').val(dataa[0].spk_no);
        $('#lpp_no2').val(dataa[0].lpp_no);
        $('#item_code2').val(dataa[0].item_code);
        $('#item_name2').val(dataa[0].item_name);
        $('#heatno_a2').val(dataa[0].heatno_a);
        $('#qty_real12').val(dataa[0].qty_real);
        $('#weight_real12').val(dataa[0].weight_real);
        $('#qty_real22').val(dataa[0].qty_real);
        $('#weight_real22').val(dataa[0].weight_real);
        $('#qty_real32').val(dataa[0].qty_real);
        $('#weight_real32').val(dataa[0].weight_real);
        
    });

}

function notif(){
    $.post('../Label/receiving_report',{},function(data){ 
        dataa = JSON.parse(data);

        list =  '<h4 class="header">Notifications</h4>';
        a = 0;
        for(i in dataa){
            list += '<div class="notifications-wrap">'+
                                        '<a href="#" data-id="'+dataa[i].dn_no+'" data-target="#editQty" data-toggle="modal" onclick="modal_notif(this)" class="media">'+
                                            '<span class="d-flex">'+
                                                '<i class="ik ik-check"></i> '+
                                            '</span>'+
                                            '<span class="media-body">'+
                                                '<span class="heading-font-family media-heading">Receiving Report <br></span> '+
                                                '<span class="media-content">'+dataa[i].dn_no+' <br> '+dataa[i].receive_date+'</span>'+
                                            '</span>'+
                                        '</a>'+
                                    '</div>';
                                    a++;
        }
        
        list += '<div class="footer"><a href="javascript:void(0);">See all activity</a></div>';

        $('#list_notif').html(list);
        $('#angka_notif').html('<span class="badge bg-danger">'+a+'</span>');
    });
}
function simpan_receiving_report(){
    dn_no = $('#dn_no2').val();
  //  console.log(dn_no);
    $.post('../Label/simpan_receiving_report',{'dn_no' : dn_no},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);

        if(data == 1){
            swal("receiving report success!", {
                icon: "success",
              });
              notif();
          }else{
            swal("receiving report failed!", {
                icon: "failed",
              });
              
          }
    });

}