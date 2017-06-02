function userLogOn() {
    var formData = SerializedUserData();
    var porta = 8080;
    $.ajax({
        type: "POST",
        url: $("#campos").attr('action') + ":" + porta + "/cadastrarEmpresa",
        timeout: 5000,
        data: formData,
        success: function(data, textStatus, jqXHR) {
            swal({
                html: true,
                title: "Pronto!",
                text: "O cadastro foi realizado com sucesso.",
                type: "success",
                confirmButtonText: "Continuar",
                closeOnConfirm: false
            }, function() {
                location.href = "../index.php"
            })
        },
        error: function(xhr, textStatus, errorThrown) {
             swal({
                html: true,
                title: "Algo deu errado :(",
                text: "Tente novamente mais tarde.",
                type: "error",
                closeOnConfirm: false
            }, function() {
                location.href = "../index.php"
            })
        }
    });
}


$("#submit").click(function(event){
    event.preventDefault();
    if(!validateForm()) 
        sweetAlert("Formulário inválido!", "Preencha todos os campos para prosseguir!", "error");
    else {
        swal({
          title: "Confirmar",
          text: "Os dados inseridos estão corretos?",
          type: "info",
          allowEscapeKey: false,
          allowOutsideClick: false,
          showCancelButton: true,
          confirmButtonText: "Sim",
          cancelButtonText: "Não",
          closeOnConfirm: false,
          showLoaderOnConfirm: true,
        },
        function(){
          setTimeout(function(){
            userLogOn();
          }, 5000);
        });
    }
})

function SerializedUserData() {
    var userNome = $('#nome').val();
    var userCnpj = $('#nrCnpj').val();
    var userEmail = $('#email').val();
    var userPwd = $('#senha').val();
    var userLocation = $('#cidade').val();
    return "nmEmpresa=" + userNome + "&nrCnpj=" + userCnpj + "&emailEmpresa=" + userEmail + "&senhaEmpresa=" + userPwd + "&cidadeEmpresa=" + userLocation;
}

function validateForm() {
  if($('#nome').val() == ''  || $('#email').val() == '' || $('#nrCnpj').val() == '' || $('#senha').val() == '' || $('#cidade').val() == 'Cidade')
      return false;
  return true;
}