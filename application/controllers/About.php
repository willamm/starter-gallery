<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

	public function index()
	{
		// $this->load->view('About');
		$this->data['pagebody'] = 'About';
		$this->render();
	}
}
