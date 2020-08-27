$(document).ready(function () {

    //persiste uma nova unidade de saúde
    $(document).on('click', '#btnSalvar', function (ev) {
        let dados = $('#cadastroUnidadeSaude').serializableArray();

        requestApi(
            'unidadeSaude/salvar',
            function (res) {
                console.log(res);
            },
            {
                dados
            }
        );
    }); 
});