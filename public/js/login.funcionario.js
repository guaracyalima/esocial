$('#button-login').click(function () {
    validCampo();
});

$(document).keypress(function(e) {
    if(e.which == 13) validCampo();
});

function validCampo() {
    var cpf = $('#cpf-funcionario').val();

    if (cpf != "") {
        if (cpf.length === 11) {
            login(cpf);
        } else {
            msg_erro("CPF deve conter 11 números");

        }
    } else {
        msg_erro("Preenchar o campo CPF");
    }
}

function login(cpf) {

    console.log(cpf);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    var url = "login";

    $.ajax({
        url: url,
        type: "POST",
        dataType: 'json',
        data: {
            cpf: cpf,
        },
        cache: false,
        success: function (data) {
            if (data.valid) {
                //$(location).attr('href', 'funcionario');
            } else {
                msg_erro(data.message);
                //clear input cpf
                $('#cpf-funcionario').val(" ");
                $("input#cpf-funcionario").focus();
            }
        },
        error: function () {
            // Fail message
            msg_erro("Erro na conexão");
            $('#cpf-funcionario').val(" ");
            $("input#cpf-funcionario").focus();
        },
    });

}

function msg_erro(msg) {
    $('#retorno_msg').html("<div class='alert alert-danger'>");
    $('#retorno_msg > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
        .append("</button>");
    $('#retorno_msg > .alert-danger').append("<strong>" + msg);
    $('#retorno_msg > .alert-danger').append('</div>');
}
