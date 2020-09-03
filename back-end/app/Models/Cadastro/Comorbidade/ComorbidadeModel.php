<?php namespace App\Models;

class ComorbidadeModel extends MY_Model {

    public function cadastrar($dados)
    {
        if (isset($dados['com_descricao']) && strlen($dados['com_descricao'] > 0) ) {
            send(400, null, 'Sem descrição da comorbidade');
        }
        $build = $this->db->table('metsys.comorbidade');
        $build->insert($dados);
        send(200, array("id"=> $this->db->insertID()));
    }

    public function listar($dados)
    {
        $build = $this->db->table('metsys.comorbidade');
        print_r($dados['id']);
        if( isset($dados['id']) && $dados['id'] && $dados['id'] > 0 ) {
            $build->where("com_id", $dados['id']);
        }
        $comorbidades = $build->get()->getResultArray();
        send(200, $comorbidades);
    }

    public function FunctionName($params)
    {
        # code...
    }

}