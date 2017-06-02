$("#myForm").submit(function(event){
    event.preventDefault();
    var formData = SerializedUserData();
    var porta = 8080;
    $.ajax({
        type: "POST",
        url: $(this).attr('action') + ":" + porta + "/cadastrarCampanha",
        timeout: 5000,
        data: formData,
        success: function(data, textStatus, jqXHR) {
            console.log("Deu Bom");
        }
    });
});

function SerializedUserData() {
    var dsCampanha = $('#dsCampanha').val();
    var dtInicio = formartarData($('#dtInicio').val());
    var dtFim = formartarData($('#dtFim').val());
    var cidadeCampanha = $('#cidadeCampanha').val();
    var nmCampanha = $('#nmCampanha').val();
    var vlrInvestimento = $('#vlrInvestimento').val();
    var qtdMinVoucher = $('#qtdMinVoucher').val();
    var imgPath = $('#imgPath').val().split(' ').join('-').toLowerCase();
    return "dsCampanha=" + dsCampanha + "&dtInicio=" + dtInicio + "&dtFim=" + dtFim + "&cidadeCampanha=" + cidadeCampanha + "&nmCampanha=" + nmCampanha 
        + "&vlrInvestimento=" + vlrInvestimento + "&qtdMinVoucher=" + qtdMinVoucher + "&imgPath=" + imgPath;
}

function formatarData(data) {
    var dia = data.substring(0, data.indexOf("/"));
    var mes = data.substring(3, data.lastIndexOf("/"));
    var ano = data.substring(data.lastIndexOf("/") + 1, data.length);
    return ano + '-' + mes + '-' + dia;
}