<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransIn extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		// PROTEKSI SESSION
		$this->simple_login->cek_login();
		// AMBIL DATA
		$this->load->model('transin_model');
		$this->load->model('products_model');
		
	}
	public function index()
	{	
		$transaction = $this->transin_model->listing();
		$category = 'transIn';

		$data = array ( 'title'			=>	'Transaction In',
						'transaction'	=>	$transaction,
						'category'		=>	$category,
						'content' 		=>	'transaction/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	
	public function add()
	{		
		// Validasi Input
        $valid = $this->form_validation;
		$category = 'transIn';
        
        $products = $this->products_model->listing();

		$valid->set_rules('t_doc_no', 'Nomor Document', 'required|is_unique[trans_in.t_doc_no]',
            array ( 'required'		=> 	'%s harus diisi!',
					'is_unique'		=>	'%s Nomor Document sudah ada. Buat product baru!'));

		$valid->set_rules('t_by', 'By', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));
					
		$valid->set_rules('stock', 'Stock', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));


					if($valid->run()==FALSE){
					
                        $data = array ( 'title'		=>	'Tambah Transaction In',
										'category'	=>	$category,
                                        'products' 	=>	$products,
										'content' 	=>	'transaction/add');
			
							$this->load->view('layout/wrapper', $data, FALSE);
					}else{
					
					$i = $this->input;
					$data = array (	
									't_id'	=> $i->post('t_id'),
									't_doc_no'	=>	$i->post('t_doc_no'), 
									't_by'	=>	$i->post('t_by'),
									't_posting_by'	=>	$i->post('t_posting_by'),
									'product_id'	=>	$i->post('product_id'),
									'stock'	=>	$i->post('stock'),
									't_detail'	=>	$i->post('t_detail'),
									't_start'	=>	$i->post('t_start'),
									't_end'	=>	$i->post('t_end'),
									't_date'	=>	$i->post('t_date'),
									't_notes'	=>	$i->post('t_notes'),
									't_comment'	=>	$i->post('t_comment'),
					);

						$this->transin_model->add($data);
						$this->session->set_flashdata('sukses', 'Transaction telah di tambahkan!');
						redirect(base_url('transactions/'.$category), 'refresh');
	
					}
	}

		//Edit Kategori
	public function edit($t_id)
	{		
		// AMBIL DATA FOLDER YANG AKAN DI EDIT DENGAN PARAMETER FOLDER_ID
        $transaction = $this->transin_model->detail($t_id);
		$category = 'transIn';
        $AmbilMaterial = $this->transin_model->AmbilMaterial($t_id);

		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('t_doc_no', 'Nomor Document', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));

		$valid->set_rules('t_by', 'By', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));
					
		$valid->set_rules('stock', 'Stock', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));
			// VALIDASI BERJALAN
			if($valid->run()==FALSE){

				$data = array ( 'title'		=>	'Edit Transaction',
								'transaction'	=> $transaction,
								'category'	=>	$category,
								'AmbilMaterial'	=>	$AmbilMaterial,
                                'content' 		=>	'transaction/edit');
		
                        $this->load->view('layout/wrapper', $data, FALSE);
                        
				}else{

                    $i = $this->input;
					$data = array (	
                        't_id'	=> $t_id,
                        't_doc_no'	=>	$i->post('t_doc_no'), 
                        't_by'	=>	$i->post('t_by'),
                        't_posting_by'	=>	$i->post('t_posting_by'),
                        'product_id'	=>	$transaction->product_id,
                        'stock'	=>	$i->post('stock'),
                        't_detail'	=>	$i->post('t_detail'),
                        't_start'	=>	$i->post('t_start'),
                        't_end'	=>	$i->post('t_end'),
                        't_date'	=>	$i->post('t_date'),
                        't_notes'	=>	$i->post('t_notes'),
                        't_comment'	=>	$i->post('t_comment'),
						  );
						  
					$this->transin_model->edit($data);
                    $this->session->set_flashdata('sukses', 'Data Transaction telah di ubah!');
                    redirect(base_url('transactions/'.$category), 'refresh');
                }
	}

		//Delete Kategori
	public function delete($t_id)
	{
			$category = 'transIn';
			$data = array ('t_id'=> $t_id );
			
			$this->transin_model->delete($data);
			$this->session->set_flashdata('sukses', 'Data Transaction telah di hapus!');
			redirect(base_url('transactions/'.$category), 'refresh');
	}

}