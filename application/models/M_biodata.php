<?php
    class M_biodata extends CI_Model{
        function tampil_data(){
            return $this->db->get('tbl_pribadi');
        }


        function get_data_by_id($id){
            $this->db->where('id', $id);
            return $this->db->get('tbl_pribadi');
        }
    
    }
?>