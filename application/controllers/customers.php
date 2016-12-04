<?php


class Customers extends Controller
{
	function __construct()
	{
		parent::Controller();
		$this->load->helper('url');
		$this->load->library('tank_auth');
		
	}
	// Home Page
	function index() 
	{
		if (!$this->tank_auth->is_logged_in(TRUE)) {							// not logged in or activated
			redirect('/auth/login/');

		} else {
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'Arrow Express Customers';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'customers_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		}
		  
	}
	
  
	
	// View Billing Information
	function account_info()
	{
		if (!$this->tank_auth->is_logged_in(TRUE)) {							// not logged in or activated
			redirect('/auth/login/');

		} else {
			$this->load->model('Addresses_model');
			
			$data['addresses'] = $this->Addresses_model->getBillingByUserId();
			
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  
		  $data['page_title'] = 'Arrow Express Customers - Billing Info';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'account_info_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		}
	}
	
	// View Shipping Information
	function shipping_info()
	{
		if (!$this->tank_auth->is_logged_in(TRUE)) {							// not logged in or activated
			redirect('/auth/login/');

		} else {
			
			$this->load->model('Addresses_model');
			
			$data['addresses'] = $this->Addresses_model->getShippingByUserId();
			
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  
		  $data['page_title'] = 'Arrow Express Customers - Shipping Info';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'shipping_info_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		}
	}
	
	// View Request Pickup
	function request_pickup()
	{
		if (!$this->tank_auth->is_logged_in(TRUE)) {							// not logged in or activated
			redirect('/auth/login/');

		} else {
			
			$this->load->model('Addresses_model');
			
			$data['addresses'] = $this->Addresses_model->getBillingByUserId();
			$data['s_addresses'] = $this->Addresses_model->selectFromAddresses();
			
		  $data['user_id']	= $this->tank_auth->get_user_id();
		  $data['username']	= $this->tank_auth->get_username();
		  $data['page_title'] = 'Arrow Express Customers - Request A Pickup';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'request_pickup_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		}
	}
	
	
	// Billing Commands
	
	// Submit New Profile Address
	function submit_bill()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('contact', 'Contact Name', 'trim|required');
		$this->form_validation->set_rules('company', 'Company', 'trim');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('street', 'Street', 'trim|required');
		$this->form_validation->set_rules('street2', 'Street 2', 'trim');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
        if ($this->form_validation->run() == FALSE) {
        	$data['user_id'] = $this->tank_auth->get_user_id();
			$data['username'] = $this->tank_auth->get_username();
			$data['page_title'] = 'Arrow Express Customers';
			$data['banner'] = 'banner-contact';
			$data['page'] = 'account_info_view'; // pass the actual view to use as a parameter
			$this->load->view('container', $data);
			}


		else
		{
			// validation has passed. Now submit the data
			
			$contact = (string)$this->input->post('contact', TRUE);
			$company = (string)$this->input->post('company', TRUE);
			$email = (string)$this->input->post('email', TRUE);
			$street = (string)$this->input->post('street', TRUE);
			$street2 = (string)$this->input->post('street2', TRUE);
			$city = (string)$this->input->post('city', TRUE);
			$state = (string)$this->input->post('state', TRUE);
			$zip = (string)$this->input->post('zip', TRUE);
			$phone = (string)$this->input->post('phone', TRUE);
		
		$this->db->insert('bill_addresses', $_POST);
		redirect('/customers/account_info');
		}
	}
	
	// Deletes A Billing Address
	function delete_bill_address()
	{
		$id = (string)$this->input->post('id', TRUE);
		$this->db->where(array('id' => $id));
		$this->db->delete('bill_addresses');
		redirect('/customers/account_info');
	}
	
	// Shipping Commands
	
	// Submit New Shipping Address
	function submit_ship()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('contact', 'Contact Name', 'trim');
		$this->form_validation->set_rules('company', 'Company', 'trim|required');
		$this->form_validation->set_rules('street', 'Street', 'trim|required');
		$this->form_validation->set_rules('street2', 'Street 2', 'trim');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
        if ($this->form_validation->run() == FALSE) {
        	$data['user_id'] = $this->tank_auth->get_user_id();
			$data['username'] = $this->tank_auth->get_username();
			$data['page_title'] = 'Arrow Express Customers';
			$data['banner'] = 'banner-contact';
			$data['page'] = 'shipping_info_view'; // pass the actual view to use as a parameter
			$this->load->view('container', $data);
			}


		else
		{
			// validation has passed. Now submit the data
			
			$contact = (string)$this->input->post('contact', TRUE);
			$company = (string)$this->input->post('company', TRUE);
			$street = (string)$this->input->post('street', TRUE);
			$street2 = (string)$this->input->post('street2', TRUE);
			$city = (string)$this->input->post('city', TRUE);
			$state = (string)$this->input->post('state', TRUE);
			$zip = (string)$this->input->post('zip', TRUE);
			$phone = (string)$this->input->post('phone', TRUE);
		
		$this->db->insert('ship_addresses', $_POST);
		redirect('/customers/shipping_info');
		}
	}
	
	// Deletes A Shipping Address
	function delete_ship_address()
	{
		$id = (string)$this->input->post('id', TRUE);
		$this->db->where(array('id' => $id));
		$this->db->delete('ship_addresses');
		redirect('/customers/shipping_info');
	}
	
	// Customer Pickup Commands
	function submit_pickup_request()
	
{
		$this->load->library('form_validation');
		$this->load->model('Addresses_model');
		$this->load->model('Email_model');
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Your Name', 'trim|required');
		$this->form_validation->set_rules('company', 'Your Company', 'trim');
		$this->form_validation->set_rules('requestor_name', 'Requestor Name', 'trim');
		$this->form_validation->set_rules('requestor_number', 'Requestor Number', 'trim');		
		$this->form_validation->set_rules('ship_date', 'What is the Pickup Date', 'trim|required');
		$this->form_validation->set_rules('ship_time', 'What are the receiving hours', 'trim');
		$this->form_validation->set_rules('delivery_date', 'What is the Delivery Date', 'trim|required');
		$this->form_validation->set_rules('delivery_time', 'What are the delivery hours', 'trim');
		
        if ($this->form_validation->run() == FALSE) {
        	$this->load->model('Addresses_model');
        	$data['user_id'] = $this->tank_auth->get_user_id();
			$data['username'] = $this->tank_auth->get_username();
			$data['addresses'] = $this->Addresses_model->getBillingByUserId();
			$data['s_addresses'] = $this->Addresses_model->selectFromAddresses();
			$data['page_title'] = 'Arrow Express Customers: Request Pickup';
			$data['banner'] = 'banner-contact';
			$data['page'] = 'request_pickup_view'; // pass the actual view to use as a parameter
			$this->load->view('container', $data);
			}


		else

		{
			// validation has passed. Now submit the data
			

			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$request_name = $this->input->post('requestor_name', TRUE);
			$request_number = $this->input->post('requestor_number', TRUE);
			$company = $this->input->post('company', TRUE);
			$description = $this->input->post('description', TRUE);
			$billing_id = $this->input->post('user_id', TRUE);
			$origin_id = $this->input->post('origin_id', TRUE);
			$destination_id = $this->input->post('destination_id', TRUE);
			$ship_date = $this->input->post('ship_date', TRUE);
			$ship_time = $this->input->post('ship_time', TRUE);
			$delivery_date = $this->input->post('delivery_date', TRUE);
			$delivery_time = $this->input->post('delivery_time', TRUE);
			$subject = 'Arrow Express Delivery Request';
			
			$origin = $this->Addresses_model->getAddressByOriginId($origin_id);
			$destination = $this->Addresses_model->getAddressByDestinationId($destination_id);
			
			$message = "Pickup Request From: " . "<br/>";
			$message .= "Account Holders Name:" . $name . "<br/>";
			$message .= "Company Name:" . $company . "<br/>";
			$message .= "<br/>";
			$message .= "Requestors Name:" . $request_name . "<br/>";
			$message .= "Requestors Number:" . $request_number . "<br/>";
			$message .= "Description of Package:" . "<br/>";
			$message .= $description . "<br/>";
			$message .= "<br/>";
			$message .= "Origin:" . "<br/>";
			foreach($origin as $key => $value) { foreach($value as $key2 => $value2) { $message .= $value2 . "<br/>"; } }
			$message .= "<br/>";
			$message .= "Destination:". "<br/>";
			foreach($destination as $key => $value) { foreach($value as $key2 => $value2) { $message .= $value2 . "<br/>"; } } 
			$message .= "<br/>";
			$message .= "Ship Date:" . $ship_date . "<br/>";
			$message .= "Ship Time:" . $ship_time . "<br/>";
			$message .= "Delivery Date:" . $delivery_date . "<br/>";
			$message .= "Delivery Time:" . $delivery_time . "<br/>";
			
			$redirect = "/site/order_confirmation";
		
			/*
foreach($origin as $key => $value) { $message .= $value . "<br/>"; }
			foreach($destination as $key => $value) { $message .= $value . "<br/>"; }
*/

		$this->db->insert('orders', $_POST);
		
		$this->Email_model->sendeMail($name, $email, $message, $subject, $redirect);
		}	
		
	}
}

/* End of file customers.php */
/* Location: ./application/controllers/customers.php */