$(document).ready(function() {
    $('#item_no').select2({
        dropdownParent: $('#demoModal')
    });
    $('#subcount_vendor').select2({
        dropdownParent: $('#demoModal')
    });
    $('#edit_subcount_vendor').select2({
        dropdownParent: $('#editModal')
    });
    $('#process_code').select2({
        dropdownParent: $('#demoModal')
    });

      view_setting_vendor();

    $.post('../Vendor/select_item_no',{},
        function(data){ 
        //console.log(data);
        dataa = JSON.parse(data);
        table = '';
        table += '<option >-SELECT ITEM NO-</option>';
            for(i in dataa){
            table += '<option value="'+dataa[i].item_code+'">'+dataa[i].item_code+'</option>';
        }
        $('#item_no').html(table);
        
    });
    
    $.post('../Vendor/select_vendor',{},
        function(data){ 
        //console.log(data);
        dataa = JSON.parse(data);
        table = '';
        table += '<option >-SELECT VENDOR-</option>';
            for(i in dataa){
            table += '<option value="'+dataa[i].vendor_code+'">'+dataa[i].vendor_name+'</option>';
        }
        $('#subcount_vendor').html(table);
        
    });

    $.post('../Vendor/select_process',{},
        function(data){ 
        //console.log(data);
        dataa = JSON.parse(data);
        table = '';
        table += '<option >-SELECT PROCESS-</option>';
            for(i in dataa){
            table += '<option value="'+dataa[i].process_code+'">'+dataa[i].process_name+'</option>';
        }
        $('#process_code').html(table);
    
    });
});

function select_item_no(item_code){
    $.post('../Vendor/get_item_name',{'item_code' : item_code},
        function(data){ 
        //console.log(data);
        dataa = JSON.parse(data);
        
        $('#item_name').val(dataa.item_name);
    });
}

function select_subcount_vendor(vendor_code){
    $.post('../Vendor/get_subcount_vendor',{'vendor_code' : vendor_code},
        function(data){ 
        //console.log(data);
        dataa = JSON.parse(data);
        
        $('#batch_qty').val(dataa.batch_qty);
        $('#container_qty').val(dataa.container_qty);
    });
         
}

function new_set_vendor(){
    item_no = $('#item_no').val();
    item_name = $('#item_name').val();
    vendor_code = $('#subcount_vendor').val();
    process_code = $('#process_code').val();
    batch_qty = $('#batch_qty').val();
    container_qty = $('#container_qty').val();
  
    if(item_no == '' || item_name == '' || subcount_vendor == '' || process_code == '' || batch_qty == '' || container_qty == '' ){
        alert('mohon lengkapi data anda');
    }else{
        $.post('../Vendor/new_set_vendor',{ 'item_no' : item_no ,'item_name' : item_name, 'vendor_code' : vendor_code, 'process_code' : process_code , 'batch_qty' : batch_qty, 'container_qty' : container_qty},
        function(data){ 
        console.log(data);

        if(data == '1'){
            swal("Setting Vendor added successfully!");
            $('#example').DataTable().ajax.reload();
            
        }else{
           swal("Setting Vendor  not succesfully added !");
            $('#example').DataTable().ajax.reload();
        }

        $("#demoModal").modal("hide");
        document.getElementById("myForm").reset();
        });
    }
   
  
  }

