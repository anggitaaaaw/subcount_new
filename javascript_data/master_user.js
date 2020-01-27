    
    $(document).ready(function() {
        $("#div_vendor").hide();
        $("#group").change(function() {
            var group = $('#group').val();
            if(group == "vendor"){
                $("#div_vendor").show();
            }else{
                $("#div_vendor").hide();
            }
        });

        $.post('../Vendor/select_vendor',{},
            function(data){ 
            //console.log(data);
            dataa = JSON.parse(data);
            table = '';
                table += '<option value="" disabled selected>-SELECT VENDOR-</option>';
                for(i in dataa){
                table += '<option value="'+dataa[i].vendor_code+'">'+dataa[i].vendor_name+'</option>';
            }
            $('#vendor').html(table);
            
        });
    });

    function new_user(){
        nik = $('#nik').val();
        full_name = $('#full_name').val();
        username = $('#username').val();
        password = $('#password').val();
        position = $('#position').val();
        group = $('#group').val();
        vendor = $('#vendor').val();
        status = $('#status').val();
        if(nik == '' || full_name == '' || username == '' || password == ''){
            alert('mohon lengkapi data anda');
        }else{
            $.post('../User/new_user',{ 'nik' : nik ,'fullname' : full_name, 'username' : username, 'password' : password, 'position': position, 'group' : group, 'vendor' : vendor, 'status' : status},
            function(data){ 
            console.log(data);
    
            if(data == "berhasil"){
                swal("Users added successfully!");
                $('#example').DataTable().ajax.reload();
            }else{
                swal(data);
                $('#example').DataTable().ajax.reload();
            }
            $("#demoModal").modal("hide");
            });
        }
       
      
      }

    function view_user(){
        var table = $('#example').DataTable( {
            "ajax": "../User/viewuser",
            "columns": [
                { "data": "nik" },
                { "data": "fullname" },
                { "data": "username" },
                { "data": "password" },
                { "data": "position" },
                { "data": "group" },
                { "data": "status" }
            ]   
        });

        $('#example tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('selected');
         
            
        } );
     
        $('#delete_user').click( function () {
        
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
                        delete_user(table.rows('.selected').data()[i].nik);
                    }
                 
                  swal('User Success Deleted ' + no_select + ' rows', {
                    icon: "success",
                  });
                  $('#example').DataTable().ajax.reload();
                } else {
                  swal("User file is safe!");
                }
               
              });

           

        });
        
        $('#edit_user').click( function () {
            select_row = table.rows('.selected').data ().length;
            if(select_row == 1 ){
                nik = table.rows('.selected').data()[0].nik;
                $("#editModal").modal("show");
                edit_user(nik);
            }else{
                swal("Your can edit only 1 row!");
            }
            $('#example').DataTable().ajax.reload();
        });
    }

    $(document).ready(function() {
        view_user();
    });

    function edit_user(nik){
      //  console.log(nik);
        $.post('../User/edit_user',{'nik' : nik},function(data){ 
            dataa = JSON.parse(data);
            console.log(dataa);

            $("#div_edit_vendor").hide();
            if(dataa.group == "vendor"){
                $("#div_edit_vendor").show();
            }else{
                $("#div_edit_vendor").hide();
            }

            $("#edit_group").change(function() {
                var group = $('#edit_group').val();
                if(group == "vendor"){
                    $("#div_edit_vendor").show();
                }else{
                    $("#div_edit_vendor").hide();
                }
            });

            $.post('../Vendor/select_vendor',{},
                function(data){ 
                //console.log(data);
                dataa = JSON.parse(data);
                table = '';
                    table += '<option value="" disabled selected>-SELECT VENDOR-</option>';
                    for(i in dataa){
                    table += '<option value="'+dataa[i].vendor_code+'">'+dataa[i].vendor_name+'</option>';
                }
                $('#edit_vendor').html(table);
                
            });

            $('#edit_nik').val(dataa.nik);
            $('#edit_full_name').val(dataa.fullname);
            $('#edit_username').val(dataa.username);
            $('#edit_password').val(dataa.password);
            $('#edit_position').val(dataa.position);
            $('#edit_group').val(dataa.group);
            $('#edit_vendor').val(dataa.vendor);
            $('#edit_status').val(dataa.status);
        });
    }

    function delete_user(nik){
        $.post('../User/delete_user',{'nik' : nik},function(data){ 
           
        });
    }

    function proses_edit_user(){
        nik = $('#edit_nik').val();
        full_name = $('#edit_full_name').val();
        username = $('#edit_username').val();
        password = $('#edit_password').val();
        position = $('#edit_position').val();
        group = $('#edit_group').val();
        vendor = $('#edit_vendor').val();
        status = $('#edit_status').val();
       
        $.post('../User/proses_edit_user',{ 'nik' : nik ,'fullname' : full_name, 'username' : username, 'password' : password, 'position': position, 'group' : group, 'vendor' : vendor, 'status' : status},
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
  