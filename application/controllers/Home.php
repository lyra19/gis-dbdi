<?php

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_irigasi');
    }

    public function index()
    {
        $this->user_login->cek_login();

        $data = array(
            'title' => "Pemetaan",
            'irigasi'   => $this->M_irigasi->tampil(),
            'isi' => "v_pemetaan",
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
