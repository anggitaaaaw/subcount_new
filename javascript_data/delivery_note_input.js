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
   
    document.getElementById("create_dn").disabled = true;
    document.getElementById("print_dn").disabled = true;
    document.getElementById("print_packing").disabled = true;

    $('#print_sj').click(function() {
        $("#iframe1").get(0).contentWindow.print();
       
        
    });

    $('#print_pl').click(function() {
        $("#iframe2").get(0).contentWindow.print();
        
    });
});

function scan_label(scan){
    console.log(scan);
    plat_no = $('#select_plat_no').val();
    driver_name = $('#select_driver_name').val();
    if(plat_no == '' || driver_name == ''){
        swal("Please Choose plat no and driver name!", {
            icon: "failed",
          });
    }else{
        $.post('../Label/save_dn_temp',{'serial_id' : scan, 'plat_no' : plat_no, 'driver_name' : driver_name},function(data){ 
            //dataa = JSON.parse(data);
            console.log(data);
            document.getElementById("print_dn").disabled = false;
            document.getElementById("print_packing").disabled = false;
            document.getElementById("scan_label").value = '';
        });
    }
    
    view_dn();
    $('#tbl_create_dn').DataTable().destroy();
}

function view_dn(){
    var table = $('#tbl_create_dn').DataTable( {
        "ajax": "../Label/view_del_note",
        "columns": [
            { "data": "vendor_name" },
            { "data": "serial_id" },
            { "data": "spk_no" },
            { "data": "lpp_no" },
            { "data": "item_code" },
            { "data": "item_name" },
            { "data": "heatno_a" },
            { "data": "lpp_qty" }
        ]   
    });

}
function create_dn(){
    $.post('../Label/create_dn',{},function(data){ 
        //console.log(data);
     view_dn();
    document.getElementById("scan_label").value = '';
    $('#select_plat_no').select2({
      placeholder: {
        id: '-1', // the value of the option
        text: '-SELECT PLAT NO-'
      }
    });
    $('#select_driver_name').select2({
      placeholder: {
        id: '-1', // the value of the option
        text: '-SELECT DRIVER NAME-'
      }
    });
        swal("Label save in trx_Deliverynote!", {
            icon: "success",
          });
       
    });

   
}

function print_dn(){
    $("#iframe1").attr("src","print_dn");
    //$("#iframe1").get(0).contentWindow.print();
    document.getElementById("create_dn").disabled = false;
        $.post('../Label/cek_jml',{},function(data){ 
            dataa = JSON.parse(data);
            //console.log(dataa);
            if(dataa == "1"){
                $("#modal_printdn").modal("show");
            }else{
                swal("data not match");
            }
        
        });
    }

function print_pl(){
    $("#iframe2").attr("src","print_packinglist");
    //$("#iframe2").get(0).contentWindow.print();
    document.getElementById("create_dn").disabled = false;
    $.post('../Label/cek_jml',{},function(data){ 
        dataa = JSON.parse(data);
        //console.log(data);
        if(dataa == "1"){
            $("#modal_printpackinglist").modal("show");
        }else{
            swal("data not match");
        }
    
    });

}


