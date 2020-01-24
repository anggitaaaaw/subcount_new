$(document).ready(function() {
    $.post('../Label/select_spk',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '';
        for(i in dataa){
            table += '<option value="'+dataa[i].id_spk+'.'+dataa[i].spk_number+'">'+dataa[i].spk_number+'</option>';
        }
        $('#spk_no').append(table);
    });

    view_label();

});

function select_spk(spk){
    id_spk = spk.split(".");
    $.post('../Label/item_deskripsi',{'id_spk' : id_spk[0]},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
        $('#item_code').val(dataa[0].item_code);
        $('#deskripsi').val(dataa[0].item_name);
        
        $.post('../Label/batch_qty',{'item_no' : dataa[0].item_code},function(data){ 
            dataa = JSON.parse(data);
           // console.log(dataa);
            $('#qty_batch').val(dataa.qty_batch);
            $('#qty_container').val(dataa.qty_container);
            $('#vendor_code').val(dataa.vendor_code);
            $('#vendor_name').val(dataa.vendor_name);
            
           
        });
       
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
            table += '<option value="'+dataa[i].qty_lot+'.'+dataa[i].lot_number+'">'+dataa[i].lot_number+'</option>';
        }
        $('#lpp_no').append(table);
    });
}

function select_lpp_no(str){
    lpp = str.split(".");
    $('#lpp_qty').val(lpp[0]);
   
}


function select_lpp_no_edit(str){
    lpp = str.split(".");
    $('#edit_lpp_qty').val(lpp[0]);
   
}
//
function save_data(){
    spk = $('#spk_no').val();
    vendor_code = $('#vendor_code').val();
    spkk = spk.split('.');
    id_spk = spkk[0];
    no_spk = spkk[1];
    item_code = $('#item_code').val();
    deskripsi = $('#deskripsi').val();
    heatno_a = $('#heatno_a').val();
    heatno_b = $('#heatno_b').val();
    lpp = $('#lpp_no').val();
    weight = $('#weight').val();
    lppp = lpp.split('.');
    lpp_qty = lppp[0];
    lpp_number = lppp[1];

    $.post('../Label/save_data',{'vendor_code': vendor_code ,'id_spk' : id_spk, 'no_spk' : no_spk, 'item_code' : item_code, 'deskripsi' : deskripsi, 'heatno_a' : heatno_a, 'heatno_b' : heatno_b, 'lpp_qty' : lpp_qty, 'lpp_number' : lpp_number, 'weight' : weight},function(data){ 
        dataa = JSON.parse(data);
        if(data == "1"){
            swal("Label added successfully!");
            $('#simpletable').DataTable().ajax.reload();
        }else if(data == '0'){
            swal("Label not successfully added!");
            $('#simpletable').DataTable().ajax.reload();
        }else{
            swal("Label already exists");
            $('#simpletable').DataTable().ajax.reload();
        }
        
       
    });


      $('#lpp_no').select2({
        placeholder: {
          id: '-1', // the value of the option
          text: '-SELECT LPP NO-'
        }
      });
    
}

function view_label(serial_id){
   // serial_id =  $('#serial_id').val();
    //console.log(serial_id);
    var table = $('#simpletable').DataTable( {
       "processing": true,
            "destroy": true,
            "ajax": '../Label/view_label/',
        "columns": [
            { "data": "serial_number" },
            { "data": "spk_no" },
            { "data": "lpp_no" },
            { "data": "item_id" },
            { "data": "item_name" },
            { "data": "heatno_a" },
            { "data": "lpp_qty" },
            { "data": "weight" }
        ]   
    });

    $('#simpletable tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
     
        
    } );
 
    $('#delete_label').click( function () {
    
        swal({
            title: "Are you sure Delete this Label?",
            text: "Once deleted, you will not be able to recover this Label !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                var no_select = table.rows('.selected').data().length;
                for(i=0; i < no_select; i++){
                    delete_label(table.rows('.selected').data()[i].serial_number);
                }
             
              swal('User Success Deleted ' + no_select + ' rows', {
                icon: "success",
              });
              $('#simpletable').DataTable().ajax.reload();
            } else {
              swal("Label file is safe!");
            }
           
          });

       

    });
    
    $('#edit_label').click( function () {
        select_row = table.rows('.selected').data ().length;
        if(select_row == 1 ){
            id = table.rows('.selected').data()[0].serial_number;
            $("#editModal").modal("show");
            edit_label(id);
        }else{
            swal("Your can edit only 1 row!");
        }
        $('#simpletable').DataTable().ajax.reload();
    });

    $('#view_label_barcode').click( function () {
        select_row = table.rows('.selected').data ().length;
        if(select_row == 1 ){
            id = table.rows('.selected').data()[0].serial_number;
            view_label_bar(id);
        }else{
            swal("Your can wiew label only 1 row!");
        }
        $('#simpletable').DataTable().ajax.reload();
    });
}

