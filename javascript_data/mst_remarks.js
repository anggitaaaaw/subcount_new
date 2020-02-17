function new_remarks(){
   remarks_name = $('#remarks_name').val();

   $.post('../Label/new_remarks',{'remarks_name' : remarks_name},function(data){  
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

$(document).ready(function() {
    view_remarks();
});

function view_remarks(){
    var table = $('#example').DataTable( {
        "ajax": "../Label/view_remarks",
        "columns": [
            { "data": "id_remarks" },
            { "data": "remarks_name" }
        ]   
    });

    $('#example tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
     
        
    } );
 
    $('#delete_remarks').click( function () {
    
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
                    delete_remarks(table.rows('.selected').data()[i].id_remarks);
                }
             
              swal('Remarks Success Deleted ' + no_select + ' rows', {
                icon: "success",
              });
              $('#example').DataTable().ajax.reload();
            } else {
              swal("Remarks file is safe!");
            }
           
          });

          

    });
    
    $('#edit_remarks').click( function () {
        select_row = table.rows('.selected').data ().length;
        if(select_row == 1 ){
            nik = table.rows('.selected').data()[0].id_remarks;
            $("#editModal").modal("show");
            edit_remarks(nik);
        }else{
            swal("Your can edit only 1 row!");
        }
        $('#example').DataTable().ajax.reload();
    });
}



function edit_remarks(nik){
  //  console.log(nik);
    $.post('../Label/edit_remarks',{'id_remarks' : nik},function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);
        $('#edit_id_remarks').val(dataa.id_remarks);
        $('#edit_remarks_name').val(dataa.remarks_name);
    });
}

function delete_remarks(nik){
    $.post('../Label/delete_remarks',{'id_remarks' : nik},function(data){ 
       
    });
}

function proses_edit_remarks(){
    id_remarks = $('#edit_id_remarks').val();
    remarks_name = $('#edit_remarks_name').val();
    console.log(id_remarks);
    console.log(remarks_name);
    $.post('../Label/proses_edit_remarks',{ 'id_remarks' : id_remarks ,'remarks_name' : remarks_name},
      function(data){ 
      //console.log(data);

      if(data == "berhasil"){
        swal("Remarks Success Edited!", { 
            icon: "success",
          });
          $('#example').DataTable().ajax.reload();
      }else{
        swal("Remarks edit failed!", {
            icon: "failed",
          });
          $('#example').DataTable().ajax.reload();
      }
      $("#editModal").modal("hide");
      });
  
  }