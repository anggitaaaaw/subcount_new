

$(document).ready(function() {
    $.post('../Label/select_spk',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '';
        for(i in dataa){
            table += '<option value="'+dataa[i].id_spk+'-'+dataa[i].spk_number+'">'+dataa[i].spk_number+'</option>';
        }
        $('#spk_no').html(table);
    });

   
});

function select_spk(spk){
    id_spk = spk.split("-");
    $.post('../Label/item_deskripsi',{'id_spk' : id_spk[0]},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
        $('#item_code').val(dataa[0].item_code);
        $('#deskripsi').val(dataa[0].item_name);
        
       
    });

    $.post('../Label/get_heat_no',{'id_spk' : id_spk[0]},function(data){ 
        dataa = JSON.parse(data);
      //  console.log(dataa);
        $('#heatno_a').val(dataa[0].heat_no_a);
        $('#heatno_b').val(dataa[0].heat_no_b);
        
       
    });

    $.post('../Label/select_lpp_no',{'id_spk' : id_spk[0]},function(data){ 
        dataa = JSON.parse(data);
        //console.log(dataa);
            table = '';
        for(i in dataa){
            table += '<option value="'+dataa[i].qty_lot+'-'+dataa[i].lot_number+'">'+dataa[i].lot_number+'</option>';
        }
        $('#lpp_no').html(table);
    });
}

function select_lpp_no(str){
    lpp = str.split("-");
    $('#lpp_qty').val(lpp[0]);
    /*$.post('../Label/lpp_qty',{'lot_number' : str},function(data){ 
        dataa = JSON.parse(data);
      //  console.log(dataa);
        $('#lpp_qty').val(dataa.qty_lot);
        
       
    });*/
}

function save_data(){
    spk = $('#spk_no').val();
    spk = spk.split('-');
    id_spk = spk[0];
    no_spk = spk[1];
    item_code = $('#item_code').val();
    deskripsi = $('#deskripsi').val();
    heatno_a = $('#heatno_a').val();
    heatno_b = $('#heatno_b').val();
    lpp = $('#lpp_no').val();
    lpp = lpp.split('-');
    lpp_qty = lpp[0];
    lpp_number = lpp[1];

    $.post('../Label/save_data',{'id_spk' : id_spk, 'no_spk' : no_spk, 'item_code' : item_code, 'deskripsi' : deskripsi, 'heatno_a' : heatno_a, 'heatno_b' : heatno_b, 'lpp_qty' : lpp_qty, 'lpp_number' : lpp_number},function(data){ 
        dataa = JSON.parse(data);
        //console.log(dataa);
            table = '';
        for(i in dataa){
            table += '<option value="'+dataa[i].qty_lot+'-'+dataa[i].lot_number+'">'+dataa[i].lot_number+'</option>';
        }
        $('#lpp_no').html(table);
    });
}