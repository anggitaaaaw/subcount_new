function new_vendor(){
    vendor_code = $('#vendor_code').val();
    vendor_name = $('#vendor_name').val();
    vendor_address = $('#vendor_address').val();
    contact_person = $('#contact_person').val();
 
    email = $('#email_contact').val();
    phone = $('#phone').val();
    website = $('#website').val();
    if(vendor_code == '' || vendor_name == '' || vendor_address == '' || contact_person == '' ||  email == '' || phone == '' || website == ''){
        alert('mohon lengkapi data anda');
    }else{
        $.post('../Vendor/new_vendor',{ 'vendor_code' : vendor_code ,'vendor_name' : vendor_name, 'vendor_address' : vendor_address, 'contact_person' : contact_person, 'email': email, 'phone' : phone, 'website' : website},
        function(data){ 
        console.log(data);

        if(data == '1'){
            swal("Vendor added successfully!");
            $('#example').DataTable().ajax.reload();
            
        }else if (data == '0'){
           swal("Vendor  not succesfully added !");
            $('#example').DataTable().ajax.reload();
        }

        $("#demoModal").modal("hide");
        $('#example').DataTable().ajax.reload();
        document.getElementById("myForm").reset();
        });
    }
   
  
  }
$(document).ready(function() {
    view_vendor();
});

function view_vendor(){
    var table = $('#example').DataTable( {
        "ajax": "../Vendor/view_vendor",
        "columns": [
            { "data": "vendor_code" },
            { "data": "vendor_name" },
            { "data": "vendor_address" },
            { "data": "contact_person" },
            { "data": "email" },
            { "data": "phone" },
            { "data": "website" }
        ]   
    });

    $('#example tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
     
        
    } );
 
    $('#delete_vendor').click( function () {
    
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
                    delete_vendor(table.rows('.selected').data()[i].vendor_code);
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
    
    $('#edit_vendor').click( function () {
        select_row = table.rows('.selected').data ().length;
        if(select_row == 1 ){
            nik = table.rows('.selected').data()[0].vendor_code;
            $("#editModal").modal("show");
            edit_vendor(nik);
        }else{
            swal("Your can edit only 1 row!");
        }
        $('#example').DataTable().ajax.reload();
    });
}



function edit_vendor(nik){
  //  console.log(nik);
    $.post('../Vendor/edit_vendor',{'vendor_code' : nik},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);
        $('#edit_vendor_code').val(dataa.vendor_code);
        $('#edit_vendor_name').val(dataa.vendor_name);
        $('#edit_vendor_address').val(dataa.vendor_address);
        $('#edit_contact_person').val(dataa.contact_person);
        $('#edit_email_contact').val(dataa.email);
        $('#edit_phone').val(dataa.phone);
        $('#edit_website').val(dataa.website);
    });
}

function delete_vendor(nik){
    $.post('../Vendor/delete_vendor',{'vendor_code' : nik},function(data){ 
       
    });
}

function proses_edit_vendor(){
    vendor_code = $('#edit_vendor_code').val();
    vendor_name = $('#edit_vendor_name').val();
    vendor_address = $('#edit_vendor_address').val();
    contact_person = $('#edit_contact_person').val();
    email = $('#edit_email_contact').val();
    batch_qty = $('#edit_phone').val();
    container_qty = $('#edit_website').val();
   
    $.post('../Vendor/proses_edit_vendor',{ 'vendor_code' : vendor_code ,'vendor_name' : vendor_name, 'vendor_address' : vendor_address, 'contact_person' : contact_person, 'email': email, 'phone' : batch_qty, 'website' : container_qty},
      function(data){ 
      //console.log(data);

      if(data == 1){
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
