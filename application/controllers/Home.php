<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct(){

		parent::__construct();
		

		$this->load->model('admin/lead_model', 'lead_model');
		
	}

	public function index()
	{
		$data['main_content']=$this->load->view('home', null, true);
		$this->load->view('index', $data);
	}


	public function postenquiry()
	{
		

		if($this->input->server('REQUEST_METHOD') === 'POST'){

			$data = array(
				'lm_lead_type' => $this->input->post('lm_lead_type'),
				'lm_lead_needs' => implode(",", $this->input->post('lm_lead_needs')),
				'lm_moving_from' => $this->input->post('lm_moving_from'),
				'lm_moving_from_locality' => $this->input->post('lm_moving_from_locality'),
				'lm_moving_to' => $this->input->post('lm_moving_to'),
				'lm_moving_to_locality' => $this->input->post('lm_moving_to_locality'),
				'lm_lead_moving_date' =>  $this->input->post('lm_lead_moving_date'),
				'lm_moving_items' =>  $this->input->post('lm_moving_items'),
				'lm_service_quality' =>  $this->input->post('lm_service_quality'),
				'lm_lead_name' =>  $this->input->post('lm_lead_name'),
				'lm_lead_phone' =>  $this->input->post('lm_lead_phone'),
				'lm_lead_email' =>  $this->input->post('lm_lead_email'),
				
			);
			$data = $this->security->xss_clean($data);
			$result = $this->lead_model->add_lead($data);
			if($result){

				

				$this->session->set_flashdata('success', 'Thanks for your query. We will get back to you soon.');
				redirect(base_url('/'));
			}
			else{
				$this->session->set_flashdata('error', 'Error');
				redirect(base_url('/'));
			}

		}
		else{
			$this->session->set_flashdata('error', 'Error');
				redirect(base_url('/'));
		}

		// $data['main_content']=$this->load->view('home', null, true);
		// $this->load->view('index', $data);
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