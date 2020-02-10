$(document).ready(function() {
    $('#select_dn_no').select2();

    $.post('../Label/select_dn_no',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '<option>-SELECT DN NO-</option>';
        for(i in dataa){
            table += '<option value="'+dataa[i].dn_no+'">'+dataa[i].dn_no+'</option>';
        }
        $('#select_dn_no').html(table);
    });
});

function tes(dn_no){
    console.log(dn_no);
     $.post('../Label/plat_driver',{'dn_no' : dn_no},function(data){ 
         dataa = JSON.parse(data);
         console.log(dataa);
             //table = '';
     
         $('#plat_no').val(dataa[0].plat_no);
         $('#driver_name').val(dataa[0].driver_name);
 
        
     });
     $('#tbl_dn_no').DataTable().destroy();
    view_tbl_dn_no(dn_no);
    document.getElementById("edit_qty").disabled = false;
   // $('#tbl_dn_no').DataTable().destroy();

 }

 function view_tbl_dn_no(dn_no){
    var table = $('#tbl_dn_no').DataTable( {
        "ajax": "../Label/view_dn_tbl/"+dn_no,
        "searching": false,
        "paging":   false,
        "columns": [
            { "data": "spk_no" },
            { "data": "serial_id" },
            { "data": "item_code" },
            { "data": "item_name" },
            { "data": "heatno_a" },
            { "data": "lpp_qty"},
            {"data" : "weight_real"},
            {"data" : "qty_actual"},
            {"data" : "weight_actual"},
            {"data" : "qty_balance"},
            {"data" : "weight_balance"}


        ],
        
        "order": [[1, 'asc']]
    } );

    $('#tbl_dn_no tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
     
    } );
 
    
    $('#edit_qty').click( function () {
        select_row = table.rows('.selected').data ().length;
        if(select_row == 1 ){
            lpp_qty = table.rows('.selected').data()[0].lpp_qty;
            weight = table.rows('.selected').data()[0].weight_real;
            serial_id = table.rows('.selected').data()[0].batch_no;
            dn_no = table.rows('.selected').data()[0].dn_no;
            document.getElementById("myForm").reset();
            $("#editQty").modal("show");
            edit_qty(lpp_qty, weight, serial_id, dn_no);
        }else{
            swal("Your can edit only 1 row!");
        }
        $('#tbl_dn_no').DataTable().ajax.reload();
    });
 }

 function edit_qty(lpp_qty, weight, serial_id, dn_no){
     $('#qty_pcs').val(lpp_qty);
     $('#qty_kg').val(weight);
     $('#serial_id').val(serial_id);
     $('#dn_no').val(dn_no);

     console.log(serial_id);

 }

 function hitung_pcs(){
    qty_pcs =  $('#qty_pcs').val();
    actual_pcs =  $('#actual_pcs').val();

    balance = qty_pcs - actual_pcs;
    $('#balance_pcs').val(balance);
}

function hitung_kg(){
    qty_pcs =  $('#qty_kg').val();
    actual_pcs =  $('#actual_kg').val();

    balance = qty_pcs - actual_pcs;
    $('#balance_kg').val(balance);
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

    $.post('../Label/proses_edit_qty',{'batch_no' : serial_id, 'qty_real' : qty_pcs, 'weight_real' : qty_kg, 'qty_actual' : actual_pcs, 'weight_actual' : actual_kg, 'qty_balance' : balance_pcs, 'weight_balance' : balance_kg},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);
        $('#tbl_dn_no').DataTable().ajax.reload();

        if(data == 1){
            swal("Qty Success Edited!", {
                icon: "success",
              });
              
          }else{
            swal("Qty edit failed!", {
                icon: "failed",
              });
              
          }
          $('#tbl_dn_no').DataTable().ajax.reload();
         //view_tbl_dn_no(dn_no);
          $("#editQty").modal("hide");

    });
    
}

function move_trx_ven(){
    $.post('../Label/move_trx_ven',{},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);
        $('#tbl_dn_no').DataTable().ajax.reload();

        if(data == 1){
            swal("Success!", {
                icon: "success",
              });
              $('#tbl_dn_no').DataTable().ajax.reload();
              document.getElementById("plat_no").value = '';
              document.getElementById("driver_name").value = '';
    
              $.post('../Label/select_dn_no',{},function(data){ 
                dataa = JSON.parse(data);
               // console.log(dataa);
                    table = '<option>-SELECT DN NO-</option>';
                for(i in dataa){
                    table += '<option value="'+dataa[i].dn_no+'">'+dataa[i].dn_no+'</option>';
                }
                $('#select_dn_no').html(table);
            });
          }else{
            swal("there is a qty that hasn't been edited yet", {
                icon: "failed",
              });
              
          }
        
     

    });
}
