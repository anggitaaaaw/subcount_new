$(document).ready(function() {
    nik = $('#id_user').val();
    $.post('../User/tree_menu',{ 'nik' : nik },
    function(data){ 
        dataa = JSON.parse(data);
        console.log(dataa);

        table = '';
    for(i in dataa){
        if(dataa[i].link == '-' && dataa[i].parent_menu == ""){
        table += '<div class="nav-item has-sub">';
        table += '<a><i class="ik ik-settings"></i><span>'+dataa[i].menu_name+'</span></a>';
            table += '<div class="submenu-content">';
            for(k in dataa){
                if(dataa[k].parent_menu == dataa[i].menu_name){
                table += '<a href="../'+dataa[k].link+'" class="menu-item"><i class="ik ik-file-text"></i>'+dataa[k].menu_name+'</a>';
            }
        }
        table += '</div>';
        table += '</div>';
        }

    }
    table += '<div class="nav-item">';
    for(j in dataa){
        if(dataa[j].parent_menu == "" && dataa[j].link != '-' ){
           
           table += '<a href="../'+dataa[j].link+'" class="menu-item"><i class="ik ik-file-text"></i>'+dataa[j].menu_name+'</a>';
          
        }
    }
      table += '</div>';

      $('#tree_menu').html(table);
   
    });
   
    });

    function change_password(){
        id_user = $('#id_user').val();
        password = $('#password').val();
        $.post('../User/change_password',{ 'nik' : id_user, 'password' :password }, function(data){ 
            console.log(data);
            if(data == "1"){
                swal("password change successfully!");
              
            }else{
                swal("The password failed to change!");
               
            }
            $("#change_pass").modal("hide");
            $('#password').val("");

            

        });
    }