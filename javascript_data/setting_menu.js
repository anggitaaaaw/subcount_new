
    function new_menu(){
        id_menu = $('#id_menu').val();
        parent_menu = $('#parent_menu').val();
        menu_name = $('#menu_name').val();
        link = $('#link').val();
        order_number = $('#order_number').val();
        
        if(id_menu == '' || menu_name == '' || link == ''){
            alert('mohon lengkapi data anda');
        }else{
            $.post('../User/new_menu',{ 'id_menu' : id_menu ,'parent_menu' : parent_menu, 'menu_name': menu_name, 'link' : link, 'order_number' : order_number},
            function(data){ 
            console.log(data);
    
            if(data == 1){
                swal("Users added successfully!", {
                    icon: "success",
                  });
                  $('#example').DataTable().ajax.reload();
            }else{
                swal(data);
                $('#example').DataTable().ajax.reload();  
    
            }
            $("#demoModal").modal("hide");
            });
        }
       
      
      }
      function view_menu(){
        var table = $('#example').DataTable( {
            "ajax": "../User/view_menu",
            "columns": [
                { "data": "id_menu" },
                { "data": "parent_menu" },
                { "data": "menu_name" },
                { "data": "link" },
                { "data": "order_number" }
            ]   
        });

        $('#example tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('selected');
         
            
        } );
     
        $('#delete_menu').click( function () {
        
            swal({
                title: "Are you sure Delete this Menu?",
                text: "Once deleted, you will not be able to recover this menu!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                    var no_select = table.rows('.selected').data().length;
                    for(i=0; i < no_select; i++){
                        delete_menu(table.rows('.selected').data()[i].id_menu);
                    }
                 
                  swal('Menu Success Deleted ' + no_select + ' rows', {
                    icon: "success",
                  });
                  $('#example').DataTable().ajax.reload();
                } else {
                  swal("Menu file is safe!");
                }
               
              });

           

        });
        
        $('#edit_menu').click( function () {
            select_row = table.rows('.selected').data ().length;
            if(select_row == 1 ){
                nik = table.rows('.selected').data()[0].id_menu;
                $("#editModal").modal("show");
                edit_menu(nik);
            }else{
                swal("Your can edit only 1 row!");
            }
            $('#example').DataTable().ajax.reload();
        });
    }

    $(document).ready(function() {
        view_menu();
        $.post('../User/view_menu',{},function(data){ 
            dataa = JSON.parse(data);
            //console.log(data);
                table = '<option value=""></option>';
            for(i in dataa.data){
                table += '<option value="'+dataa.data[i].menu_name+'">'+dataa.data[i].menu_name+'</option>';
            }
        $('#parent_menu').html(table);
        $('#edit_parent_menu').append(table);

    });
});

    function edit_menu(nik){
      //  console.log(nik);
        $.post('../User/edit_menu',{'id_menu' : nik},function(data){ 
            dataa = JSON.parse(data);
         //   console.log(dataa);
            $('#edit_id_menu').val(dataa.id_menu);
            $('#edit_parent_menu').val(dataa.parent_menu);
            $('#edit_menu_name').val(dataa.menu_name);
            $('#edit_link').val(dataa.link);
            $('#edit_order_number').val(dataa.order_number);
       
        });
    }

    function delete_menu(id_menu){
        $.post('../User/delete_menu',{'id_menu' : id_menu},function(data){ 
           
        });
    }

    function proses_edit_menu(){
        id_menu = $('#edit_id_menu').val();
        parent_menu = $('#edit_parent_menu').val();
        menu_name = $('#edit_menu_name').val();
        link = $('#edit_link').val();
        order_number = $('#edit_border_number').val();
       
        $.post('../User/proses_edit_menu',{ 'id_menu' : id_menu ,'parent_menu' : parent_menu, 'menu_name': menu_name, 'link' : link, 'order_number' : order_number},
        function(data){ 
          //console.log(data);
  
          if(data == 1){
            swal("Menu Success Edited!", {
                icon: "success",
              });
              $('#example').DataTable().ajax.reload();
          }else{
            swal("Menu edit Failed !", {
                icon: "failed",
              });
              $('#example').DataTable().ajax.reload();
          }
          $("#editModal").modal("hide");
          });
      
      }
  