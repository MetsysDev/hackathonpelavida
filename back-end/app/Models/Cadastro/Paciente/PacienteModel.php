<?php namespace App\Models;

use CodeIgniter\Model;
use DateTime;

class PacienteModel extends MY_Model {

    public function cadastrar($dados)
    {
        if( !validarId($dados, "pac_id_comorbidade") ||
            !validarId($dados, "pac_id_empresa") ||
            !validarId($dados, "pac_id_familia") ||
            !existeValor($dados, "pac_nome") || 
            !existeValor($dados, "pac_telefone") || 
            !existeValor($dados, "pac_cns") || 
            !existeValor($dados, "pac_data_nascimento") || 
            !existeValor($dados, "pac_data_inicio_isolamento") || 
            !existeValor($dados, "pac_descricao_avaliacao") || 
            !existeValor($dados, "pac_data_registro") ||
            !existeValor($dados, "pac_monitoramento_finalizado") ||
            !existeValor($dados, "pac_cpf") 
        ) {
            send(400, null, "Os dados enviados são invalidos.");
        }

        $dados['pac_data_nascimento'] = date('Y-m-d H:i:s', strtotime( str_replace('/', '-', $dados['pac_data_nascimento']))); 
        $dados['pac_data_inicio_isolamento'] = date('Y-m-d H:i:s', strtotime( str_replace('/', '-', $dados['pac_data_inicio_isolamento']))); 
        $dados['pac_data_registro'] = date('Y-m-d H:i:s');
        $build = $this->db->table('metsys.paciente');
        $build->insert($dados);
        send(200, array("id"=> $this->db->insertID()));
    }

}



