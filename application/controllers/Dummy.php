<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends CI_Controller {

	public function index()
	{
      // navigate localhost/mpgames_ci/dummy
		$this->load->view('Dummy/anjing');
	}
	
}
