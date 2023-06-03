<?php
class Product_model extends CI_Model {
    public function get_list()
    {
            $query = $this->db->get('product', 18);
            return $query->result_array();
    }



}