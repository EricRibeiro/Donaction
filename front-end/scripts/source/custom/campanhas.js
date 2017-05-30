//Histórico de Doações
$(function () {
    $('a[title]').tooltip();
});

(function () {
    'use strict';
    var $ = jQuery;
    $.fn.extend({
        filterTable: function () {
            return this.each(function () {
                $(this).on('keyup', function (e) {
                    $('.filterTable_no_results').remove();
                    var $this = $(this),
                        search = $this.val().toLowerCase(),
                        target = $this.attr('data-filters'),
                        $target = $(target),
                        $rows = $target.find('tbody tr');

                    if (search == '') {
                        $rows.show();
                    } else {
                        $rows.each(function () {
                            var $this = $(this);
                            $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                        })
                        if ($target.find('tbody tr:visible').size() === 0) {
                            var col_count = $target.find('tr').first().find('td').size();
                            var no_results = $('<tr class="filterTable_no_results"><td colspan="' + col_count + '">Nenhum Resultado foi Encontrado</td></tr>')
                            $target.find('tbody').append(no_results);
                        }
                    }
                });
            });
        }
    });
    $('[data-action="filter"]').filterTable();
})(jQuery);

$(function () {
    // attach table filter plugin to inputs
    $('[data-action="filter"]').filterTable();

    $('.container').on('click', '.panel-heading span.filter', function () {
        var $this = $(this),
            $panel = $this.parents('.panel');

        $panel.find('.panel-body').slideToggle();
        if ($this.css('display') != 'none') {
            $panel.find('.panel-body input').focus();
        }
    });
    $('[data-toggle="tooltip"]').tooltip();
});

$(function () {
    $("#donaction").on("click", function () {
        var address = 'http://192.168.15.5:8080/historicoEmpresa';
        var formData = "dsCampanha&dtFim&dtInicio&nmCampanha&prefvoucher&qtdVouchers&vlrInvestimento&voucherUsados"
        $.ajax({
            type: "POST",
            url: address,
            data: formData,
            success: function (data, textStatus, jqXHR) {
                var campanhas = JSON.parse(jqXHR.responseText);
                localStorage.setItem("campanhas", JSON.stringify(campanhas));
                gerarTabela();
            },
        });
    });
});

function gerarTabela() {
    var c = JSON.parse(localStorage.getItem("campanhas"));
    var tabela = ' <table class="table table-hover" id="dev-table"> <thead> <tr> <th>#</th>'
        + '<th>Campanha</th>  <th>Realizador</th> <th>Dia</th> </tr> </thead>';
    for (var i = 0; i < c.length; i++) {
        tabela += '<tr>' + '<td>' + i + '</td>' + '<td>' + c[i].nmCampanha + '</td>' + '<td>' + 'Ednaldo Pereira' + '</td>'
            + '<td>' + c[i].dtFim + '</td> </tr>';
    }
    $('#campanhasTable').innerHTML = tabela;
}