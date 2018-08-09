<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_infaq_p extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function lihatdata($tahun,$bulan)
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran_spp_p');
        $this->db->join('tb_santriwati', 'tb_pembayaran_spp_p.nis_santri = tb_santriwati.nis_lokal');
        $this->db->where('tb_pembayaran_spp_p.spp_tahun', $tahun);
        $this->db->where('tb_pembayaran_spp_p.spp_bulan', $bulan);
        return $this->db->get();
    }

    function detailinfaq($nis)
    {
      $this->db->select('*');
      $this->db->from('tb_pembayaran_spp_p');
      $this->db->join('tb_santriwati', 'tb_pembayaran_spp_p.nis_santri = tb_santriwati.nis_lokal');
      $this->db->where('tb_pembayaran_spp_p.nis_santri', $nis);

      return $this->db->get();
    }

    function datasantri(){
      $this->db->select('nis_lokal, nama_lengkap');
      $this->db->from('tb_santriwati');
      return $this->db->get();
    }

    function lihatsantrisatu($nis)
    {
        $this->db->select('nama_lengkap');
        $this->db->from('tb_santriwati');
        $this->db->where("nis_lokal",$nis);
        $query = $this->db->get();
        $data = $query->row_array();
        $value = $data['nama_lengkap'];
        return $value;
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_pembayaran_spp_p',$array);
    }

    function santribayar($tahun,$bulan){
      $this->db->select('count(*) as total')
        ->from('tb_pembayaran_spp_p')
        ->where('tb_pembayaran_spp_p.spp_tahun', $tahun)
        ->where('tb_pembayaran_spp_p.spp_bulan', $bulan);
        return $this->db->get()
          ->row_array();
    }

    function totalbayar($tahun,$bulan){
      $this->db->select('sum(besar_bayar) as total')
        ->from('tb_pembayaran_spp_p')
        ->where('tb_pembayaran_spp_p.spp_tahun', $tahun)
        ->where('tb_pembayaran_spp_p.spp_bulan', $bulan);
        return $this->db->get()
          ->row_array();
    }
    //
    // function editdata($id_tahun,$array)
    // {
    //     $this->db->where("id_tahun",$id_tahun);
    //     return $this->db->update('tb_tahun_ajaran',$array);
    // }
    function hapus($id_infaq)
    {
        $this->db->where("id_pembayaran",$id_infaq);
        return $this->db->delete('tb_pembayaran_spp_p');
    }

    function cekdata($nis,$bulan,$tahun)
    {
        $this->db->where("nis_santri",$nis);
        $this->db->where("spp_bulan",$bulan);
        $this->db->where("spp_tahun",$tahun);
        return $this->db->get('tb_pembayaran_spp_p')->num_rows();
    }
}
