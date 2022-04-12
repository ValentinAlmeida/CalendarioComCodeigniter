<?php

class Equipe_model extends CI_Model{
    public function buscaTodos(){
        //faz o select + de equipe e guarda na result_array()
        return $this->db->get("equipe")->result_array();
    }

    public function buscaId($id_equipe){

        $this->db->where("id_equipe", $id_equipe);

        return $this->db->get("despacho_equipe")->result_array();;

    }
}
