$(document).ready(function() {
    nik = $('#id_user').val();
    $.post('../../User/tree_menu',{ 'nik' : nik },
    function(data){ 
        dataa = JSON.parse(data);
      //  console.log(dataa);

        table = '';
    for(i in dataa){
        if(dataa[i].link == '-' && dataa[i].parent_menu == ""){
        table += '<div class="nav-item has-sub">';
        table += '<a><i class="ik ik-settings"></i><span>'+dataa[i].menu_name+'</span></a>';
            table += '<div class="submenu-content">';
            for(k in dataa){
                if(dataa[k].parent_menu == dataa[i].menu_name){
                table += '<a href="../../'+dataa[k].link+'" class="menu-item"><i class="ik ik-file-text"></i>'+dataa[k].menu_name+'</a>';
            }
        }
        table += '</div>';
        table += '</div>';
        }

    }
    table += '<div class="nav-item">';
    for(j in dataa){
        if(dataa[j].parent_menu == "" && dataa[j].link != '-' ){
           
           table += '<a href="../../'+dataa[j].link+'" class="menu-item"><i class="ik ik-file-text"></i>'+dataa[j].menu_name+'</a>';
          
        }
    }
      table += '</div>';

      $('#tree_menu').html(table);

   
    });

    document.getElementById("print_pl").disabled = false;
    document.getElementById("save_vd").disabled = true;
    document.getElementById("edit_qty_vd").disabled = true;
    
    var table = $('#tbl_vd_no').DataTable( {
        "ajax": "../../Label/view_vd_temp",
        "columns": [
            { "data": "spk_no" },
            { "data": "batch_no" },
            { "data": "item_code" },
            { "data": "item_name" },
            { "data": "heatno_a" },
            { "data": "qty_real" },
            { "data": "weight_real" },
            { "data": "qty_actual" },
            { "data": "weight_actual" },
            { "data": "qty_balance" },
            { "data": "weight_balance" },
            {
                "targets": -1,
                "data": null,
                "defaultContent": "<button class='btn btn-primary mr-2'><i class='ik ik-edit'></i>Edit</button>"
            }
        ],
    buttons: [
        'copy', 'excel', 'pdf'
    ],
        "order": [[1, 'asc']]   
    });
    
    $('#tbl_vd_no tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
     
    });
    
    $('#edit_qty_vd').click( function () {
        select_row = table.rows('.selected').data().length;
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
        $('#tbl_vd_no').DataTable().ajax.reload();
    });

});

    function change_password(){
        id_user = $('#id_user').val();
        password = $('#password').val();
        $.post('../../User/change_password',{ 'nik' : id_user, 'password' :password }, function(data){ 
            console.log(data);
            if(data == "1"){
                swal("password change successfully!");
              
            }else{
                swal("The password failed to change!");
               
            }
            $("#change_pass").modal("hide");
            $('#password').val("");

            

        });
    }

    //scan label
    function tes(scan){
        console.log(scan);
        spk_no = $('#spk_no').val();
            $.post('../../Label/save_vd_temp',{'batch_no' : scan, 'spk_no' : spk_no},function(data){ 
                //dataa = JSON.parse(data);
                console.log(data);
                if(data != "1"){
                    swal(data);
                }
                
                $('#scan_label').val("");
                
            });
        
        $('#tbl_vd_no').DataTable().ajax.reload();
     //   view_dn();

    }
    
    function view_dn(){

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
 function edit_qty(lpp_qty, weight, serial_id, dn_no){
     $('#qty_pcs').val(lpp_qty);
     $('#qty_kg').val(weight);
     $('#actual_pcs').val(lpp_qty);
     $('#actual_kg').val(weight);
     $('#balance_pcs').val("0");
     $('#balance_kg').val("0");
     $('#serial_id').val(serial_id);
     $('#dn_no').val(dn_no);

     console.log(serial_id);

 }
    function delete_vd_temp(){
        $.post('../../Label/delete_vd_temp',{},function(data){         
            swal('data temp deleted');
            $('#scan_label').val("");
           
            $('#tbl_vd_no').DataTable().destroy();
            view_dn();
            
        });
    }

    function create_vd(){
        $.post('../../Label/create_vd',{},function(data){ 
            console.log(data);
         view_dn();
        document.getElementById("scan_label").value = '';
 
            swal("Label save in trx_vendor_delivery!", {
                icon: "success",
              });
           
        });
    
       
    }

    function print_vd(){
        dn_no = $('#dn_noo').val();
        console.log(dn_no);
       // $("#iframe1").attr("src","print_dn");
        //$("#iframe1").get(0).contentWindow.print();
        document.getElementById("save_vd").disabled = false;
            $.post('../../Label/cek_jml_vd',{'dn_no' : dn_no },function(data){ 
                dataa = JSON.parse(data);
                console.log(dataa);
                if(dataa == "1"){
                    $("#modal_printdn").modal("show");
                }else{
                    swal("data not match");
                }
            
            });
        }