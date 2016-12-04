<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

  function __construct()

  {

    parent::__construct();



    $this->load->helper('url');

    $this->load->library('tank_auth');


  }

class Site extends Controller
{
	function __construct()
	{
		parent::controller();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{

		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'Welcome To Arrow Express';
		  $data['banner'] = 'banner-welcome';
		  $data['page'] = 'welcome_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);

	}
	
	function about()
	{
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'About Arrow Express';
		  $data['banner'] = 'banner-about';
		  $data['page'] = 'about_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		
	}
	
	function works()
	{
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'How Arrow Express Works';
		  $data['banner'] = 'banner-about';
		  $data['page'] = 'works_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		
	}

	function contact()
	{
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'Arrow Express Contact Us';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'contact_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		
	}
	
	function landing()
	{
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'Arrow Express Contact Us';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'landing_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		
	}
	
	function quote()
	{
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'Arrow Express Request A Quote';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'quote_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		
	}
	
	function contact_confirmation()
	{
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'Thank You From Arrow Express';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'contact_confirmation_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		
	}
	
	function order_confirmation()
	{
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'Thank You From Arrow Express';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'order_confirmation_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		
	}

	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */