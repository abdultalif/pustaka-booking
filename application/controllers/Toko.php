<?php
class Toko extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('model_toko');
    }

    public function index() {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Harus di isi'
        ]);
        $this->form_validation->set_rules('no', 'Nomor', 'required|trim|integer', [
            'required' => 'Harus di isi',
            'integer' => 'Harus Angka'
        ]);
        if ( $this->form_validation->run() == false) {
            $data['title'] = 'Form Input Transaksi Sepatu';
            $data['merk'] = ['Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'];
            $this->load->view('form-input-toko', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama', TRUE),
                'nomor' => $this->input->post('no', TRUE),
                'merk' => $this->input->post('merk', TRUE),
                'ukuran' => $this->input->post('ukuran', TRUE),
                'harga' => $this->model_toko->toko($this->input->post('merk'))
            ];
            $data['title'] = 'Form Output Transaksi Sepatu';
            
            $this->load->view('form-output-toko', $data);
            
        }
    }
}