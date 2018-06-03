<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_biodatasantriwati extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    /*
     * Get tb_role_admin by kode_role
     */

    function lihatdatasatu($nis)
    {
        $this->db->where("nis_lokal",$nis);
        return $this->db->get('tb_santriwati');
    }

      function lihattingkatan($nis_lokal){
        return $this->db->query("SELECT `tb_kelas_santriwati`.nis_lokal,`tb_presensi_kelas_p`.`id_kelas_belajar`, `tb_presensi_kelas_p`.`nama_kelas_belajar`, `tb_presensi_kelas_p`.`jenjang`, `tb_presensi_kelas_p`.`tingkat`, `tb_tahun_ajaran`.`tahun_ajaran` FROM `tb_kelas_santriwati` inner join `tb_presensi_kelas_p` on `tb_presensi_kelas_p`.`id_kelas_belajar`=`tb_kelas_santriwati`.`id_kelas_belajar` inner join `tb_tahun_ajaran` on `tb_tahun_ajaran`.`id_tahun`=`tb_presensi_kelas_p`.`id_tahun` where `nis_lokal` = '$nis_lokal' order by `tb_presensi_kelas_p`.`tingkat` asc ");
      }

      function lihattingkatanpondokan($nis_lokal){
        return $this->db->query("SELECT `tb_kelas_santriwati`.nis_lokal,`tb_presensi_pondokan_p`.`id_kelas_belajar`, `tb_presensi_pondokan_p`.`nama_kelas_belajar`, `tb_presensi_pondokan_p`.`pondokan`, `tb_presensi_pondokan_p`.`tingkat`, `tb_tahun_ajaran`.`tahun_ajaran` FROM `tb_kelas_santriwati` inner join `tb_presensi_pondokan_p` on `tb_presensi_pondokan_p`.`id_kelas_belajar`=`tb_kelas_santriwati`.`id_kelas_belajar` inner join `tb_tahun_ajaran` on `tb_tahun_ajaran`.`id_tahun`=`tb_presensi_pondokan_p`.`id_tahun` where `nis_lokal` = '$nis_lokal' order by `tb_presensi_pondokan_p`.`tingkat` asc ");
      }

      //////////////////////////////////

}
