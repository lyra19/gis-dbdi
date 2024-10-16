<?php


class Irigasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_irigasi');
    }
    
    public function index()
    {
        $data = array(
            'title' => "Data Irigasi",
            'irigasi' => $this->M_irigasi->tampil(),
            'isi' => "v_datairigasi",
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);        
    }

    public function input()
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('nama_irigasi', 'Nama Irigasi', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('desa', 'Desa', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('kec', 'Kecamatan', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('baku', 'Baku', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('status_irigasi', 'Status Irigasi', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('lat', 'Latitude', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('lng', 'Longitude', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './foto/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('foto'))
                {
                    $data = array(
                        'title' => "Input Data Irigasi",
                        'error_upload' => $this->upload->display_errors(),
                        'isi' => "v_input_datairigasi",
                    );
                    $this->load->view('layout/v_wrapper', $data, FALSE);
                } else {
                    $upload_data = array('uploads'=> $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './foto/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        'nama_irigasi'       => $this->input->post('nama_irigasi'),
                        'desa'               => $this->input->post('desa'),
                        'kec'                => $this->input->post('kec'),
                        'baku'               => $this->input->post('baku'),
                        'fungsional'         => $this->input->post('fungsional'),
                        'potensial'          => $this->input->post('potensial'),
                        'primer'             => $this->input->post('primer'),
                        'sekunder'           => $this->input->post('sekunder'),
                        'total'              => $this->input->post('total'),
                        'status_irigasi'     => $this->input->post('status_irigasi'),
                        'lat'                => $this->input->post('lat'),
                        'lng'                => $this->input->post('lng'),
                        'foto'               => $upload_data['uploads']['file_name'],
                    );
                    $this->M_irigasi->simpan($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan!!!');
                    redirect('irigasi/input');
                }
            } 
        
        $data = array(
            'title' => "Input Data Irigasi",
            'isi' => "v_input_datairigasi",
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_irigasi)
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('nama_irigasi', 'Nama Irigasi', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('desa', 'Desa', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('kec', 'Kecamatan', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('baku', 'Baku', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('status_irigasi', 'Status Irigasi', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('lat', 'Latitude', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));
        $this->form_validation->set_rules('lng', 'Longitude', 'required', array(
            'required'  => '%s Harus Di isi.'
        ));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './foto/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('foto'))
                {
                    $data = array(
                        'title' => "Edit Data Irigasi",
                        'error_upload' => $this->upload->display_errors(),
                        'irigasi' => $this->M_irigasi->detail($id_irigasi),
                        'isi' => "v_edit_datairigasi",
                    );
                    $this->load->view('layout/v_wrapper', $data, FALSE);
                } else {
                    // Edit dengan ubah foto
                    $upload_data = array('uploads'=> $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './foto/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        'id_irigasi'         => $id_irigasi,
                        'nama_irigasi'       => $this->input->post('nama_irigasi'),
                        'desa'               => $this->input->post('desa'),
                        'kec'                => $this->input->post('kec'),
                        'baku'               => $this->input->post('baku'),
                        'fungsional'         => $this->input->post('fungsional'),
                        'potensial'          => $this->input->post('potensial'),
                        'primer'             => $this->input->post('primer'),
                        'sekunder'           => $this->input->post('sekunder'),
                        'total'              => $this->input->post('total'),
                        'status_irigasi'     => $this->input->post('status_irigasi'),
                        'lat'                => $this->input->post('lat'),
                        'lng'                => $this->input->post('lng'),
                        'foto'               => $upload_data['uploads']['file_name'],
                    );
                    $this->M_irigasi->edit($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!!');
                    redirect('irigasi');
                }
                // Edit tanpa ubah foto
                    $data = array(
                        'id_irigasi'         => $id_irigasi,
                        'nama_irigasi'       => $this->input->post('nama_irigasi'),
                        'desa'               => $this->input->post('desa'),
                        'kec'                => $this->input->post('kec'),
                        'baku'               => $this->input->post('baku'),
                        'fungsional'         => $this->input->post('fungsional'),
                        'potensial'          => $this->input->post('potensial'),
                        'primer'             => $this->input->post('primer'),
                        'sekunder'           => $this->input->post('sekunder'),
                        'total'              => $this->input->post('total'),
                        'status_irigasi'     => $this->input->post('status_irigasi'),
                        'lat'                => $this->input->post('lat'),
                        'lng'                => $this->input->post('lng'),
                    );
                    $this->M_irigasi->edit($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!!');
                    redirect('irigasi');
            } 
        
        $data = array(
            'title' => "Edit Data Irigasi",
            'irigasi' => $this->M_irigasi->detail($id_irigasi),
            'isi' => "v_edit_datairigasi",
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }          

    public function hapus($id_irigasi)
    {
        $this->user_login->cek_login();

        $data = array('id_irigasi'=>$id_irigasi);
        $this->M_irigasi->hapus($data);
        $this->session->set_flashdata('pesan','Data berhasil di Hapus.');
        redirect('irigasi');
    }

}

/* End of file Controllername.php */
