<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();
		// ini dari model di folder application/models/Game.php 
		// biar rapih, controller cuma ngontrol navigate app router
		// SELALU PASTIKAN CONTROLLER CLEAN, TIDAK ADA OPERASI QUERY DISINI
		// SEMUA QUERY MASUK DARI MODEL !!!!
		$this->load->model('Game');   

	}

	public function index()
	{
		// panggil method getLatestGame dari model Game
		// dan masukin di variable $data untuk di render ke view
		$data['listGame'] = $this->Game->getLatestGame();


		$this->load->view('Home/index', $data);
	}

	public function monyet()
	{
		// navigate to localhost/mpgames_ci/home/monyet will load the view Dummy/monyet
		$this->load->view('Dummy/monyet');
	}
}
