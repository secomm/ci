<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller {

	public function index()
	{
		$this->load->view('home/template');
	}
}

/* End of file template.php */
/* Location: ./application/controllers/template.php */