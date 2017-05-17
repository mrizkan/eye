<?php

class Viewcustomer extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function view()
    {

        $query = $this->db->query("select cid, rnum, cname, address, mobile from customer");
        return $query;
    }

    function fetch_cdata($id)
    {
        $query = $this->db->query("select * from customer where cid = $id");
        return $query;
    }

}

?>