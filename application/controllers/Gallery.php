<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Application
{

	public function index()
	{
		// $this->load->view('Gallery');
		$this->data['pagebody'] = 'Gallery';
		$this->render();
	}
}
