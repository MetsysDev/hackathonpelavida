$(document).ready(function () {

    $(document).on('click', '#btnEntrar', function (ev) {
        ev.preventDefault();
        let dados = getDadosFormulario('formularioLogin');
        $('.input-error').removeClass('input-error');

        requestApi(
            'http://localhost/hackathonpelavida/front/public/Login/logar',
            function (res) {
                redirect('Usuario');
            },
            dados,
            function (rej) {
                $('.custom-input').addClass('input-error');
            }
        );
    }); 
});