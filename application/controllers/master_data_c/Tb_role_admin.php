<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class Tb_role_admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('master_data_m/Tb_role_admin_model');
    }
    /*
     * Listing of tb_role_admin
     */
    function index()
    {
        $data['t_row'] = $this->Tb_role_admin_model->get_all_tb_role_admin_count();
        $data['tb_role_admin'] = $this->Tb_role_admin_model->get_all_tb_role_admin();
        $data['_view'] = 'master_data_v/tb_role_admin_v';
        $this->load->view('contoh',$data);
    }
    /*
     * Adding a new tb_role_admin
     */
   function add()
    {
        $this->load->library('form_validation');
		$this->form_validation->set_rules('nama_role','Nama Role','required|max_length[25]');
    $this->form_validation->set_rules('kode_role','Kode Role','required|max_length[25]');
		if($this->form_validation->run())
        {
            $params = array(
				'nama_role' => $this->input->post('nama_role'),
        'kode_role' => $this->input->post('kode_role'),
            );
            $tb_role_admin_id = $this->Tb_role_admin_model->add_tb_role_admin($params);
            redirect('master_data_c/Tb_role_admin/index');
        }
        else
        {
            $data['_view'] = 'master_data_v/add_role_admin_v';
            $this->load->view('contoh',$data);
        }
    }
    /*
     * Editing a tb_role_admin
     */
   function edit($kode_role)
    {
        // check if the tb_role_admin exists before trying to edit it
        $data['tb_role_admin'] = $this->Tb_role_admin_model->get_tb_role_admin($kode_role);
        if(isset($data['tb_role_admin']['kode_role']))
        {
            $this->load->library('form_validation');
			$this->form_validation->set_rules('nama_role','Nama Role','required|max_length[25]');
			if($this->form_validation->run())
            {
                $params = array(
					'nama_role' => $this->input->post('nama_role'),
                );
                $this->Tb_role_admin_model->update_tb_role_admin($kode_role,$params);
                redirect('tb_role_admin/index');
            }
            else
            {
                $data['_view'] = 'tb_role_admin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tb_role_admin you are trying to edit does not exist.');
    }
    /*
     * Deleting tb_role_admin
     */
   function remove($kode_role)
    {
        $tb_role_admin = $this->Tb_role_admin_model->get_tb_role_admin($kode_role);
        // check if the tb_role_admin exists before trying to delete it
        if(isset($tb_role_admin['kode_role']))
        {
            $this->Tb_role_admin_model->delete_tb_role_admin($kode_role);
            redirect('tb_role_admin/index');
        }
        else
            show_error('The tb_role_admin you are trying to delete does not exist.');
    }
}
