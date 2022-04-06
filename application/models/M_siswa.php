<?php
    class M_siswa extends CI_Model{
        function tampil_databaru(){
            return $this->db->get('tbl_siswa');
        }
    }
?>