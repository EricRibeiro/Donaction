$("#loginForm").submit(function(event){
    event.preventDefault();
    var porta = 8080;
    var formData = SerializedUserData();
    $.ajax({
        type: "POST",
        url: $(this).attr('action') + ":" + porta + "/logarEmpresa",
        data: formData,
        success: function(data, textStatus, jqXHR) {
            var userSession = JSON.parse(jqXHR.responseText);
            localStorage.setItem("userData", JSON.stringify(userSession));
            location.href = ("pages/userVoucherValidation.php");       
        },
        error: function(xhr, textStatus, errorThrown) {
            sweetAlert("Login inválido!","","error");
        }
    });
});

function SerializedUserData() {
    var userEmail = $('#userEmail').val();
    var userPassword = $('#userPassword').val();
    return "emailEmpresa=" + userEmail + "&senhaEmpresa=" + userPassword;
}