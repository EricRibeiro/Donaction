function clearField(inputId) {
    document.getElementById(inputId).value = "";
}

$("#atualizar").submit(function (event) {
    event.preventDefault();
    var porta = 8080;
    var formData = SerializedUserData();
    $.ajax({
        type: "POST",
        url: $(this).attr('action') + ":" + porta + "/atualizarCadastroEmpresa",
        data: formData,
        success: function (data, textStatus, jqXHR) {
            sweetAlert("Dados Alterados com Sucesso!", "", "success");
        },
        error: function (xhr, textStatus, errorThrown) {
            sweetAlert("Dados inválido!", "", "error");
        }
    });
});

function SerializedUserData() {
    var userData = JSON.parse(localStorage.getItem("userData"));
    var cdEmpresa = userData.id;
    var userEmail = $('#email').val();
    var userLocation = $('#city').val();
    return "cdEmpresa=" + cdEmpresa + "&emailEmpresa=" + userEmail + "&cidadeEmpresa=" + userLocation;
}

function notBlank(inputId) {
    var userData = JSON.parse(localStorage.getItem("userData"));
    var inputValue = $(inputId).val();
    if (inputValue == "" && inputId == "email") {
        userData.email = $(inputId).val();
    }
}