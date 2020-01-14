    $(document).ready(function() {
        
       view_histori();
    
    });

    function view_histori(){
        var table = $('#example').DataTable( {
            "ajax": "../User/view_historical_akses",
            "columns": [
                { "data": "username" },
                { "data": "ip_address" },
                { "data": "computer_name" },
                { "data": "data_time" },
                { "data": "status" }
            ],
            
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                if (aData['status'] == "Success") {
                  $('td', nRow).css('background-color', 'green');
                } else if (aData['status'] == "Failed") {
                  $('td', nRow).css('baackground-color', 'red');
                }
            }   
        });
        $('#example tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('selected');
         
            
        } );
    }
    function clear_data(){
        swal({
            title: "Are you sure Delete all historical access?",
            text: "Once deleted, you will not be able to recover this histori!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.post('../User/delete_historical_akses',{},function(data){ 
                    $('#example').DataTable().ajax.reload();
                });
                swal("Historial access delete all!");
                $('#example').DataTable().ajax.reload();
            } else {
              swal("histori is safe!");
            }
           
          });
      
    }



  