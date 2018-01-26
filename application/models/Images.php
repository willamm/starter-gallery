<?php

class Images extends CI_Model {

    /**
     * Constructor for Images class.
     */
    function __contruct() 
    {
        parent::__construct();
    }

    /**
     * Queries the database for images and returns the result
     * as an array. The images are sorted by ID in descending order.
     */
    function all() 
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }

    /**
     * Queries the database for the newest images.
     */
    function newest()
    {
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }
}