<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class TunjanganHariRaya extends CI_Controller {

    public function index() {
        $data['title'] = 'Hitung THR';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('perhitungan/inputthr');
            $this->load->view('templates/footer');
    }

    public function hitung() {
        $data['title'] = 'Laporan THR';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $gaji = $this->input->post('gaji');
        $pilihan_masakerja = $this->input->post('pilihan_masakerja');
        
        if ($pilihan_masakerja == '1') {
            $nilai_thr = 1/12;
        } elseif ($pilihan_masakerja == '2') {
            $nilai_thr = 2/12;
        } elseif ($pilihan_masakerja == '3') {
            $nilai_thr = 3/12;
        } elseif ($pilihan_masakerja == '4') {
            $nilai_thr = 4/12;
        } elseif ($pilihan_masakerja == '5') {
            $nilai_thr = 5/12;
        } elseif ($pilihan_masakerja == '6') {
            $nilai_thr = 6/12;
        } elseif ($pilihan_masakerja == '7') {
            $nilai_thr = 7/12;
        } elseif ($pilihan_masakerja == '8') {
            $nilai_thr = 8/12;
        } elseif ($pilihan_masakerja == '9') {
            $nilai_thr = 9/12;
        } elseif ($pilihan_masakerja == '10') {
            $nilai_thr = 10/12;
        } elseif ($pilihan_masakerja == '11') {
            $nilai_thr = 11/12;
        } elseif ($pilihan_masakerja == '12') {
            $nilai_thr = 12/12;
        } elseif ($pilihan_masakerja == '13') {
            $nilai_thr = 1;
        } else {
            $nilai_thr = 1;
        }

        $tunjangan_hari_raya = $gaji * $nilai_thr;
        
        $data = array(
            'user' => $data['user'] ,
            'title' => $data['title'],
            'nama' => $nama,
            'jabatan' => $jabatan,
            'gaji' => $gaji,
            'nilai_thr' => $nilai_thr,
            'tunjangan_hari_raya' => $tunjangan_hari_raya
        );
        
        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('perhitungan/laporanthr', $data);
            $this->load->view('templates/footer');
    }
}
