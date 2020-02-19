$(document).ready(function() {
    $('#scan_label_iw').focus();
    
});

function tesss(scan){
    console.log(scan);
    $.post('../Label/view_incoming_wip',{'dn_no' : scan},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);
        $('#vendor_name').html('<b>'+dataa[0].vendor_name+'</b>');
        $('#dn_no').html('<b>'+dataa[0].dn_no+'</b>');
        $('#created_date').html('<b>'+dataa[0].created_date+'</b>');
        $('#pl_no').html('<b>'+dataa[0].pl_no+'</b>');
        $('#spk_no').html('<b>'+dataa[0].spk_no+'</b>');
        $('#item_code').html('<b>'+dataa[0].item_code+'</b>');
    
       

        table = '';
        no = 1;
        for(i in dataa){
           table += '<tr>'+
                '<td width="10">'+dataa[i].id_inc+'</td>'+
                '<td>'+dataa[i].batch_no+'</td>'+
                '<td>'+dataa[i].heatno_a+'</td>'+
                '<td>'+dataa[i].heatno_a+'</td>'+
                '<td style="width: 60px;"><input readonly style="width: 100%;" type="text" id="qty_real'+dataa[i].id_inc+'" value="'+dataa[i].sendqty_pcs+'"></td>,'+
                '<td style="width: 60px;"><input readonly style="width: 100%;" type="text" id="weight_real'+dataa[i].id_inc+'" value="'+dataa[i].sendqty_kg+'"></td>'+
                '<td style="width: 60px;"><input style="width: 100%;" type="text" data-id="'+dataa[i].id_inc+'" onchange="hitung_qty(this)" id="qty_actual'+dataa[i].id_inc+'" value="'+dataa[i].receipt_pcs+'"></td>'+
                '<td style="width: 60px;"><input style="width: 100%;" type="text" data-id="'+dataa[i].id_inc+'" onchange="hitung_kg(this)" id="weight_actual'+dataa[i].id_inc+'" value="'+dataa[i].receipt_kg+'"></td>'+
                '<td style="width: 200px;"><input style="width: 20%;" type="radio" data-id="'+dataa[i].id_inc+'" onchange="radio_okk(this)" id="radio_ok'+dataa[i].id_inc+'" value="OK">OK <input style="width: 20%;" type="radio" data-id="'+dataa[i].id_inc+'" onchange="radio_ngg(this)" id="radio_ng'+dataa[i].id_inc+'" value="NG">NG</td>'+
                '<td style="width: 60px;"><input style="width: 100%;" type="text" value="'+dataa[i].lpp_qty+'"></td>';
                table += '<td style="width: 200px;"><select id="remarks'+dataa[i].id_inc+'" data-id="'+dataa[i].id_inc+'" onchange="select_remarks(this)" style="width: 100%;" >';
                $.post('../Label/view_remarks_iw',{'id_inc' : dataa[i].id_inc },function(data){ 
                    dataa = JSON.parse(data);
                    console.log(dataa);
                        tablee = '';
                           tablee += '<option>-Select Remarks-</option>';

                            for(j in dataa.data){
                                tablee += '<option value="'+dataa.data[j].remarks_name+'">'+dataa.data[j].remarks_name+'</option>';
                            }
                        $('#remarks'+dataa.id_inc).html(tablee);
                   
                });
                table += '</select></td>';
                table += '<td style="width: 60px;"><input readonly style="width: 100%;" type="text" id="qty_balance'+dataa[i].id_inc+'" value="'+dataa[i].bal_pcs+'"></td>'+
                '<td style="width: 60px;"><input readonly style="width: 100%;" type="text" id="weight_balance'+dataa[i].id_inc+'" value="'+dataa[i].bal_kg+'"></td>'+
                '</tr>';
                no++;
        }
        $('#body_tbl_iw').html(table);

    });
}

function radio_okk(a){
    var dataId = $(a).data("id");
    id_inc = dataId;
    remarks = $('#radio_ok'+dataId).val();
    console.log(remarks);
    document.getElementById("radio_ng"+dataId).checked = false;
    $.post('../Label/edit_radio',{'id_inc' : dataId, 'qc_judge': remarks},function(data){ 
        if(data == '1'){
            swal('QC judge OK !');
           
        }else{
            swal('QC judge OK');
           
        }
    });
}

function radio_ngg(a){
    var dataId = $(a).data("id");
    id_inc = dataId;
    remarks = $('#radio_ng'+dataId).val();
    console.log(remarks);
    document.getElementById("radio_ok"+dataId).checked = false;
    $.post('../Label/edit_radio',{'id_inc' : dataId, 'qc_judge': remarks},function(data){ 
        if(data == '1'){
            swal('QC judge NG !');
           
        }else{
            swal('QC judge NG');
           
        }
    });
}

function select_remarks(a){
    var dataId = $(a).data("id");
    id_inc = dataId;
    remarks = $('#remarks'+dataId).val();
    console.log(remarks);
    $.post('../Label/edit_select_remarks',{'id_inc' : dataId, 'remarks': remarks},function(data){ 
        if(data == '1'){
            swal('remarks succesfully edited !');
           
        }else{
            swal('remarks fail edited');
           
        }
    });
}
function hitung_qty(q){
    var dataId = $(q).data("id");
   // alert(dataId);
    qty_real = $('#qty_real'+dataId).val();
    qty_actual = $('#qty_actual'+dataId).val();
   
    qty_balance = qty_real - qty_actual;
    
    if(qty_balance < 0){
        swal('balance cannot be negative');
    }else{
        $.post('../Label/edit_qty_pcs',{'id_inc' : dataId, 'receipt_pcs' : qty_actual, 'bal_pcs': qty_balance},function(data){ 
            if(data == '1'){
                swal('qty succesfully edited !');
                $('#qty_balance'+dataId).val(qty_balance);
            }else{
                swal('qty fail edited');
                $('#qty_actual'+dataId).val('');
            }
        });
    }
    

}

function hitung_kg(q){
    var dataId = $(q).data("id");
   // alert(dataId);
    weight_real = $('#weight_real'+dataId).val();
    weight_actual = $('#weight_actual'+dataId).val();
   
    weight_balance = weight_real - weight_actual;
   
    if(weight_balance < 0){
        swal('balance cannot be negative');
    }else{
        $.post('../Label/edit_qty_kg',{'id_inc' : dataId, 'receipt_kg' : weight_actual, 'bal_kg': weight_balance},function(data){ 
            if(data == '1'){
                swal('qty succesfully edited !');
                $('#weight_balance'+dataId).val(weight_balance);
            }else{
                swal('qty fail edited');
                $('#qty_actual'+dataId).val('');
            }
        });
    }
    
}

function receive_incoming(){
    $.post('../Label/receive_incoming',{},function(data){ 
        if(data == '1'){
            swal('Succesfully Receive !');
            location.reload();
           
        }else{
            swal('Failed Receive');
           
        }
    });
}