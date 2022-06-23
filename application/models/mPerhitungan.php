<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPerhitungan extends CI_Model
{
    public function balita()
    {
        $this->db->select('*');
        $this->db->from('balita');
        return $this->db->get()->result();
    }
}

/* End of file mPerhitungan.php */
