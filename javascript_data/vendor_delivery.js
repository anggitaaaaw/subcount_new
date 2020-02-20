function format ( d ) {
    table = 'Detail of : '+d.dn_no+
            '<table class="table" id="det_batch'+d.dn_no+'">'+
                '<thead>'+
                    '<tr>'+
                       
                        '<th>Batch No</th>'+
                        '<th>LPP No</th>'+
                        '<th>Item Code</th>'+
                        '<th>Description</th>'+
                        '<th>Heat No</th>'+
                        '<th>Qty (Pcs)</th>'+
                        '<th>Qty (Kg)</th>'+
                        '<th>Actual (Pcs)</th>'+
                        '<th>Actual (Kg)</th>'+
                        '<th>Balance (Pcs)</th>'+
                        '<th>Balance (Kg)</th>'+
                        '<th>Action</th>'+
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
                               
                                '<td>'+dataa[i].batch_no+'</td>'+
                                '<td>'+dataa[i].lpp_no+'</td>'+
                                '<td>'+dataa[i].item_code+'</td>'+
                                '<td>'+dataa[i].item_name+'</td>'+
                                '<td>'+dataa[i].heatno_a+'</td>'+
                                '<td>'+dataa[i].qty_real+'</td>'+
                                '<td>'+dataa[i].weight_real+'</td>'+
                                '<td>'+dataa[i].qty_actual+'</td>'+
                                '<td>'+dataa[i].weight_actual+'</td>'+
                                '<td>'+dataa[i].qty_balance+'</td>'+
                                '<td>'+dataa[i].weight_balance+'</td>';
                               /* if(dataa[i].status_dn == 'open'){
                                    table += '<td><button data-toggle="modal" data-target="#editQty" class="btn btn-danger    mr-2" value='+dataa[i].batch_no+' onclick="edit_qty(this.value)" disabled><i class="ik ik-edit"></i>Edit Qty</button></td>'+
                                    '<td><button data-toggle="modal" data-target="#modal_printlabel" class="btn btn-warning mr-2" value='+dataa[i].spk_no+' onclick="print_label(this.value)" disabled><i class="ik ik-printer"></i>Print</button></td>';
                                }else{
                                    table += '<td><button data-toggle="modal" data-target="#editQty" class="btn btn-danger    mr-2" value='+dataa[i].batch_no+' onclick="edit_qty(this.value)"><i class="ik ik-edit"></i>Edit Qty</button></td>'+
                                    '<td><button data-toggle="modal" data-target="#modal_printlabel" class="btn btn-warning mr-2" value='+dataa[i].spk_no+' onclick="print_label(this.value)"><i class="ik ik-printer"></i>Print</button></td>';
                                }*/
                               
                                table += '<td>'+dataa[i].status_dn+'</td>'+
                            '</tr>';
                    }
                    $('#det_batch'+d.dn_no).html(table);
                });

                return table;
              
}

function print_label(spk_no){
    $("#iframe4").attr("src","print_label_ven_del/"+spk_no);
}

function edit_qty(batch_no){
    $.post('../Label/edit_qty_vd',{'batch_no' : batch_no},function(data){ 
        dataa = JSON.parse(data);
        $('#qty_pcs').val(dataa.qty_real);
        $('#qty_kg').val(dataa.weight_real);
        $('#actual_pcs').val(dataa.qty_actual);
        $('#actual_kg').val(dataa.weight_actual);
        $('#balance_pcs').val(dataa.qty_balance);
        $('#balance_kg').val(dataa.weight_balance);
        $('#serial_id').val(dataa.batch_no);
        $('#dn_no').val(dataa.dn_no);
    });
}

function hitung_pcs(){
    qty_pcs =  $('#qty_pcs').val();
    actual_pcs =  $('#actual_pcs').val();

    balance = qty_pcs - actual_pcs;
    if(balance < 0){
        swal('balance cannot be negative');
    }else{
        $('#balance_pcs').val(balance);
    }
   
}

function hitung_kg(){
    qty_pcs =  $('#qty_kg').val();
    actual_pcs =  $('#actual_kg').val();

    balance = qty_pcs - actual_pcs;
    if(balance < 0){
        swal('balance cannot be negative');
    }else{
        $('#balance_kg').val(balance);
    }
 
}


function simpan_qty(){
    serial_id = $('#serial_id').val();
    dn_no = $('#dn_no').val();
    qty_pcs = $('#qty_pcs').val();
    qty_kg = $('#qty_kg').val();
    actual_pcs = $('#actual_pcs').val();
    actual_kg = $('#actual_kg').val();
    balance_pcs = $('#balance_pcs').val();
    balance_kg = $('#balance_kg').val();
   
    $.post('../Label/proses_edit_qty2',{'batch_no' : serial_id, 'qty_real' : qty_pcs, 'weight_real' : qty_kg, 'qty_actual' : actual_pcs, 'weight_actual' : actual_kg, 'qty_balance' : balance_pcs, 'weight_balance' : balance_kg},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);
        

        if(dataa == 1){
            swal("Qty Success Edited!", {
                icon: "success",
              });
              
          }else{
            swal("Qty edit failed!", {
                icon: "failed",
              });
              
          }
          $('#vendor_delivery').DataTable().ajax.reload();
         //view_tbl_dn_no(dn_no);
          $("#editQty").modal("hide");

    });
    
}

$(document).ready(function() {
    var table = $('#vendor_delivery').DataTable( {
        "ajax": "../Label/vendor_delivery",
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
            { "data": "created_date_dn" },
            { "data": "spk_no" },
            { "data": "plat_no" },
            { "data": "driver_name" },
            { "data": "receive_date" },
            { "data": "receive_user" },
            { "data": "created_date_dn" },
            { "data": "created_by" },
            { "data": "leadtime" },
            {
                "targets": -1,
                "data": "status_dn", 
                render: function(data,type,row) { 
                  if(data === 'closed') {
                    return  row.pl_no
                  }
                  else {
                    return "<button class='btn btn-primary mr-2'><i class='ik ik-plus'></i>Create</button>"
                  }
  
                },
                "defaultContent": "<button class='btn btn-primary mr-2'><i class='ik ik-plus'></i>Create</button>"
            },
            { "data": "status_dn" }
        ],
        buttons: [
            'copy', 'excel', 'pdf'
        ],
        "order": [[3, 'asc']]
    } );
    
    $('#vendor_delivery tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
            console.log(data.status_dn);
      //  alert( data.vendor_name +"'s salary is: "+ data.item_id );
        if(data.status_dn == 'open'){
            window.location.href = 'vendor_delivery_input/'+data.dn_no;
        }else{
            swal('Status is Closed !!');
        }
   //   $("#iframe5").attr("src","print_packing_list/"+data.dn_no);
     //   $("#modal_packinglist").modal("show");
    });

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