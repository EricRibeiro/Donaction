$("#loginForm").submit(function (event) {
    event.preventDefault();
    var porta = 8080;
    var formData = SerializedUserData();
    $.ajax({
        type: "POST",
        url: $(this).attr('action') + ":" + porta + "/logarEmpresa",
        timeout: 5000,
        data: formData,
        success: function (data, textStatus, jqXHR) {
            var userSession = JSON.parse(jqXHR.responseText);
            localStorage.setItem("userData", JSON.stringify(userSession));
            location.href = ("front-end/pages/campanha.php");
        },
        error: function (xhr, textStatus, errorThrown) {
            sweetAlert("Login inválido!", "", "error");
        }
    });
});

function SerializedUserData() {
    var userEmail = $('#userEmail').val();
    var userPassword = $('#userPassword').val();
    return "emailEmpresa=" + userEmail + "&senhaEmpresa=" + userPassword;
}

function userSession() {
    var userData = JSON.parse(localStorage.getItem("userData"));
    document.getElementById("userAvatar").src = "https://api.adorable.io/avatars/180/" + userData.id + ".png";
    document.getElementById("userName").innerHTML = userData.nome;
    document.getElementById("cnpj").value = userData.nrCnpj;
    document.getElementById("city").value = userData.cidade;
    document.getElementById("email").value = userData.email;
}
function endSession() {
    localStorage.removeItem("userData");
    localStorage.removeItem("campanhas");
    location.href = ("../../index.php");
}