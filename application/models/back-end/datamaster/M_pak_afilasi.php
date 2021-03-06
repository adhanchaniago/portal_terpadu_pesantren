<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class M_pak_afilasi extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function lihatdata()
    {
        $this->db->order_by("pak","asc");
        return $this->db->get('tb_pak_afilasi');
    }

    function lihatdatasatu($kode)
    {
        $this->db->where("id",$kode);
        return $this->db->get('tb_pak_afilasi');
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_pak_afilasi',$array);
    }

    function editdata($kode,$array)
    {
        $this->db->where("id",$kode);
        return $this->db->update('tb_pak_afilasi',$array);
    }
    function hapus($kode)
    {
        $this->db->where("id",$kode);
        return $this->db->delete('tb_pak_afilasi');
    }
}