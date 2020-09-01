$(document).ready(function () {

    //persiste uma nova unidade de saúde
    $(document).on('click', '#btnSalvar', function (ev) {
        let dados = $('#cadastroUnidadeSaude').serializableArray();

        requestApi(
            'UnidadeSaude/cadastrar',
            function (res) {
                console.log(res);
            },
            {
                dados
            }
        );
    }); 
});