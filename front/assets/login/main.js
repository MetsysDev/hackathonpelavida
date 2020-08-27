$(document).ready(function () {

    $(document).on('click', '#btnSalvar', function (ev) {
        let dados = $('#formularioLogin').serializableArray();

        requestApi(
            'login/logar',
            function (res) {
                console.log(res);
            },
            {
                dados
            }
        );
    }); 
});