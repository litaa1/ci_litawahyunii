<?php 
    class Dealer extends CI_Controller{
        function index(){
            echo " Hai saya lita wahyuni";
        }
        function biodata ($nama,$kelas,$alamat) {
            $data = [
                'nm'    => $nama,
                'kls'   => $kelas,
                'alm'   => $alamat,
            ];
            $this->load->view('v_biodata', $data) ;
        }
        function tambah_data(){

            $this->load->view('form_v_tambahdata') ;
        }
        function action_tambahdata(){
            $data = [
                'nm'        => $this->input->post('namaa'),
                'kls'       => $this->input->post('kelass'),
                'alm'       => $this->input->post('alamatt'),
                'skl'       => $this->input->post('sekolahh'),
                'ttl'       => $this->input->post('tanggallahir'),
                'jk'        => $this->input->post('jeniskelamin'),
                'hobi'      => $this->input->post('hobii'),
                'status'    => $this->input->post('statuss'),
                'foto'      => $this->input->post('foto')
            ];
            $this->load->view('v_biodata', $data);
        }
      public function tampil_data(){
          $this->load->model('M_biodata');
          $data['biodata'] = $this->M_biodata->tampil_data()->result();
          $this->load->view('v_tampil_data_biodata', $data);
      }  


      function tambah_biodata(){

        $this->load->view('form_v_tambabiodata') ;
    }   

    function action_tambahbiodata(){
        $add = [
            'nama_depan'              => $this->input->post('nama_depan'),
            'nama_belakang'           => $this->input->post('nama_belakang'),
            'tempat_lahir'            => $this->input->post('tempat_lahir'),
            'tanggal_lahir'           => $this->input->post('tanggal_lahir'),
            'jenis_kelamin'           => $this->input->post('jenis_kelamin'),
            'alamat'                  => $this->input->post('alamat'),
            'jenjang_pendidikan'      => $this->input->post('jenjang_pendidikan'),
        ];
        $this->db->insert('tbl_pribadi', $add);
        redirect('../Dealer/tampil_data');

       // $this->load->view('v_profilebiodata', $add);
    }



    public function edit_biodata($id){
        $this->load->model('M_biodata');
        $data['biodata'] = $this->M_biodata->get_data_by_id($id)->row_array();
        $this ->load->view('v_edit_data_biodata',$data);
    }

    function action_editbiodata(){
        $id = $this->input->post('id');
        $update = [
            'nama_depan'              => $this->input->post('nama_depan'),
            'nama_belakang'           => $this->input->post('nama_belakang'),
            'tempat_lahir'            => $this->input->post('tempat_lahir'),
            'tanggal_lahir'           => $this->input->post('tanggal_lahir'),
            'jenis_kelamin'           => $this->input->post('jenis_kelamin'),
            'alamat'                  => $this->input->post('alamat'),
            'jenjang_pendidikan'      => $this->input->post('jenjang_pendidikan'),
        ];
        $update = $this->db->update('tbl_pribadi', $update, ['id' =>$id]);
        redirect('../Dealer/tampil_data');
    }

    public function hapus_biodata($id){
        $id = $id;
        $this->db->delete('tbl_pribadi', ['id' => $id]);
        redirect('../Dealer/tampil_data');
    }

    
}

?>