function view_label_bar(id){
    $.post('../Label/view_label_barcode',{'id' : id},function(data){ 
       
    });
}
function delete_label(id){
    $.post('../Label/delete_label',{'id' : id},function(data){ 
       
    });
}

function edit_label(id){
  
    //  console.log(nik);
      $.post('../Label/edit_label',{'id' : id},function(data){ 
          dataa = JSON.parse(data);
          console.log(dataa);
          $('#edit_spk_id').val(dataa.id_spk);
          $('#edit_serial_id').val(id);
          $('#edit_spk_no').val(dataa.spk_no);
          // $('#edit_spk_no').val(dataa.spk_no);
          $('#edit_item_code').val(dataa.item_id);
          $('#edit_deskripsi').val(dataa.item_name);
          $('#edit_heatno_a').val(dataa.heatno_a);
          $('#edit_heatno_b').val(dataa.heatno_b);
          $('#edit_lpp_no').select2({
            data:[{id:0,text:dataa.lpp_no}]
        });
          $('#edit_lpp_qty').val(dataa.lpp_qty);
          $('#edit_weight').val(dataa.weight);
      });

      $.post('../Label/select_spk',{},function(data){ 
        dataa = JSON.parse(data);
       // console.log(dataa);
            table = '';
        for(i in dataa){
            table += '<option value="'+dataa[i].id_spk+'.'+dataa[i].spk_number+'">'+dataa[i].spk_number+'</option>';
        }
    
        $('#edit_spk_no').append(table);
    });
  }

  function proses_edit_label(){
    serial_id = $('#edit_serial_id').val()
    
    no_spk = $('#edit_spk_no').val();
    id_spk = $('#edit_spk_id').val();
    //console.log(id_spk);
    //console.log(no_spk);
    item_code = $('#edit_item_code').val();
    deskripsi = $('#edit_deskripsi').val();
    heatno_a = $('#edit_heatno_a').val();
    heatno_b = $('#edit_heatno_b').val();
    lpp = $('#edit_lpp_no').val();
    weight = $('#edit_weight').val();
    k = lpp.search(".");
    if(lpp != 0){
        lppp = lpp.split('.');
        lpp_qty = lppp[0];
        lpp_number = lppp[1];
    }else{
        lpp_number = $('#edit_lpp_no :selected').text();
        lpp_qty = $('#edit_lpp_qty').val();
    }
    //console.log(lpp_number);
    //console.log(lpp_qty);

   
   
   $.post('../Label/proses_edit_label',{ 'serial_id' : serial_id, 'id_spk' : id_spk, 'no_spk' : no_spk, 'item_code' : item_code, 'deskripsi' : deskripsi, 'heatno_a' : heatno_a, 'heatno_b' : heatno_b, 'lpp_qty' : lpp_qty, 'lpp_number' : lpp_number, 'weight' : weight},function(data){ 
      //console.log(data);

      if(data == 1){
        swal("User Success Edited!", {
            icon: "success",
          });
          $('#simpletable').DataTable().ajax.reload();
      }else{
        swal("User edit failed!", {
            icon: "failed",
          });
          $('#simpletable').DataTable().ajax.reload();
      }
      $("#editModal").modal("hide");
      });
  
  }

  function delete_data(){
    $.post('../Label/delete_data',{ },function(data){ 
        //console.log(data);
  
       
          swal("Label empty!", {
              icon: "success",
            });
            $('#simpletable').DataTable().ajax.reload();
        
     
        });
    
    
  }

  function move_data(){
    $.post('../Label/move_data',{ },function(data){ 
        //console.log(data);
  
       
        swal("Label save in m_batch!", {
            icon: "success",
          });
          $('#simpletable').DataTable().ajax.reload();
        $("#editModal").modal("hide");
        });
    
    
}