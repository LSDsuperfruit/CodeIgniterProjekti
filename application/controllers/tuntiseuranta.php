<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class tuntiseuranta extends CI_Controller {

	public function index()
	{
		$this->tuntiseuranta_view();
	}

	public function tuntiseuranta_view()
	{
		$this->load->view('tuntiseuranta_view');
	}

	public function tuntiseuranta_model()
	{
		$this->load->model('tuntiseuranta_model');
	}

	public function form_validation()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('Aloitus', 'Aloitus',  'required|min_length[8]|max_length[10]');
		$this->form_validation->set_rules('Lopetus',  'Lopetus',  'required|min_length[8]|max_length[10]');
		$this->form_validation->set_rules('Tyoaika',  'Tyoaika',  'required|numeric');
		$this->form_validation->set_rules('Raportti', 'Raportti', 'required');
		$this->form_validation->set_rules('Projekti', 'Projekti', 'required');

		
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('tuntiseuranta_view');
			} 
			else 
			{

			$this->load->model('tuntiseuranta_model');
				if($this->input->post('submit')){
					$this->tuntiseuranta_model->form_to_database();
				}
				redirect('tuntiseuranta');
			}
		}
		
}	
