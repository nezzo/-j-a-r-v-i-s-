$(document).ready(function(){
    
    /*получаем данные с формы и отправляем на пхп скрипт*/
    $('.login-button').click(function(e){
        e.preventDefault();
         var login = $('#login').val();
         var pass = $('#password').val();
                
        if(login !='' && pass !=''){
            $.ajax({
                type: "POST",
                url: "controller/Admin.php",
                data: {
                    login: login,
                    pass: pass
                },
                success: function (data) {
                    console.log(data);
                },
                error: function (xhr, str) {
                    alert("Возникла ошибка!");
                }

            });
            
        }
          

    });

});