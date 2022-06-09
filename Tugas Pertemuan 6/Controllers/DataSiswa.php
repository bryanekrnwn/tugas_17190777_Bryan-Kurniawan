<?php
class DataSiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-input-data-siswa');
    }

    public function print()
    {
        $data = [
            'nama' => $this->input->POST('nama'),
            'nis' => $this->input->POST('nis'),
            'kelas' => $this->input->POST('kelas'),
            'tgl' => $this->input->POST('tgl'),
            'tempat' => $this->input->POST('tempat'),
            'alamat' => $this->input->POST('alamat'),
            'jk' => $this->input->POST('jk'),
            'agama' => $this->input->POST('agama')
        ];
        $this->load->view('view-tampil-data-siswa', $data);
    }
}