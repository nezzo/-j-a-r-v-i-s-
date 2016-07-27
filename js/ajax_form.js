/*TODO Надо доделать форму авторизации что бы если все поля заполненые то отправляло
   данные на контроллер для получения ответа от сервера
*/
$(document).ready(function(){
    var login = $('#login').val();
    var pass = $('#password').val();

    $('.login-button').click(function(e){
        e.preventDefault();
        
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
        

    });

});