<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nama = 'Sirojul Munir, S.Si, M.Kom';
        $this->dsn1->nidn = '0414047101';
        $this->dsn1->gender = 'Laki-laki';
        $this->dsn1->tmp_lahir = 'Purwakarta';
        $this->dsn1->tgl_lahir = '10-02-1973';
        $this->dsn1->pendidikan = 'S2 Teknik Informatika';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nama = 'Ahmad Rio Adriansyah, S.Si. M.Si.';
        $this->dsn2->nidn = '0413128601';
        $this->dsn2->gender = 'Laki-laki';
        $this->dsn2->tmp_lahir = 'Bandung';
        $this->dsn2->tgl_lahir = '12-02-1987';
        $this->dsn2->pendidikan = 'S2 Sains Komputasi';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 2;
        $this->dsn3->nama = 'TIFANI NABARIAN, S.Kom, M.T.i';
        $this->dsn3->nidn = '420089004';
        $this->dsn3->gender = 'Laki-laki';
        $this->dsn3->tmp_lahir = 'Subang';
        $this->dsn3->tgl_lahir = '12-02-1990';
        $this->dsn3->pendidikan = 'S2 Teknik Informatika';

        $all_dosen = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['all_dosen'] = $all_dosen;
        $this->load->view('dosen/index', $data);
    }
}
