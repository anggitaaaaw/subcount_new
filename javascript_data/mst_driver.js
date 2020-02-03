function new_driver(){
    plat_no = $('#plat_no').val();
    vehicle_name = $('#vehicle_name').val();
    driver_name = $('#driver_name').val();
    no_telp = $('#no_telp').val();
 
 
    if(plat_no == '' || vehicle_name == '' || driver_name == '' || no_telp == ''){
        alert('mohon lengkapi data anda');
    }else{
        $.post('../Vendor/new_driver',{ 'plat_no' : plat_no ,'vehicle_name' : vehicle_name, 'driver_name' : driver_name, 'no_telp' : no_telp},
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
    view_driver();
});

function view_driver(){
    var table = $('#example').DataTable( {
        "ajax": "../Vendor/view_driver",
        "columns": [
            { "data": "id_driver" },
            { "data": "plat_no" },
            { "data": "vehicle_name" },
            { "data": "driver_name" },
            { "data": "no_telp" }
        ]   
    });

    $('#example tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
     
        
    } );
 
    $('#delete_driver').click( function () {
    
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
                    delete_driver(table.rows('.selected').data()[i].id_driver);
                }
             
              swal('Driver Success Deleted ' + no_select + ' rows', {
                icon: "success",
              });
              $('#example').DataTable().ajax.reload();
            } else {
              swal("Driver file is safe!");
            }
           
          });

          

    });
    
    $('#edit_driver').click( function () {
        select_row = table.rows('.selected').data ().length;
        if(select_row == 1 ){
            nik = table.rows('.selected').data()[0].id_driver;
            $("#editModal").modal("show");
            edit_driver(nik);
        }else{
            swal("Your can edit only 1 row!");
        }
        $('#example').DataTable().ajax.reload();
    });
}



function edit_driver(nik){
  //  console.log(nik);
    $.post('../Vendor/edit_driver',{'id_driver' : nik},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);
        $('#edit_id_driver').val(dataa.id_driver);
        $('#edit_plat_no').val(dataa.plat_no);
        $('#edit_vehicle_name').val(dataa.vehicle_name);
        $('#edit_driver_name').val(dataa.driver_name);
        $('#edit_no_telp').val(dataa.no_telp);
        
    });
}

function delete_driver(nik){
    $.post('../Vendor/delete_driver',{'id_driver' : nik},function(data){ 
       
    });
}

function proses_edit_driver(){
    id_driver = $('#edit_id_driver').val();
    plat_no = $('#edit_plat_no').val();
    vehicle_name = $('#edit_vehicle_name').val();
    driver_name = $('#edit_driver_name').val();
    no_telp = $('#edit_no_telp').val();
    $.post('../Vendor/proses_edit_driver',{ 'id_driver' : id_driver ,'plat_no' : plat_no, 'vehicle_name' : vehicle_name, 'driver_name' : driver_name, 'no_telp': no_telp},
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
