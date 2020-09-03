<?php namespace App\Models;

class PacienteModel extends MY_Model {

    public function cadastrar($dados)
    {
        if( !validarId($dados, 'pac_id_comorbidade') ||
            !validarId($dados, 'pac_id_empresa') ||
            !existeValor($dados, 'pac_nome') || 
            !existeValor($dados, 'pac_telefone') || 
            !existeValor($dados, 'pac_cns') || 
            !existeValor($dados, 'pac_data_nascimento') || 
            !existeValor($dados, 'pac_data_inicio_isolamento') || 
            !existeValor($dados, 'pac_descricao_avaliacao') || 
            !existeValor($dados, 'pac_cpf') 
        ) {
            send(400, null, 'Os dados enviados são invalidos.');
        }

        // $familiaModel = model('Cadastro\Familia\FamiliaModel', false);
        // $idFamilia = $familiaModel->cadastrar();

        // if (!validarId($idFamilia)) {
        //     send(400, null, 'Id familia invalido');
        // }

        $prefix = 114; //e o range maximo de caracteres pode ter até 114 caracteres.
        $dados['pac_id_familia'] = md5(uniqid($prefix, true)); // Aqui e gerado um id unico para a familia

        $dados['pac_data_nascimento'] = date('Y-m-d H:i:s', strtotime( str_replace('/', '-', $dados['pac_data_nascimento']))); 
        $dados['pac_data_inicio_isolamento'] = date('Y-m-d H:i:s', strtotime( str_replace('/', '-', $dados['pac_data_inicio_isolamento']))); 
        $dados['pac_data_registro'] = date('Y-m-d H:i:s');
        $db = $this->db->table('metsys.paciente');
        $db->insert($dados);
        send(200, array('id'=> $this->db->insertID()));
    }

    public function informacao($params, $returnResult = false)
    {
        $db = $this->db->table('metsys.paciente');
        $db->select('
            pac_id, pac_id_comorbidade, pac_id_empresa, 
            pac_id_familia, pac_nome, pac_endereco, 
            pac_telefone, pac_cns, pac_data_nascimento, 
            pac_data_inicio_isolamento, pac_data_primeira_avaliacao, 
            pac_descricao_avaliacao, pac_data_obito, pac_deletado, 
            pac_data_registro, pac_monitoramento_finalizado, pac_cpf,
            IF(pac_data_obito, COUNT(pac_data_obito), 0) AS total_obito,
            COUNT(pac_monitoramento_finalizado) AS pac_monitoramento_finalizado,
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, pac_data_nascimento, CURDATE()) < 30 AS faixa_etaria_menor_risco,
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, pac_data_nascimento, CURDATE()) >= 30 AND < 60 AS faixa_etaria_medio_risco,
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, pac_data_nascimento, CURDATE()) >= 60 AS faixa_etaria_alto_risco
        ');
        if (validarId($params, 'pac_id')) {
            $db->where('pac_id', $params['pac_id']);
        }
        $db->where('pac_deletado', 0);
        $result = $db->get()->getResultArray();

        if (count($result)) {
            if ($returnResult) {
                return $result;
            }
            send(200, $result);
        }
        
        if ($returnResult) {
            return [];
        }
        send(204);
    }

}



