<?php
class Datasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-datasiswa');
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggallahir' => $this->input->post('tanggallahir'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama')

        ];
        $this-> load->view('view-data-datasiswa',$data);
    }
}

?>