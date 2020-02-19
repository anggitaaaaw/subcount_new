$(document).ready(function() {
    
    $('#subcount_name_report').select2();
    $('#spk_no_report').select2();
    $('#item_code_report').select2();

    subcount_all();
    spk_all();
    item_all();
});

function subcount_all(){
    document.getElementById("check_subcount").checked = true;
    $.post('../Label/subcount_name_report',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '<option value ="">-SELECT SUBCOUNT NAME-</option>';
        for(i in dataa){
            table += '<option value="'+dataa[i].vendor_code+'">'+dataa[i].vendor_name+'</option>';
        }
        $('#subcount_name_report').html(table);
    });
}

function spk_all(){
    document.getElementById("check_spk").checked = true;
    $.post('../Label/spk_no_report',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
       table = '<option value ="">-SELECT SPK NO-</option>';
       for(i in dataa){
           table += '<option value="'+dataa[i].spk_no+'">'+dataa[i].spk_no+'</option>';
       }
       $('#spk_no_report').html(table);
    });
}

function item_all(){
    document.getElementById("check_item").checked = true;
    $.post('../Label/subcount_name_report',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
       dataa = JSON.parse(data);
       // console.log(dataa);
            table = '<option value ="">-SELECT ITEM NO-</option>';
        for(i in dataa){
            table += '<option value="'+dataa[i].item_no+'">'+dataa[i].item_no+'</option>';
        }
        $('#item_code_report').html(table);
    });
}

function select_subcount(code){
    document.getElementById("check_subcount").checked = false;
    $.post('../Label/spk_no_report',{'vendor_code' : code},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '<option value ="">-SELECT SPK NO-</option>';
        for(i in dataa){
            table += '<option value="'+dataa[i].spk_no+'">'+dataa[i].spk_no+'</option>';
        }
        $('#spk_no_report').html(table);
    });
}

function select_spk_no(code){
    document.getElementById("check_spk").checked = false;
    vendor_code = $('#subcount_name_report').val();
    console.log(vendor_code);
    $.post('../Label/item_code_report',{'spk_no' : code, 'vendor_code' : vendor_code},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '<option value ="">-SELECT ITEM NO-</option>';
        for(i in dataa){
            table += '<option value="'+dataa[i].item_no+'">'+dataa[i].item_no+'</option>';
        }
        $('#item_code_report').html(table);
    });
}

function select_item_code(code){
    document.getElementById("check_item").checked = false;
    vendor_code = $('#subcount_name_report').val();
    spk_no = $('#spk_no_report').val();
    $.post('../Label/item_name_report',{'spk_no' : spk_no, 'vendor_code' : vendor_code, 'item_code' : code},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa.item_name);
        $('#item_name_report').val(dataa.item_name);
    });
}

function date_to(){
    document.getElementById("check_date").checked = false;
}

function date_from(){
    document.getElementById("check_date").checked = false;
}

function check_date(){
    console.log('tes');
}
function check_subcount(){
    subcount_all();
}
function check_spk(){
    spk_all();
}
function check_item(){
    item_all();
}

