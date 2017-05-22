$("#campos").submit(function(event){
    event.preventDefault();
    $('#submit').click(false);
    if(!validateForm()) {
        sweetAlert("Formulário inválido!", "Preencha todos os campos!", "error");
        $('#submit').off('click');
    }
    else {
        var formData = SerializedUserData();
        var porta = 8080;
        $.ajax({
            type: "POST",
            url: $(this).attr('action') + ":" + porta + "/cadastrarEmpresa",
            data: formData,
            success: function(data, textStatus, jqXHR) {
                swal({
                    html: true,
                    title: "Pronto!",
                    text: "O cadastro foi realizado com sucesso.",
                    type: "success",
                    confirmButtonText: "Continuar",
                    closeOnConfirm: false,
                }, function() {
                    location.href = "../index.php"
                })
            }
        });
    }
});

function SerializedUserData() {
    var userNome = $('#nome').val();
    var userCnpj = $('#nrCnpj').val();
    var userEmail = $('#email').val();
    var userPwd = $('#senha').val();
    var userLocation = $('#cidade').val();
    return "nmEmpresa=" + userNome + "&nrCnpj=" + userCnpj + "&emailEmpresa=" + userEmail + "&senhaEmpresa=" + userPwd + "&cidadeEmpresa=" + userLocation;
}

function validateForm() {
    if($('#nome').val()== ''  || $('#email').val()== '' || $('#nrCnpj').val()== '' || $('#senha').val()== '' || $('#cidade').val()== 'Cidade' )
        return false;
    else return true;
}