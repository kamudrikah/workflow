<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hook extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		exec(`git pull`);
	}

	public function index()
	{
		exec(`git pull`);
	}
}

/* End of file hook.php */
/* Location: ./application/controllers/hook.php */