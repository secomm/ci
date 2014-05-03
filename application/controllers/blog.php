<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['judul'] = "Judul blog";
		$data['isi'] = "Isi blog";
		$this->load->view("blog_view",$data);
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */