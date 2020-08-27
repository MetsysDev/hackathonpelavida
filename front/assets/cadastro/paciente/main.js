$(document).ready(function () {
     
    //função que recupera os dados do paciente
    $(document).on('blur', '#cns', function(ev) {
        let cns = $("#cns").value;

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
                //-----------------Definir campos de endereço no banco---------------------------
                $("#cep").val(res.cep);
                $("#logradouro").val(res.logradouro);
                $("#complemento").val(res.complemento);
                $("#numero").val(res.numero);
                $("#bairro").val(res.bairro);
                $("#cidade").val(res.localidade);
                $("#uf").val(res.uf);
                //---------------Campos no banco no acompanhamento, mudar para o paciente???-------------
                $("#dataInicioSintomas").val(res.inicioSintomas);
                $("#dataColetaExame").val(res.coletaExame);
                $("#dataObito").val(res.pac_data_obito);
                $("#primeiraAvaliacao").val(`${res.pac_descPrimeiraAvaliacao} ${res.pac_dataPrimeiraAvaliacao}`);
                $("#dataInicioIsolamento").val(res.pac_data_inicio_isolamento);

                //-----------tipo de convenio na tabela paciente???--------------
            },
            {
                'cns':cns
            }

        );  
    });

    //persiste um novo paciente
    $(document).on('click', '#btnSalvar', function (ev) {
        let dados = $('#cadastroPaciente').serializableArray();

        requestApi(
            'paciente/salvar',
            function (res) {
                console.log(res);
            },
            {
                dados
            }
        );
    }); 

});