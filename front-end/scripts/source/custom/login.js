$("#loginForm").submit(function (event) {
    event.preventDefault();
    var porta = 8080;
    var formData = SerializedUserData();
    $.ajax({
        type: "POST",
        url: $(this).attr('action') + ":" + porta + "/logarEmpresa",
        data: formData,
        success: function (data, textStatus, jqXHR) {
            var userSession = JSON.parse(jqXHR.responseText);
            localStorage.setItem("userData", JSON.stringify(userSession));
            location.href = ("campanha.php");
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

function userFirstSession() {
    classActive();
    var userData = JSON.parse(localStorage.getItem("userData"));
    document.getElementById("userAvatar").src = "https://api.adorable.io/avatars/180/" + userData.id + ".png";
    document.getElementById("userName").innerHTML = userData.nome;
}
function userSession() {
    classActive();
    var userData = JSON.parse(localStorage.getItem("userData"));
    document.getElementById("userAvatar").src = "https://api.adorable.io/avatars/180/" + userData.id + ".png";
    userData.name = $("#nome").val();
    userData.nrCnpj = $("#nrCnpj").val();
    userData.email = $("#email").val();
    userData.cidade = $("#city").val();
}
function endSession() {
    localStorage.removeItem("userData");
    location.href = ("../../index.php");
}

function classActive() {
    var currentPage = location.href.split('/')[location.href.split('/').length - 1];
    if (currentPage == "userVoucherValidation.php") {
        document.getElementsByTagName("li")[0].className = "active";
    }
    if (currentPage == "userPageInfo.php") {
        document.getElementsByTagName("li")[1].className = "active";
    }
}