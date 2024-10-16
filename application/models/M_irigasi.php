<?php

class M_irigasi extends CI_Model {

    public function simpan($data){
        $this->db->insert('db_irigasi', $data);
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('db_irigasi');
        $this->db->order_by('id_irigasi', 'desc');
        return $this->db->get()->result();
    }

    public function detail($id_irigasi)
    {
        $this->db->select('*');
        $this->db->from('db_irigasi');
        $this->db->where('id_irigasi', $id_irigasi);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_irigasi', $data['id_irigasi']);
        $this->db->update('db_irigasi', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_irigasi', $data['id_irigasi']);
        $this->db->delete('db_irigasi', $data);
    }
}

/* End of file ModelName.php */
