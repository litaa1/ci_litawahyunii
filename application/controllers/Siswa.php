
<?php
    class Siswa extends CI_Controller{
        function index(){
            echo " Hai saya lita wahyuni";
        }
    public function tampil_databaru(){
            $this->load->model('M_siswa');
            $data['siswa'] = $this->M_siswa->tampil_databaru()->result();
            $this->load->view('v_tampil_siswa', $data);
        }
    }
?>