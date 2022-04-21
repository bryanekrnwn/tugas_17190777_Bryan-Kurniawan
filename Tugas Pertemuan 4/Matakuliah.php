<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            ['required' => 'Kode Matakuliah Harus Diisi', 'min_length' => 'Kode Terlalu Pendek']
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            ['required' => 'Nama Matakuliah Harus Diisi', 'min_length' => 'Nama Terlalu Pendek']
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->POST('kode'),
                'nama' => $this->input->POST('nama'),
                'sks' => $this->input->POST('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}