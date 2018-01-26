<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

	/**
	 * Index page for this controller.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'About';
		$this->render();
	}
}
