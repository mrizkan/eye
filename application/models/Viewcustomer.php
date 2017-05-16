<?php

class Viewcustomer extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function view()
    {

        $query = $this->db->query("select rnum, cname, address, mobile from customer");
        return $query;
    }

}

?>