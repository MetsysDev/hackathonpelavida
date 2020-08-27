$(document).ready(function () {

    //persiste uma nova empresa
    $(document).on('click', '#btnSalvar', function (ev) {
        let dados = $('#cadastroEmpresa').serializableArray();

        requestApi(
            'empresa/salvar',
            function (res) {
                console.log(res);
            },
            {
                dados
            }
        );
    }); 
});