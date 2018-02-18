<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_akunsantri extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    
    function get_count_biodata() {
      $query = $this->db->query('SELECT * FROM tb_biodata_pendaftar');
      return $query->num_rows();

    }

    function get_last_biodata(){
      $query = $this->db->query('select right(id_biodata,4) as id from tb_biodata_pendaftar order by id_biodata desc limit 1');
      $data  = $query->row_array();
      $value = $data['id'];
      return $value;
    }

    function tambahakun($array){
      return $this->db->insert('tb_akun_pendaftar',$array);
    }

    function cekdata($email)
    {
        $this->db->where("email_pendaftar",$email);
        return $this->db->get('tb_akun_pendaftar')->num_rows();
    }

    function get_tahun_ajaran(){
      $query =$this->db->query('select tahun_ajaran from tb_pengaturan_pendaftaran');
      $data  = $query->row_array();
      $value = $data['tahun_ajaran'];
      return $value;
    }

    function get_pengaturan(){
      $query =$this->db->query('select pendaftaran_aktif from tb_pengaturan_pendaftaran');
      $data  = $query->row_array();
      $value = $data['pendaftaran_aktif'];
      return $value;
    }

    function tambahbio($array_bio){
      $this->db->insert('tb_biodata_pendaftar',$array_bio);
    }

    function tambahbayar($array_bayar){
      $this->db->insert('tb_bayar_pendaftar',$array_bayar);
    }

    // gawian nikman nasir
    function ambilprovinsi(){
      $this->db->order_by("nama_provinsi","ASC");
      return $this->db->get('tb_provinsi');
    }

    function cariprovinsi($provinsi){
      $this->db->where('nama_provinsi', $provinsi);
      $this->db->order_by("nama_provinsi","ASC");
      $exec =  $this->db->get('tb_provinsi')->row_array();
      $idprovinsi = $exec['id_provinsi'];
      return $idprovinsi;
    }

    function carikabupaten($kabupaten){
      $this->db->where('nama_kota_kab', $kabupaten);
      $this->db->order_by("nama_kota_kab","ASC");
      $exec =  $this->db->get('tb_kota_kab')->row_array();
      $idkabupaten = $exec['id_kota_kab'];
      return $idkabupaten;
    }


    function carikecamatan($kecamatan){
      $this->db->where('nama_kecamatan', $kecamatan);
      $this->db->order_by("nama_kecamatan","ASC");
      $exec =  $this->db->get('tb_kecamatan')->row_array();
      $idkecamatan = $exec['id_kecamatan'];
      return $idkecamatan;
    }

    function ambilkabupaten($provinsi){
      $idprovinsi = $this->cariprovinsi($provinsi);
      $this->db->where('id_provinsi', $idprovinsi);
      $this->db->order_by("nama_kota_kab","ASC");
      return $this->db->get('tb_kota_kab');
    }

    function ambilkecamatan($kabupaten){
      $idkabupaten = $this->carikabupaten($kabupaten);
      $this->db->where('id_kota_kab', $idkabupaten);
      $this->db->order_by("nama_kecamatan","ASC");
      return $this->db->get('tb_kecamatan');
    }

    function ambildesa($kecamatan){
      $idkecamatan = $this->carikecamatan($kecamatan);
      $this->db->where('id_kecamatan', $idkecamatan);
      $this->db->order_by("nama_kel_desa","ASC");
      return $this->db->get('tb_kel_desa');
    }

    function lihatbiodata($email)
    {
        $this->db->where("email_pendaftar",$email);
        return $this->db->get('tb_biodata_pendaftar');
    }

    function datakotaajax($provinsi)
    {
      $idprovinsi = $this->cariprovinsi($provinsi);
      $this->db->where('id_provinsi', $idprovinsi);
      $this->db->order_by("nama_kota_kab","ASC");
      $hasil = $this->db->get('tb_kota_kab');
  		return $hasil->result();
    }

    function datakecamatanajax($kabupaten)
    {
      $idkabupaten = $this->carikabupaten($kabupaten);
      $this->db->where('id_kota_kab', $idkabupaten);
      $this->db->order_by("nama_kecamatan","ASC");
      $hasil = $this->db->get('tb_kecamatan');
  		return $hasil->result();
    }

    function datadesaajax($kecamatan)
    {
      $idkecamatan = $this->carikecamatan($kecamatan);
      $this->db->where('id_kecamatan', $idkecamatan);
      $this->db->order_by("nama_kel_desa","ASC");
      $hasil = $this->db->get('tb_kel_desa');
  		return $hasil->result();
    }

    function ambiltransportasi(){
      $this->db->order_by("nama_alat_transportasi","ASC");
      return $this->db->get('tb_alat_transportasi');
    }

    function ambilpekerjaan(){
      $this->db->order_by("nama_pekerjaan","ASC");
      return $this->db->get('tb_pekerjaan');
    }

    function ambilpendidikan(){
      $this->db->order_by("id_pendidikan","ASC");
      return $this->db->get('tb_pendidikan');
    }

    function editdatasantri($email,$array){
      $this->db->where("email_pendaftar",$email);
      return $this->db->update('tb_biodata_pendaftar',$array);
    }

    // end gawian nikman nasir


}
?>
