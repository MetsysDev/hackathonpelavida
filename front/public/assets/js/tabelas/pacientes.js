var $table = $('#table');
    var mydata = 
[
    {
        "pac_cns": 0,
        "pac_nome": "test0",
        "pac_telefone": "$0"
    },
    {
        "pac_cns": 1,
        "pac_nome": "test1",
        "pac_telefone": "$1"
    },
    {
        "pac_cns": 2,
        "pac_nome": "test2",
        "pac_telefone": "$2"
    },
    {
        "pac_cns": 3,
        "pac_nome": "test3",
        "pac_telefone": "$3"
    },
    {
        "pac_cns": 4,
        "pac_nome": "test4",
        "pac_telefone": "$4"
    },
    {
        "pac_cns": 5,
        "pac_nome": "test5",
        "pac_telefone": "$5"
    },
    {
        "pac_cns": 6,
        "pac_nome": "test6",
        "pac_telefone": "$6"
    },
    {
        "pac_cns": 7,
        "pac_nome": "test7",
        "pac_telefone": "$7"
    },
    {
        "pac_cns": 8,
        "pac_nome": "test8",
        "pac_telefone": "$8"
    },
    {
        "pac_cns": 9,
        "pac_nome": "test9",
        "pac_telefone": "$9"
    },
    {
        "pac_cns": 10,
        "pac_nome": "test10",
        "pac_telefone": "$10"
    },
    {
        "pac_cns": 11,
        "pac_nome": "test11",
        "pac_telefone": "$11"
    },
    {
        "pac_cns": 12,
        "pac_nome": "test12",
        "pac_telefone": "$12"
    },
    {
        "pac_cns": 13,
        "pac_nome": "test13",
        "pac_telefone": "$13"
    },
    {
        "pac_cns": 14,
        "pac_nome": "test14",
        "pac_telefone": "$14"
    },
    {
        "pac_cns": 15,
        "pac_nome": "test15",
        "pac_telefone": "$15"
    },
    {
        "pac_cns": 16,
        "pac_nome": "test16",
        "pac_telefone": "$16"
    },
    {
        "pac_cns": 17,
        "pac_nome": "test17",
        "pac_telefone": "$17"
    },
    {
        "pac_cns": 18,
        "pac_nome": "test18",
        "pac_telefone": "$18"
    },
    {
        "pac_cns": 19,
        "pac_nome": "test19",
        "pac_telefone": "$19"
    },
    {
        "pac_cns": 20,
        "pac_nome": "test20",
        "pac_telefone": "$20"
    }
];

$(function () {
    $('#table').bootstrapTable({
        columns: [{
            field: 'pac_cns',
            title: 'CNS'
            }, {
            field: 'pac_nome',
            title: 'Nome'
            }, {
            field: 'pac_telefone',
            title: 'Telefone'
            }],
            data: mydata
    });
});

/*
$(function () {
    requestApi(
        'empresa/salvar',
        function (res) {         

            $('#table').bootstrapTable({
    
                columns: [{
                    field: 'pac_cns',
                    title: 'Item pac_cns'
                    }, {
                    field: 'pac_nome',
                    title: 'Item pac_nome'
                    }, {
                    field: 'pac_telefone',
                    title: 'Item pac_telefone'
                    }],
                    data: res
            });
        }
    );
     
});
*/