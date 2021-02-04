<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		// PROTEKSI SESSION
		$this->simple_login->cek_login();
		// AMBIL DATA
		$this->load->model('products_model');
		
	}
	public function index()
	{	
		$products = $this->products_model->listing();

		$data = array ( 'title'		=>	'Daftar Data Product',
						'products'	=>	$products,
						'content' 	=>	'product/list');

		$this->load->view('layout/wrapper', $data, FALSE);
	}
	
	public function add()
	{		
		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('no_manufacture', 'No Manufacture', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));

		$valid->set_rules('no_material', 'No Material', 'required|is_unique[products.no_material]',
			array ( 'required'		=> 	'%s harus diisi!',
					'is_unique'		=>	'%s product sudah ada. Buat product baru!'));
					
		$valid->set_rules('branch_plant', 'Branch Plant', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));


					if($valid->run()==FALSE){
					
						$data = array ( 'title'		=>	'Tambah Product',
										'content' 	=>	'product/add');
			
							$this->load->view('layout/wrapper', $data, FALSE);
					}else{
					
					$i = $this->input;
					$data = array (	
									'product_id'	=> $i->post('product_id'),
									'no_manufacture'	=>	$i->post('no_manufacture'), 
									'no_material'	=>	$i->post('no_material'),
									'branch_plant'	=>	$i->post('branch_plant'),
									'plant'	=>	$i->post('plant'),
									'dept'	=>	$i->post('dept'),
									'no_rack'	=>	$i->post('no_rack'),
									'no_bin'	=>	$i->post('no_bin'),
									'uom'	=>	$i->post('uom'),
									'store_loc'	=>	$i->post('store_loc'),
									'stock'	=>	0,
									'desc_1'	=>	$i->post('desc_1'),
									'desc_2'	=>	$i->post('desc_2'),
									'comment'	=>	$i->post('comment'),
					);

						$this->products_model->add($data);
						$this->session->set_flashdata('sukses', 'File Data telah di tambahkan!');
						redirect(base_url('products'), 'refresh');
	
					}
	}

		//Edit Kategori
	public function edit($product_id)
	{		
		// AMBIL DATA FOLDER YANG AKAN DI EDIT DENGAN PARAMETER FOLDER_ID
		$products = $this->products_model->detail($product_id);
		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('no_manufacture', 'No Manufacture', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));

		$valid->set_rules('no_material', 'No Material', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));
			// VALIDASI BERJALAN
			if($valid->run()==FALSE){

				$data = array ( 'title'		=>	'Edit Product',
								'products'	=> $products,
                                'content' 		=>	'product/edit');
		
                        $this->load->view('layout/wrapper', $data, FALSE);
                        
				}else{

                    $i = $this->input;
					$data = array (	
						'product_id'	=> $product_id,
						'no_manufacture'	=>	$i->post('no_manufacture'), 
						'no_material'	=>	$i->post('no_material'),
						'branch_plant'	=>	$i->post('branch_plant'),
						'plant'	=>	$i->post('plant'),
						'dept'	=>	$i->post('dept'),
						'no_rack'	=>	$i->post('no_rack'),
						'no_bin'	=>	$i->post('no_bin'),
						'uom'	=>	$i->post('uom'),
						'store_loc'	=>	$i->post('store_loc'),
						'stock'	=>	$i->post('stock'),
						'desc_1'	=>	$i->post('desc_1'),
						'desc_2'	=>	$i->post('desc_2'),
						'comment'	=>	$i->post('comment'),
		);
					$this->products_model->edit($data);

                    $this->session->set_flashdata('sukses', 'Data Product telah di ubah!');
                    redirect(base_url('products'), 'refresh');
                }
	}

		//Delete Kategori
	public function delete($product_id)
	{

		$folder = $this->products_model->detail($product_id);

			$data = array ('product_id'	=> $product_id );
			
			$this->products_model->delete($data);
			$this->session->set_flashdata('sukses', 'Data Produk telah di hapus!');
			redirect(base_url('products'), 'refresh');
	}

}