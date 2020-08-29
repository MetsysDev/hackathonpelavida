<?php namespace App\Models;

use CodeIgniter\Model;

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

}