function view_setting_vendor(){
    var table = $('#example').DataTable( {
        "ajax": "../Vendor/view_set_vendor",
        "columns": [
            { "data": "item_no" },
            { "data": "item_name" },
            { "data": "vendor_code" },
            { "data": "process_name" },
            { "data": "qty_batch" },
            { "data": "qty_container" }
        ]   
    });

    $('#example tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
     
        
    } );
 
    $('#delete_set_vendor').click( function () {
    
        swal({
            title: "Are you sure Delete this user?",
            text: "Once deleted, you will not be able to recover this user!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                var no_select = table.rows('.selected').data().length;
                for(i=0; i < no_select; i++){
                    delete_set_vendor(table.rows('.selected').data()[i].item_no);
                }
             
              swal('Vendor Success Deleted ' + no_select + ' rows', {
                icon: "success",
              });
              $('#example').DataTable().ajax.reload();
            } else {
              swal("Vendor file is safe!");
            }
           
          });

          

    });
    
    $('#edit_set_vendor').click( function () {
        select_row = table.rows('.selected').data ().length;
        if(select_row == 1 ){
            nik = table.rows('.selected').data()[0].item_no;
            $("#editModal").modal("show");
            edit_set_vendor(nik);
        }else{
            swal("Your can edit only 1 row!");
        }
        $('#example').DataTable().ajax.reload();
    });
}



function edit_set_vendor(nik){
    
    $('#edit_subcount_vendor').empty();
    $.post('../Vendor/edit_set_vendor',{'item_no' : nik},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);
        $('#edit_item_no').val(dataa.item_no);
        $('#edit_item_name').val(dataa.item_name);
        $('#edit_vendor_code').val(dataa.vendor_code);
        $('#edit_subcount_vendor').select2({
            data:[{id:0,text:dataa.vendor_name}]
        });
        $('#edit_process_code').select2({
            data:[{id:0,text:dataa.process_name}]
        });
        $('#edit_process').val(dataa.process_code);
        $('#edit_batch_qty').val(dataa.qty_batch);
        $('#edit_container_qty').val(dataa.qty_container);

       
    });


    
        $.post('../Vendor/select_vendor',{},
            function(data){ 
            //console.log(data);
            dataa = JSON.parse(data);
            table = '';
                for(i in dataa){
                table += '<option value="'+dataa[i].vendor_code+'">'+dataa[i].vendor_name+'</option>';
            }
            $('#edit_subcount_vendor').append(table);
            
        });

        $.post('../Vendor/select_process',{},
        function(data){ 
        //console.log(data);
        dataa = JSON.parse(data);
        table = '';
            for(i in dataa){
            table += '<option value="'+dataa[i].process_code+'">'+dataa[i].process_name+'</option>';
        }
        $('#edit_process_code').html(table);
    
    });
}

function delete_set_vendor(nik){
    $.post('../Vendor/delete_set_vendor',{'item_no' : nik},function(data){ 
       
    });
}

function proses_edit_set_vendor(){
    item_no = $('#edit_item_no').val();
    item_name = $('#edit_item_name').val();
    vendor = $('#edit_subcount_vendor').val();
    if(vendor != 0){
        vendor_code = $('#edit_subcount_vendor').val();
    }else if(vendor == 0){
        vendor_code = $('#edit_vendor_code').val();
        
    }
    process = $('#edit_process_code').val();
    if(process != 0){
        process_code = $('#edit_process_code').val();
    }else if(vendor == 0){
        process_code = $('#edit_process').val();
        
    }
    batch_qty = $('#edit_batch_qty').val();
    container_qty = $('#edit_container_qty').val();
  
    
    $.post('../Vendor/proses_edit_set_vendor',{ 'item_no' : item_no ,'item_name' : item_name, 'vendor_code' : vendor_code, 'process_code' : process_code , 'batch_qty' : batch_qty, 'container_qty' : container_qty},
    function(data){ 
      console.log(data);

      if(data == '1'){
        swal("User Success Edited!", {
            icon: "success",
          });
          $('#example').DataTable().ajax.reload();
      }else{
        swal("User edit failed!", {
            icon: "failed",
          });
          $('#example').DataTable().ajax.reload();
      }
      $("#editModal").modal("hide");
      });
  
  }


function edit_select_subcount_vendor(vendor_code){
    $.post('../Vendor/get_subcount_vendor',{'vendor_code' : vendor_code},
        function(data){ 
        //console.log(data);
        dataa = JSON.parse(data);
        
        $('#edit_batch_qty').val(dataa.batch_qty);
        $('#edit_container_qty').val(dataa.container_qty);
    });
    
}
