<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->data['judul'] = 'Dashboard';
		$this->data['main_view'] = 'pages/content';
		
		$this->load->view('templates/theme', $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */