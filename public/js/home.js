$(function(){


    $("#form_message").submit(function () {

        $.ajax({
            type: "POST",
            url: BASE_URL + "home/ajax_save_message",
            dataType: "json",
            data: $(this).serialize(),
            beforeSend: function () {
                clearErrors();
                $("#btn_save_message").siblings(".help-block").html(loadingImg("Verificando.."));
            },
            success: function (response) {
                clearErrors();
                if (response["status"]) {
                    swal.fire("Sucesso!", "Usuário salvo com sucesso!", "success");
                    $("#form_message")[0].reset();
                } else {
                    showErrorsModal(response["error_list"])
                }
            }
        });

        return false;
    });
});