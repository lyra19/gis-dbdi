<?php

class User_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_login');
        ;
    }

    public function login($username, $password)
    {
        $cek = $this->ci->m_login->login($username, $password);
        if ($cek) {
            $nama_user = $cek->nama_user;
            $username = $cek->username;

            //buat session
            $this->ci->session->set_userdata('nama_user', $nama_user);
            $this->ci->session->set_userdata('username', $username);

            //redirect ke halaman home
            redirect('home');
        }else {
            //jika salah password
            $this->ci->session->set_flashdata('pesan', 'Username or Password is wrong!');
            redirect('login');
            // echo "Username or Password is wrong!";
        }

    }

    public function cek_login()
    {
        if ($this->ci->session->userdata('username')=="") {
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login, Silahkan Login Terlebih Dahulu!');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('nama_user');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->set_flashdata('pesan', 'Have a nice day!');
        ;
        redirect('login');
    }
    

}

/* End of file LibraryName.php */
