$(document).ready(function() {
    $.post('../User/viewuser',{},function(data){ 
        dataa = JSON.parse(data);
        //console.log(data);
            table = '';
        for(i in dataa.data){
            table += '<option value="'+dataa.data[i].nik+'">'+dataa.data[i].fullname+'</option>';
        }
    $('#username').html(table);

    });

    $.post('../User/view_menu',{},function(data){ 
        dataa = JSON.parse(data);
        //console.log(data);
            table = '';
        for(i in dataa.data){
            table += '<tr>';
            table += '<td>'+dataa.data[i].parent_menu+'</td>';
            table += '<td>'+dataa.data[i].menu_name+'</td>';
            table += '<td></td>';
            table += '</tr>';
        }
    $('#table_menu').html(table);

    });
});

function checkbox(str){
    console.log(str);
    nik = $('#username').val();
        if($('#check_user'+str).prop("checked") == true){
            alert("Checkbox is checked.");
            $.post('../User/checked_menu_user',{'id_menu' : str, 'nik' : nik},function(data){ 
                console.log(data);
            });
        }
        else if($('#check_user'+str).prop("checked") == false){
            alert("Checkbox is unchecked.");
            $.post('../User/unchecked_menu_user',{'id_menu' : str, 'nik' : nik},function(data){ 
                console.log(data);
            });
        }
   
}

function generate_menu(){
    nik = $('#username').val();
    console.log(nik);
    $.post('../User/insert_menu_user',{'nik' : nik},function(data){ 
        
        dataa = JSON.parse(data);
        console.log(dataa);
        table = '';
        for(i in dataa){
            table += '<tr>';
            table += '<td>'+dataa[i].parent_menu+'</td>';
            table += '<td>'+dataa[i].menu_name+'</td>';
            if(dataa[i].status == "false"){
            table += '<td><input type="checkbox" value="'+dataa[i].id_menu+'" onclick="checkbox(this.value)" id="check_user'+dataa[i].id_menu+'"/></td>';
            }else{
                table += '<td><input type="checkbox" value="'+dataa[i].id_menu+'" onclick="checkbox(this.value)" id="check_user'+dataa[i].id_menu+'"  checked></td>';

            }
            table += '</tr>';
        }
    $('#table_menu').html(table);
    });
}
// nampilin data nya paling pake for di dalam for
// cheked berarti masuk database
// uncheked hapus dari database
// historical access harus login dulu berarti



