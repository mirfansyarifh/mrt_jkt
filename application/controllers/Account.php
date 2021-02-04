<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		// PROTEKSI SESSION
		$this->simple_login->cek_login();

		$this->load->model('user_model');

	}

	public function index()
	{	
		$users = $this->user_model->listing();

		$data = array ( 'title'		=>	'Data User',
						'users'		=>	$users,
						'content' 	=>'account/list');
						
		$this->load->view('layout/wrapper', $data, FALSE);

	}

	public function add()
	{		

		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('username', 'Username', 'required|is_unique[users.username]',
			array ( 'required'		=> '%s harus diisi!',
					'is_unique'		=>	'%s sudah terdaftar. Buat silahlkan buat baru.'));

		$valid->set_rules('password', 'Password', 'required',
			array ( 'required'		=> '%s harus diisi!'));

		$valid->set_rules('akses_level', 'Akses Level', 'required',
			array ( 'required'		=> '%s harus diisi!'));
		
			if($valid->run()==FALSE){
	
			$data = array ( 'title'		=>	'Tambah User',
							'content' 		=>	'account/add');
			
			$this->load->view('layout/wrapper', $data, FALSE);
			// Masuk Database
			}else{
                $i = $this->input;
                $data = array (	
                    'username'	=>	$i->post('username'), 
                    'password'	=>	SHA1($i->post('password')),
                    'name'	=>	$i->post('name'), 
                    'jabatan'	=>	$i->post('jabatan'), 
                    'akses_level'	=>	$i->post('akses_level'), 
					);
					
                $this->user_model->add($data);
                $this->session->set_flashdata('sukses', 'Data User telah di ditambahkan!');
                redirect(base_url('account'), 'refresh');

			}
	}

	public function edit($id_user)
	{		

		$users = $this->user_model->detail($id_user);
		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('username', 'Username', 'required',
			array ( 'required'		=> '%s harus diisi!'));

		$valid->set_rules('password', 'Password', 'required',
			array ( 'required'		=> '%s harus diisi!'));

		$valid->set_rules('akses_level', 'Akses Level', 'required',
			array ( 'required'		=> '%s harus diisi!'));
		
			if($valid->run()==FALSE){	
			
            $data = array ( 'title'		=>	'Edit Profile'.$users->username,
                            'users'	=> $users,
							'content' 	=>	'account/edit');
			
			$this->load->view('/layout/wrapper', $data, FALSE);
			// Masuk Database
			}else{
	
                $i = $this->input;
                $data = array (	
                        'id_user'	=> $id_user,
                        'username'	=>	$i->post('username'), 
                        'password'	=>	SHA1($i->post('password')),
                        'name'	=>	$i->post('name'), 
                        'jabatan'	=>	$i->post('jabatan'), 
                        'akses_level'=>	$i->post('akses_level') 
                    );

                $this->user_model->edit($data);
                $this->session->set_flashdata('sukses', 'Data telah di edit!');
                redirect(base_url('account'), 'refresh');
			}
	    }

	public function delete($id_user)
	{

		if ($id_user == $this->session->id_user) {

			$this->session->set_flashdata('gagal', 'User sedang aktif, tidak bisa dihapus.');
			redirect(base_url('account'), 'refresh');
			
		}else{
			$users = $this->user_model->detail($id_user);

			$data = array ('id_user'	=> $id_user );

			$this->user_model->delete($data);
			$this->session->set_flashdata('sukses', 'User telah di hapus!');
			redirect(base_url('account'), 'refresh');

		}
			
	}

}
