<?php
class User_model extends CI_Model {

public $title;
public $content;
public $date;

public function get_list()
{
        $query = $this->db->get('user', 10);
        return $query->result();
}

public function insert_entry()
{
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
}

public function update_entry()
{
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
}

}