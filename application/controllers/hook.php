<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hook extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		shell_exec(`git pull`);
	}

	public function index()
	{
		shell_exec(`git pull`);
	}
}

/* End of file hook.php */
/* Location: ./application/controllers/hook.php */