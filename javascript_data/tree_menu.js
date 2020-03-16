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
    
    $.post('../Label/ven_receive',{},function(data){ 
        dataa = JSON.parse(data);

        list =  '<h4 class="header">Notifications</h4>';
        for(i in dataa){
            list += '<div class="notifications-wrap">'+
                                        '<a href="#" data-id="'+dataa[i].dn_no+'" data-target="#editQty" data-toggle="modal" onclick="modal_notif(this)" class="media">'+
                                            '<span class="d-flex">'+
                                                '<i class="ik ik-check"></i> '+
                                            '</span>'+
                                            '<span class="media-body">'+
                                                '<span class="heading-font-family media-heading">Receiving Report <br></span> '+
                                                '<span class="media-content">'+dataa[i].dn_no+' <br> '+dataa[i].receive_date+'</span>'+
                                            '</span>'+
                                        '</a>'+
                                    '</div>';
        }
        list += '<div class="footer"><a href="javascript:void(0);">See all activity</a></div>';

        $('#list_notif').html(list);
    });

    });

    function modal_notif(q){
        var dataId = $(q).data("id");
        //console.log(dataId);

        $.post('../Label/trx_ven_receive_det',{'dn_no' : dataId},function(data){ 
            dataa = JSON.parse(data);
            console.log(dataa);
            var d = new Date();
            tgl = d.getDate();
            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            bulan = months[d.getMonth()];
            tahun = d.getFullYear();
            trans_date = 'Transaction Date: <b>'+tgl+' '+bulan+' '+tahun+'</b>';
            $('#trans_date').html(trans_date);
            $('#dn_no').val(dataa[0].dn_no);
            $('#spk_no').val(dataa[0].spk_no);
            $('#lpp_no').val(dataa[0].lpp_no);
            $('#item_code').val(dataa[0].item_code);
            $('#item_name').val(dataa[0].item_name);
            $('#heatno_a').val(dataa[0].heatno_a);
            $('#qty_real').val(dataa[0].qty_real);
            $('#weight_real').val(dataa[0].weight_real);
            $('#qty_real2').val(dataa[0].qty_real);
            $('#weight_real2').val(dataa[0].weight_real);
            $('#qty_real3').val(dataa[0].qty_real);
            $('#weight_real3').val(dataa[0].weight_real);
            
        });

    }
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