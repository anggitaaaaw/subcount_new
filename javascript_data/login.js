 function login(){
        username = $('#username').val();
        password = $('#password').val();
        console.log(username);
        console.log(password);
        $.post('User/login_user',{ 'username' : username, 'password' : password},
        function(data){ 
            console.log(data);
            if(data == "berhasil"){
                window.location.href='Welcome/link_dashboard';
            }else{
                window.location.href='Welcome';
            }
      
        });
    }     