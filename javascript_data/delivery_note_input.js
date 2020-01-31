$(document).ready(function() {
    $('#select_plat_no').select2();
    $('#select_driver_name').select2();
    $.post('../Label/select_plat_no',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '';
        for(i in dataa){
            table += '<option value="'+dataa[i].plat_no+'">'+dataa[i].plat_no+'</option>';
        }
        $('#select_plat_no').append(table);
    });

    $.post('../Label/select_driver_name',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '';
        for(i in dataa){
            table += '<option value="'+dataa[i].driver_name+'">'+dataa[i].driver_name+'</option>';
        }
        $('#select_driver_name').append(table);
    });
   

});

function scan_label(scan){
    console.log(scan);
    
    $.post('../Label/save_dn_temp',{'serial_id' : scan},function(data){ 
        dataa = JSON.parse(data);
      
    });

    var table = $('#example').DataTable( {
        "ajax": "../Label/view_del_note/"+scan,
        "columns": [
            { "data": "vendor_name" },
            { "data": "spk_no" },
            { "data": "lpp_no" },
            { "data": "item_id" },
            { "data": "item_name" },
            { "data": "heatno_a" },
            { "data": "qty_batch" }
        ]   
    });

    $('#example').DataTable().destroy();
}

