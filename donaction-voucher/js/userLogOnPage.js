var canDonate = ["", "", "", ""];


   

function userLogOn() {
    var formData = SerializedUserData();
    var porta = 8080;
    $.ajax({
        type: "POST",
        url: $("#myForm").attr('action') + ":" + porta + "/cadastrarDoador",
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


$("#myForm").submit(function(event){
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
    var userName = document.getElementById('name').value;
    var userCpf = document.getElementById('cpf').value;
    var userEmail = document.getElementById('email').value;
    var userPwd = document.getElementById('password').value;
    var userLocation = document.getElementById('city').value;
    var userBlood = $('#bloody').val().charAt(1) == '+' ? $('#bloody').val().charAt(0) : $('#bloody').val();
    var userDonator = toDonate();
    return "nmDoador=" + userName + "&nrCpf=" + userCpf + "&emailDoador=" + userEmail + "&senhaDoador=" + userPwd + "&cidadeDoador=" + userLocation 
        + "&tipoSanguineo=" + userBlood + "&podeDoar=" + userDonator;
}

function checkbox_config(status, posicao, clicado) {
    var a = posicao*2;
    alterCheckbox(a,a+1,clicado);
    canDonate[posicao] = status;
}

function alterCheckbox(a,b,clicado){
    if (clicado % 2 == 0){
        document.getElementsByName("checkbox")[b].checked = false;
    } else{
        document.getElementsByName("checkbox")[a].checked = false;
    }
}

function toDonate() {
    var result = true;
    for (var i = 0; i < canDonate.length; i++) {
        if (canDonate[i] == false) {
            result = false;
        }
    }
    return result;
}

function validateForm() {
    if (document.getElementsByTagName("input")[0].value == "" || document.getElementsByTagName("input")[1].value == "" 
        || document.getElementsByTagName("input")[2].value == "" || document.getElementsByTagName("input")[3].value == "" 
        || document.getElementById('city').value == 'Cidade' || document.getElementById('bloody').value =='Tipo Sanguíneo' 
        || !validateCheckBox(7)) {
        return false;
    } else {
        return true;
    }
}

function validateCheckBox(numeroDeCheckBox) {
    for (var i = numeroDeCheckBox; i > 0; i =- 2) {
        if (document.getElementsByName("checkbox")[i].checked == false && document.getElementsByName("checkbox")[(i-1)].checked == false){
            return false
        }
    }
    return true;
}

