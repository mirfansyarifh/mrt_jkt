<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function count($table)
    {
        return $this->db->count_all($table);
    }

    public function countByTime($table)
    {
        $like = date('Y') .'-'. date('m');
        $this->db->like('t_date', $like, 'after');
        return count($this->db->get($table)->result_array());
        
    }
    
    public function getProducts()
    {
        $this->db->select('no_material, stock');
        return $this->db->get('products')->result();
    }


    public function countByBranch($branch)
    {
        $this->db->select_sum('stock');
        $this->db->where('branch_plant', $branch);

        return $this->db->get('products')->row_array()['stock'];
    }

    public function chartIn($bulan){

        $like = date('Y') .'-'. $bulan;
        $this->db->like('t_date', $like, 'after');
        return count($this->db->get('trans_in')->result_array());

    }
    
    public function chartOpen($bln){

        $like = date('Y') .'-'. $bln;
        $this->db->like('t_date', $like, 'after');
        return count($this->db->get('trans_open')->result_array());

    }
    public function chartOut($bulan){

        $like = date('Y') .'-'. $bulan;
        $this->db->like('t_date', $like, 'after');
        return count($this->db->get('trans_out')->result_array());

    }
    public function chartConsign($bln){

        $like = date('Y') .'-'. $bln;
        $this->db->like('t_date', $like, 'after');
        return count($this->db->get('trans_consign')->result());

    }
}
