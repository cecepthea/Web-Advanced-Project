<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Logout
 * @Author Wasla Habib
 * @Reviewer Glenn Martens
 */
class Logout extends CI_Controller {

	/**
	 * Destroyen van de sessie bij het uitloggen.
     */
	public function index()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
