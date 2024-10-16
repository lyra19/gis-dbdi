<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Webgis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_irigasi');
    }

    public function index()
    {
        $data = array(
            'title' => "Web Gis Irigasi",
            'irigasi'   => $this->M_irigasi->tampil(),
            'isi' => "v_webgis",
        );
        $this->load->view('frontend/v_wrapper', $data, FALSE);
    }

    public function daerahirigasi()
    {
        $data = array(
            'title' => "Web Gis Irigasi",
            'irigasi'   => $this->M_irigasi->tampil(),
            'isi' => "v_daerahirigasi",
        );
        $this->load->view('frontend/v_wrapper', $data, FALSE);
    }
    
    public function about()
    {
        $data = array(
            'title' => "Web Gis Irigasi",
            'isi' => "v_about",
        );
        $this->load->view('frontend/v_wrapper', $data, FALSE);
    }

    public function detail($id_irigasi){
        $data = array(
            'title' => "Detail Data Irigasi",
            'irigasi' => $this->M_irigasi->detail($id_irigasi),
            'isi' => "v_detail",
        );
        $this->load->view('frontend/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
