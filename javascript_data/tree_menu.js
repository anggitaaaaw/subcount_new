$(document).ready(function() {
    nik = $('#nik').val();
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
    /*<div class="nav-item">
    <a href="<?php echo site_url('welcome/link_dashboard') ?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
</div>
<div class="nav-item has-sub">
    <a><i class="ik ik-settings"></i><span>Administrator</span></a>
    <div class="submenu-content">
        <a href="<?php echo site_url('welcome/adm_setting_menu') ?>" class="menu-item"><i class="ik ik-file-text"></i>Setting menu</a>
        <a href="<?php echo site_url('welcome/adm_setting_user') ?>" class="menu-item"><i class="ik ik-users"></i>Setting User</a>
        <a href="<?php echo site_url('welcome/adm_master_user') ?>" class="menu-item"><i class="ik ik-user"></i>Master User</a>
        <a href="<?php echo site_url('welcome/adm_historical_akses') ?>" class="menu-item"><i class="ik ik-users"></i>Historical Access</a>
    </div>
</div>
<div class="nav-item">
    <a href="<?php echo site_url('welcome/create_label_batch') ?>" class="menu-item"><i class="ik ik-file-text"></i>Create Label Batch</a>
    <a href="<?php echo site_url('welcome/delivery_note') ?>" class="menu-item"><i class="ik ik-file-text"></i>Delivery Note</a>
    <a href="<?php echo site_url('welcome/receiving_disubcount') ?>" class="menu-item"><i class="ik ik-file-text"></i>Vendor Receiving</a>
</div>
<div class="nav-item has-sub">
    <a><i class="ik ik-file-text"></i>Vendor Delivery</a>
    <div class="submenu-content">
        <a href="#" class="menu-item"><i class="ik ik-printer"></i>Print Label Batch</a>
        <a href="#" class="menu-item"><i class="ik ik-list"></i>Packing List</a>
    </div>
</div>
<div class="nav-item has-sub">
    <a><i class="ik ik-file-text"></i>Incoming WIP</a>
    <div class="submenu-content">
        <a href="#" class="menu-item"><i class="ik ik-printer"></i>Print Label Packing</a>
        <a href="#" class="menu-item"><i class="ik ik-printer"></i>Print BST</a>
    </div>
</div>*/
    });