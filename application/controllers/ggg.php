<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ggg extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function signup()
    {
        $this->load->view('common/header');
        $this->load->view('signup');
        $this->load->view('common/footer');
    }
	public function index()
	{
        $this->load->view('common/header');
		$this->load->view('home');
        $this->load->view('common/footer');
	}
    public function application()
    {
        $this->load->view('common/header');
        $this->load->view('application');
        $this->load->view('common/footer');
    }
    public function portfolio()
    {
        $this->load->view('common/header');
        $this->load->view('portfolio');
        $this->load->view('common/footer');
    }
	public function orders()
    {
        $this->load->view('common/header');
        $this->load->view('orders');
        $this->load->view('common/footer');
    }
	public function category()
    {
        $this->load->view('common/header');
        $this->load->view('category');
        $this->load->view('common/footer');
    }
    public function productdetail()
    {
        $this->load->view('common/header');
        $this->load->view('productdetail');
        $this->load->view('common/footer');
    }
	public function shop()
    {
        $this->load->view('common/header');
        $this->load->view('shop');
        $this->load->view('common/footer');
    }
    public function checkout()
    {
        $this->load->view('common/header');
        $this->load->view('checkout');
        $this->load->view('common/footer');
    }


	function signu(){
		//$this->load('AuthModel');
		$result=$this->AuthModel->signup1($this->input->post());
		 if($result)
		 	$this->session->set_flashdata('APPMSG','Record inserted successfully');			
		else
		 $this->session->set_flashdata('APPMSG','Faild to insert please try again');
		 $this->index();
	}
	
}
