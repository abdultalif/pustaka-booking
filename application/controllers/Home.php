<?php
class Home extends CI_Controller
{
        public function index()
        {
                $data = [
                        'judul' => "Katalog Buku",
                        'buku' => $this->ModelBuku->getBuku()->result(),
                ];
                if ($this->session->userdata('email')) {
                        $user = $this->ModelUser->cekData(['id' => $this->session->userdata('id_user')])->row_array();
                        $data['user'] = $user['nama'];
                        $this->load->view('templates/templates-user/header', $data);
                        $this->load->view('buku/daftarbuku', $data);
                        $this->load->view('templates/templates-user/modal');
                        $this->load->view('templates/templates-user/footer', $data);
                } else {
                        $data['user'] = 'Pengunjung';
                        $this->load->view('templates/templates-user/header', $data);
                        $this->load->view('buku/daftarbuku', $data);
                        $this->load->view('templates/templates-user/modal');
                        $this->load->view('templates/templates-user/footer', $data);
                }
        }

        public function detailBuku()
        {
                $id = $this->uri->segment('3');
                $data['buku'] = $this->ModelBuku->joinKategoriBuku(['id_buku' => $id])->result();
                $data['user'] = "Pengunjung";
                $data['judul'] = "Detail Buku";

                $this->load->view('templates/templates-user/header', $data);
                $this->load->view('buku/detail-buku', $data);
                $this->load->view('templates/templates-user/modal');
                $this->load->view('templates/templates-user/footer');
        }
}
