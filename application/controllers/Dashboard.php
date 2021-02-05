<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		// PROTEKSI SESSION
		$this->simple_login->cek_login();
        $this->load->model('Dashboard_model', 'dashboard');

	}

	//Halaman utama admin Dasbor
	public function index()
	{	

		$stock = $this->dashboard->getProducts();
		$arrProd = [];
		foreach ($stock as $k => $v) {
			$arrProd[] = ['y' => $v->stock, 'label' => $v->no_material];
			} ;
			$dataPoints = json_encode($arrProd, JSON_NUMERIC_CHECK);
			

        $data['title'] = "Dashboard";
        $data['content'] = "dashboard/list";
        $data['trans_in'] = $this->dashboard->count('trans_in');
        $data['trans_inByTime'] = $this->dashboard->countByTime('trans_in');
        $data['trans_open'] = $this->dashboard->count('trans_open');
        $data['trans_openByTime'] = $this->dashboard->countByTime('trans_open');
        $data['trans_out'] = $this->dashboard->count('trans_out');
        $data['trans_outByTime'] = $this->dashboard->countByTime('trans_out');
		$data['trans_consign'] = $this->dashboard->count('trans_consign');
		$data['trans_consignByTime'] = $this->dashboard->countByTime('trans_consign');
		$data['dataPoints'] = $dataPoints;
				
		//Column Chart
		$data['ASN'] = $this->dashboard->countByBranch('ASN');
		$data['BHI'] = $this->dashboard->countByBranch('BHI');
		$data['BLA'] = $this->dashboard->countByBranch('BLA');
		$data['BLM'] = $this->dashboard->countByBranch('BLM');
		$data['BNH'] = $this->dashboard->countByBranch('BNH');
		$data['CPR'] = $this->dashboard->countByBranch('CPR');
		$data['DEPO'] = $this->dashboard->countByBranch('DEPO');
		$data['DKA'] = $this->dashboard->countByBranch('DKA');
		$data['FTM'] = $this->dashboard->countByBranch('FTM');
		$data['MHJN'] = $this->dashboard->countByBranch('MHJN');
		$data['LBB'] = $this->dashboard->countByBranch('LBB');
		$data['SNY'] = $this->dashboard->countByBranch('SNY');
		$data['STB'] = $this->dashboard->countByBranch('STB');
		$data['OTHER'] = $this->dashboard->countByBranch('OTHER');

			//Line Chart

		$bln = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
		$data['c_in'] = [];
        $data['c_open'] = [];
        $data['c_consign'] = [];
		$data['c_out'] = [];
		
		foreach ($bln as $b) {
            $data['c_in'][] = $this->dashboard->chartIn($b);
			$data['c_open'][] = $this->dashboard->chartOpen($b);
			$data['c_consign'][] = $this->dashboard->chartConsign($b);
            $data['c_out'][] = $this->dashboard->chartOut($b);
		}

		$this->load->view('layout/wrapper', $data, FALSE);

			
	}

}