function format ( d ) {
    subcount_name =  $('#subcount_name_report').val();
    spk_no =  $('#spk_no_report').val();
    item_code =  $('#item_code_report').val();
    item_name =  $('#item_name_report').val();
    date_to = $('#datepicker').val();   
    date_from = $('#datepicker2').val();
    console.log(subcount_name);
    console.log(spk_no);
    console.log(item_code);
    console.log(item_name);
    console.log(date_to);
    console.log(date_from);
    if(subcount_name == ''){
        subcount_name = 'null';
    }
    if(spk_no == ''){
        spk_no = 'null';
    }
    if(item_code == ''){
        item_code = 'null';
    }
    if(item_name == ''){
        item_name = 'null';
    }
    if(date_to == ''){
        date_to = 'null';
    }
    if(date_from == ''){
        date_from = 'null';
    }
    table = ''+
      'Detail of : '+d.vendor_name+
            '<table class="table table-striped table-bordered nowrap" id="det_batch'+d.dn_no+'">'+
                '<thead>'+
                    '<tr>'+
                        '<th style="width: 50px;">SPK No</th>'+
                        '<th>DN No</th>'+
                        '<th>Batch No</th>'+
                        '<th>Item Code</th>'+
                        '<th>Description</th>'+
                        '<th>Heat No</th>'+
                        '<th>Send Qty <br> (Pcs)</th>'+
                        '<th>Send Qty <br>(Kg)</th>'+
                        '<th>Receipt <br>(Pcs)</th>'+
                        '<th>Receipt <br>(Kg)</th>'+
                        '<th>Balance <br>(Pcs)</th>'+
                        '<th>Balance <br>(Kg)</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>'+
                '</tbody>'+
                '</table>';

                $.post('../Label/view_report_det',{'date_to' : date_to, 'date_from' : date_from, 'subcount' : subcount_name, 'spk_no' : spk_no, 'item_code' : item_code},function(data){ 
                    dataa = JSON.parse(data);
                    console.log(dataa);
                    for(i in dataa){
                       table += '<tr>'+
                                    '<th>'+dataa[i].spk_no+'</th>'+
                                    '<th>'+dataa[i].dn_no+'</th>'+
                                    '<th>'+dataa[i].batch_no+'</th>'+
                                    '<th>'+dataa[i].item_code+'</th>'+
                                    '<th>'+dataa[i].item_name+'</th>'+
                                    '<th>'+dataa[i].heatno_a+'</th>'+
                                    '<th>'+dataa[i].sendqty_pcs+'</th>'+
                                    '<th>'+dataa[i].sendqty_kg+'</th>'+
                                    '<th>'+dataa[i].receipt_pcs+'</th>'+
                                    '<th>'+dataa[i].receipt_kg+'</th>'+
                                    '<th>'+dataa[i].bal_pcs+'</th>'+
                                    '<th>'+dataa[i].bal_kg+'</th>'+
                                '</tr>';
                       
                    }
    
                    $('#det_batch'+d.dn_no).html(table);
        
                });
                
                  
               

            return table;
}

function filter(){
    subcount_name =  $('#subcount_name_report').val();
    spk_no =  $('#spk_no_report').val();
    item_code =  $('#item_code_report').val();
    item_name =  $('#item_name_report').val();
    date_to = $('#datepicker').val();   
    date_from = $('#datepicker2').val();
    console.log(subcount_name);
    console.log(spk_no);
    console.log(item_code);
    
    console.log(date_to);
    console.log(date_from);
    if(subcount_name == ''){
        subcount_name = 'null';
    }
    if(spk_no == ''){
        spk_no = 'null';
    }
    if(item_code == ''){
        item_code = 'null';
    }
    if(item_name == ''){
        item_name = 'null';
    }else{
        item_name = item_name.replace(" ","%20");
    }
    if(date_to == ''){
        date_to = 'null';
    }
    if(date_from == ''){
        date_from = 'null';
    }
    console.log(item_name);
    var table = $('#tbl_report').DataTable( {
        "ajax": "../Label/view_report/"+date_to+"/"+date_from+"/"+subcount_name+"/"+spk_no+"/"+item_code,
        "searching": true,
        "paging":   true,
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<i class="ik ik-plus-circle"></i>'
            },
           
          
            { "data": "vendor_name" },
            { "data": "jml_sendqty_pcs" },
            { "data": "jml_sendqty_kg" },
            { "data": "jml_receipt_pcs" },
            { "data": "jml_receipt_kg" },
            { "data": "jml_bal_pcs" },
            { "data": "jml_bal_kg" },
      
        ],
        "order": [[1, 'asc']]
    } );
    

    // Add event listener for opening and closing details
    $('#tbl_report tbody').on('click', 'td.details-control', function () {
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
            tr.removeClass('shown');
        }
    });
}