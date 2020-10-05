$("#loginForm").submit(function (event) {
    event.preventDefault();
    window.setTimeout(function(){
        $(".login-form-container .alert").fadeOut(500);
    }, 500);
    $.ajax({
        url: "/process.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(response) {
            result = $.parseJSON(response);
            if(!result.validateResult){
                $(".login-form-container").prepend("<div class=\"alert alert-danger\" role=\"alert\">" + result.validateError + "</div>")
            } else if (!result.userFound) {
                $(".login-form-container").prepend("<div class=\"alert alert-danger\" role=\"alert\">Пользователь с таким именем не найден</div>")
            } else {
                $(".login-form-container").height($(".login-form-container").height());
                $(".login-form-container form").hide();
                $(".login-form-container").toggleClass("d-flex align-items-center justify-content-center alert-success");

                $(".login-form-container").prepend("<div>" +
                    "Данные пользователя: " +
                    "<br>id: " + result.user.id +
                    "<br>Имя: "+ result.user.name +
                    "<br>Почта: "+ result.user.email +
                    "</div>")
            }
        },
        }
    );
});