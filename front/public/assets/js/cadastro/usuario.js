$(document).ready(function () {
    
    //retorna para a view todas as unidades de saude
    requestApi(
        //-------------------------Verificar o nome no back-----------------
        'unidadeSaude/buscar',
        //instância a resposta
        function (res) {
            //se a resposta for vazia encerra a operação
            if (!res) {
                return;
            }
            
            //para cada dado retornado na resposta inclui uma unidade
            res.forEach(local => {
                let selectOption = `
                    <option value='${local.uni_sau_id}'> ${local.uni_sau_nome} </option>
                `;

                $('#unidadeReferencia').append(selectOption);
            });
        }
    );
    
    //se ja existir este usuario, recupera os dados e mostra na view
    $(document).on('blur', '#cpf', function(ev) {
        let cpf = $("#cpf").value;

        requestApi(
            //----------------------Verificar o nome no back------------------
            'usuario/buscar',
            //instância a resposta
            function (res) {
                //se a resposta for vazia encerra a operação
                if (!res) {
                    return;
                }
                //retorna o paciente que sera iniciado o acompanhamento
                $("#cpf").val(res.usu_cpf);
                $("#nome").val(res.usu_nome);
                $("#unidadeReferencia").val(res.usu_id_unidade_saude);
                $("#cargo").val(res.usu_cargo);
                $("#usuario").val(res.usu_login);
                if($res.perfil == "municipal") {
                    $("#municipal").checked;
                } else {
                    $("#monitoramento").checked;
                }
            },
            {
                'cpf': cpf
            }
        );  
    });

    //persiste um novo usuario
    $(document).on('click', '#btnSalvar', function (ev) {
        let dados = $('#cadastroUsuario').serializableArray();

        requestApi(
            'usuario/salvar',
            function (res) {
                console.log(res);
            },
            {
                dados
            }
        );
    }); 

});