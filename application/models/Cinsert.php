<?php

class Cinsert extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insert($data2)
    {

        $this->db->insert('customer', $data2);

    }

}

?>