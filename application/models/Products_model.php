<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->database();

		}

		public function get_count()
		{
			$query = $this->db->select('count(product_id) as total_products')->from('products')->get();
			return $query->row()->total_products;
		}
			//Listing semua kategori
		public function listing()
		{
			$this->db->select('*');
			$this->db->from('products');	
			$this->db->order_by('product_id', 'asc');
			$query = $this->db->get();
			return $query->result();
		}
			//Detail kategori
		public function detail($product_id)
		{
			$this->db->select('*');
			$this->db->from('products');
			$this->db->where('product_id', $product_id);	
			$this->db->order_by('product_id', 'desc');
			$query = $this->db->get();
			return $query->row();
		}
			//Tambah Akun
		public function add($data)
		{
			$this->db->insert('products', $data);
		}
			//Edit Akun
		public function edit($data)
		{
			$this->db->where('product_id', $data['product_id']);
			$this->db->update('products', $data);
		}

			//Delete Akun
		public function delete($data)
		{
			$this->db->where('product_id', $data['product_id']);
			$this->db->delete('products', $data);
		}

		function fetch_data($query)
		{
			$this->db->select("*");
			$this->db->from("products");
			if($query != '')
			{
				$this->db->like('no_manufactur', $query);
			}
			$this->db->order_by('no_manufactur', 'ASC');
			return $this->db->get();
		}

}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */