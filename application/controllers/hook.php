<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hook extends CI_Controller {

	public function index()
	{
		$result = file_get_contents('http://requestb.in/18kij381');
    	echo $result;
	}
}

/* End of file hook.php */
/* Location: ./application/controllers/hook.php */