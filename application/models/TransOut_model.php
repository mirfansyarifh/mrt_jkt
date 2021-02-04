<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransOut_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->database();

		}

		public function get_count()
		{
			$query = $this->db->select('count(t_id) as total_tOut')->from('trans_out')->get();
			return $query->row()->total_tOut;
		}
			//Listing semua kategori
		public function listing()
		{
			$this->db->select('trans_out.*,
								products.no_manufacture');
			$this->db->from('trans_out');	

			//  JOIN
			$this->db->join('products', 'products.product_id = trans_out.product_id', 'left');
			$this->db->group_by('trans_out.t_id');
			$this->db->order_by('t_id', 'desc');
			$query = $this->db->get();
			return $query->result();
		}
			//Detail kategori
		public function detail($t_id)
		{
			$this->db->select('*');
			$this->db->from('trans_out');
			$this->db->where('t_id', $t_id);	
			$this->db->order_by('t_id', 'desc');
			$query = $this->db->get();
			return $query->row();
		}
			//Tambah Akun
		public function add($data)
		{
			$this->db->insert('trans_out', $data);
		}
			//Edit Akun
		public function edit($data)
		{
			$this->db->where('t_id', $data['t_id']);
			$this->db->update('trans_out', $data);
			
		}

			//Delete Akun
		public function delete($data)
		{
			$this->db->where('t_id', $data['t_id']);
			$this->db->delete('trans_out', $data);
		}

		public function AmbilManufacture($t_id)
		{
			$this->db->select('trans_out.t_id,
								products.no_manufacture');
			$this->db->from('trans_out');	
			$this->db->where('t_id', $t_id);	
			//  JOIN
			$this->db->join('products', 'products.product_id = trans_out.product_id', 'left');
			$this->db->group_by('trans_out.t_id');
			$this->db->order_by('t_id', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */