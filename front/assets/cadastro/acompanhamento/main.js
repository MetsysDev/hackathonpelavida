$(document).ready(function () {
    //função para requisições a API
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
                //verifico se a unidade é de atentimento apenas de paciente sintomaticos
                if(local.uni_sau_tipo == "sintomatica" || local.uni_sau_tipo=="mista") {
                    let selectOption = `
                    <option value='${local.uni_sau_id}'> ${local.uni_sau_nome} </option>
                    `;

                    $('#unidadeSintomatica').append(selectOption);
                }                
            });
            
            //para cada dado retornado na resposta inclui uma unidade
            res.forEach(local => {
                let selectOption = `
                    <option value='${local.uni_sau_id}'> ${local.uni_sau_nome} </option>
                `;

                $('#unidadeReferencia').append(selectOption);
            });
        }
    );

    requestApi(
        //------------------------Verificar o nome no back-------------------------
        'comorbidades/buscar',
        //instância a resposta
        function (res) {
            //se a resposta for vazia encerra a operação
            if (!res) {
                return;
            }
            //para cada dado retornado na resposta inclui uma comorbidade
            res.forEach(comorbidade => {
                let selectOption = `
                    <option value='${comorbidade.com_id}'> ${comorbidade.com_descricao} </option>
                `;

                $('#comorbidades').append(selectOption);
            });
            
        }
    );

    requestApi(
        //--------------------Verificar o nome no back-------------------------
        'sinais/buscar',
        //instância a resposta
        function (res) {
            //se a resposta for vazia encerra a operação
            if (!res) {
                return;
            }
            //para cada dado retornado na resposta inclui um sinal
            res.forEach(sinais => {
                let selectOption = `
                    <option value='${sinais.sin_id}'> ${sinais.sin_descricao} </option>
                `;

                $('#sinais').append(selectOption);
            });
            
        }
    );

    $(document).on('blur', '#cns', function(ev) {

        requestApi(
            //----------------------Verificar o nome no back------------------
            'paciente/buscar',
            //instância a resposta
            function (res) {
                //se a resposta for vazia encerra a operação
                if (!res) {
                    return;
                }
                //retorna o paciente que sera iniciado o acompanhamento
                $("#nome").val(res.pac_nome);
                $("#dataNasc").val(res.pac_dtNasc);
                $("#cns").val(res.pac_cns);
                $("#telefone").val(res.pac_telefone);
                $("#logradouro").val(res.logradouro);
                $("#complemento").val(res.complemento);
                $("#numero").val(res.numero);
                $("#bairro").val(res.bairro);
                $("#cidade").val(res.localidade);
                $("#uf").val(res.uf);
                $("#primeiraAvaliacao").val(`${res.pac_descPrimeiraAvaliacao} ${res.pac_dataPrimeiraAvaliacao}`);
               //-----------------------regra do inicio do cadastro + 14 dias de monitoramento???--------------------------------
                $("#dataIsolamento").val(res.pac_data_inicio_isolamento + 14);

                //-----------tipo de convenio na tabela paciente???--------------
            }
        );  
    });
    
    //Função que envia os dados ao back-end
    $(document).on('click', '#btnSalvar', function (ev) {
        //cria um array com os dados do form
        let dados = $('#formularioAcompanhamento').serializableArray();

        requestApi(
            //url
            'acompanhamento/salvar',
            //callback
            function (res) {
                console.log(res);
            },
            //parametros
            {
                dados
            }
        );
    });    
});