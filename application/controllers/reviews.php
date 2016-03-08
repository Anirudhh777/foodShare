<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    	$this->load->model('review');
	}

	public function index()
	{
        $this->load->helper('form');
        $this->load->view('/reviews/index/');
	}

	public function add_review()
	{
		$review_array = $this->input->post();
        $result = $this->review->validate_review($review_array);

        if($result[0])
        {
            $user = $this->user->get_user_by_email($register_array['email']);
            $this->session->set_userdata('user_name', $user['name']);
            $this->session->set_userdata('user_id', $user['user_id']);           
            $this->session->set_userdata('current_user', $user);
            $this->session->set_userdata('first_login', TRUE);
            $this->session->set_userdata('logged_in', TRUE);
            redirect('/views/dashboard');
        } 
        else 
        {
            $this->session->set_flashdata('reg_errors', $result[1]);
            redirect('/');
        }
	}