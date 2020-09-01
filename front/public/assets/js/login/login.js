$(document).ready(function () {

    $(document).on('click', '#btnEntrar', function (ev) {
        ev.preventDefault();
        let dados = getDadosFormulario('formularioLogin');

        requestApi(
            'Usuario/login',
            function (res) {
                console.log(res);
            },
            dados
        );
    }); 
});