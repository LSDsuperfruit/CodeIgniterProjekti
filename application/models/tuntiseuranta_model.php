<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class tuntiseuranta_model extends CI_Model {

	public function form_to_database($data)
	{
		
		$talotus   = $this->input->post('talotus');
		$tlopetus  = $this->input->post('tlopetus');
		$tyoaika   = $this->input->post('tyoaika');
		$raportti  = $this->input->post('raportti');
		$pprojekti = $this->input->post('pprojekti');

		$data = array(
			'talotus'   => $talotus,
			'tlopetus'  => $tlopetus,
			'tyoaika'   => $tyoaika,
			'raportti'  => $raportti,
			'pprojekti' => $pprojekti
		);
			
		$this->db->insert('tseuranta', $data);	
		
	}	
	
}
	