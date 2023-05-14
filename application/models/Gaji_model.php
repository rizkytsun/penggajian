<?php

class Urusan_model extends CI_Model {
    public function daftar(){
        $query = $this->db->query('SELECT * FROM urusan WHERE is_aktif=1 ');
        return $query->result();
    }
}