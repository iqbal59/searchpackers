<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['main_content']=$this->load->view('home', null, true);
		$this->load->view('index', $data);
	}

	public function site_lang($site_lang) {
		echo $site_lang;
		echo '<br>';
		echo 'you will be redirected to :'.$_SERVER['HTTP_REFERER'];
		$language_data = array(
			'site_lang' => $site_lang
		);

		$this->session->set_userdata($language_data);
		if ($this->session->userdata('site_lang')) {
			echo 'user session language is = '.$this->session->userdata('site_lang');
		}
		redirect($_SERVER['HTTP_REFERER']);

		exit;
	}
}