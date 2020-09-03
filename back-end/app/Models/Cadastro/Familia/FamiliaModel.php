<?php namespace App\Models;

class FamiliaModel extends MY_Model {

    public function cadastrar()
    {
        $db = $this->db->table('metsys.familia');
        $db->insert(['teste' => 'ola']);
        return $this->db->insertID();
    }

}