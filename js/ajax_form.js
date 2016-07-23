/*TODO Надо доделать форму авторизации что бы если все поля заполненые то отправляло
   данные на контроллер для получения ответа от сервера
*/
$(document).ready(function(){
    var login = $('#login').val();
    var pass = $('#password').val();

    $('.login-button').click(function(e){
        e.preventDefault();

        $(".form_enter").validate({
            submitHandler: function(form) {

                senddata($(form).serialize());

            },

            rules:{

                login:{
                    required: true,
                    minlength: 4,
                    maxlength: 16
                },

                password:{
                    required: true,
                    minlength: 6,
                    maxlength: 16
                }
            },

            messages:{

                login:{
                    required: "Это поле обязательно для заполнения",
                    minlength: "Логин должен быть минимум 4 символа",
                    maxlength: "Максимальное число символо - 16"
                },

                password:{
                    required: "Это поле обязательно для заполнения",
                    minlength: "Пароль должен быть минимум 6 символа",
                    maxlength: "Пароль должен быть максимум 16 символов"
                }

            }

        });

        function senddata(form){
            alert("111");
            $.ajax({
                type: "POST",
                url: "controller/Admin.php",
                data: {
                    form: form
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