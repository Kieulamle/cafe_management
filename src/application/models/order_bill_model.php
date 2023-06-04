<?php
class order_bill_model extends CI_Model {
    public function get_list()
    {
        
            $query = $this->db->get('order_bill', 18);
            return $query->result_array();
    }

    public function add_order($data){
        $this->db->trans_begin();

        //get product
        $arrIdProduct = array();

        foreach($data['product'] as $val){
            array_push($arrIdProduct, $val['id']);
        }
        $listProduct = $this->db->select('ID, PRICE')->where_in('ID', $arrIdProduct)->get('product')->result_array();
        if(empty($listProduct)){
            $this->db->trans_rollback();
            return false;
        }
        // total_price
        $totalPrice = 0;
        foreach($listProduct as $item){
            $found_key = array_search($item['ID'], array_column($data['product'], 'id'));
            if($found_key !== -1){
                $totalPrice += ($item['PRICE'] * $data['product'][$found_key]['num']);
            }
            
        }
        //get customer id
        $idCustomer = '';
        $customer = $this->db->select('Phone')->where('Phone', $data['phone'])->get('customer')->result_array();
        if(empty($customer)){
            $this->db->insert('customer', array('Phone' => $data['phone'], 'address' => $data['address'], 'NAME' => $data['phone'], 'STATUS'=> 'active'));
            $insertCsm = $this->db->insert_id();
            
            $idCustomer = $insertCsm;
        }else{
            $idCustomer = $customer[0]['Phone'];
        }
        // insert order
        $this->db->insert('order_bill', array('Phone' => $data['phone'], 'diachi' => $data['address'],'STATUS'=> 'success', 'TOTAL_COST' => $totalPrice));
        $insertOrder = $this->db->insert_id();

        
        // insert order_details
        foreach($listProduct as $item){
            $found_key = array_search($item['ID'], array_column($data['product'], 'id'));
            if($found_key !== -1){
                $this->db->insert('order_details', array('O_ID' => $insertOrder, 'P_ID' => $item['ID'], 'QUANTITY' => $data['product'][$found_key]['num'], 'COST'=> $item['PRICE']));
            }
        }
        // sub quantity in product
        foreach($listProduct as $item){
            $found_key = array_search($item['ID'], array_column($data['product'], 'id'));
            if($found_key !== -1){
                
                $this->db->where('ID', $item['ID']);
                $this->db->set('QUANTITY', '`QUANTITY`-' . $data['product'][$found_key]['num'], FALSE);
                $this->db->update('product');
            }
        }

        if ($this->db->trans_status() === FALSE)
        {
                $this->db->trans_rollback();
                return false;
        }
        else
        {
                $this->db->trans_commit();
        }
        return $insertOrder;
    }



}