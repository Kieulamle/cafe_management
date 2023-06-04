<?php
class order_bill_model extends CI_Model {
    public function get_list()
    {
            $query = $this->db->get('order_bill', 18);
            return $query->result_array();
    }



}