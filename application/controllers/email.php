<?php


class Email extends Controller
{
	function __construct()
	{
		parent::Controller();
		
	}
	
	function index() 
	{
		
		  $data['page_title'] = 'Arrow Express Contact Us';
		  $data['banner'] = 'banner-contact';
		  $data['page'] = 'contact'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
	}
	
	function send() 
	{	
		$this->load->library('form_validation');
		$this->load->model('Email_model');
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('comments', 'Comments', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
        $this->form_validation->set_rules('human', 'Are You Human?', 'trim|required');
        $this->form_validation->set_rules('human_again', 'Please type the same word again', 'trim|required|matches[human]');
		
		if($this->form_validation->run() == FALSE)
		{
		$data['page_title'] = 'Arrow Express Contact Us';
		$data['banner'] = 'banner-contact';
		$data['page'] = 'contact_view'; // pass the actual view to use as a parameter
		$this->load->view('container',$data);
		}
		else
		{
			// validation has passed. Now send the email
			$name = (string)$this->input->post('name', TRUE);
			$email = (string)$this->input->post('email', TRUE);
			$comments = (string)$this->input->post('comments', TRUE);
			$phone = (string)$this->input->post('phone', TRUE);
			$subject = (string)$this->input->post('subject', TRUE);
            $human = (string)$this->input->post('human', TRUE);
            $human_again = (string)$this->input->post('human_again', TRUE);
			
			$message = "Message from: " . $name . "<br/>" ;
			$message .= "Phone Number: " . $phone . "<br/>";
			$message .= "Subject: " . $subject . "<br/>";
			$message .= "Comments: " . "<br/>" . $comments;
            $message .= "Are you human?: " . "<br/>" . $human;
            $message .= "Are you human (again)?: " . "<br/>" . $human_again;
			
			$redirect = "/site/contact_confirmation";

			$this->Email_model->sendeMail($name, $email, $message, $subject, $redirect);
	}
	}
	
	// Shipping Request A Quote Form Mailer
	function send_quote() 
	{	
		$this->load->library('form_validation');
		$this->load->model('Email_model');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('company', 'Company', 'trim');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('comments', 'Comments', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		$this->form_validation->set_rules('size', 'Package Size', 'trim|required');
		$this->form_validation->set_rules('package', 'Package Description', 'trim|required');
		$this->form_validation->set_rules('comments', 'Special Instructions', 'trim');
		$this->form_validation->set_rules('human', 'Are You Human?', 'trim|required');
		$this->form_validation->set_rules('human_again', 'Please type the same word again', 'trim|required|matches[human]');
		
		if($this->form_validation->run() == FALSE)
		{
		$data['page_title'] = 'Arrow Express Request A Quote';
		$data['banner'] = 'banner-contact';
		$data['page'] = 'quote_view'; // pass the actual view to use as a parameter
		$this->load->view('container',$data);
		}
		else
		{
			// validation has passed. Now send the email
			$name = (string)$this->input->post('name', TRUE);
			$company = (string)$this->input->post('company', TRUE);
			$email = (string)$this->input->post('email', TRUE);
			$phone = (string)$this->input->post('phone', TRUE);
			$package = (string)$this->input->post('package', TRUE);
			$size = (string)$this->input->post('size', TRUE);
			$origin = (string)$this->input->post('origin', TRUE);
			$destination = (string)$this->input->post('destination', TRUE);
			$comments = (string)$this->input->post('comments', TRUE);
			$human = (string)$this->input->post('human', TRUE);
			$human_again = (string)$this->input->post('human_again', TRUE);
			
			$subject = "Arrow Express Request A Quote";
			
			$message = "Message from: " . $name . "<br/>";
			$message .= "Company: " . $company . "<br/>";
			$message .= "Phone Number: " . $phone . "<br/>";
			$message .= "Package: " . $package . "<br/>";
			$message .= "Package Size: " . $size . "<br/>";
			$message .= "Origin: " . $origin . "<br/>";
			$message .= "Destination: " . $destination . "<br/>";
			$message .= "Special Instructions: " . "<br/>" . $comments;
			$message .= "Are you human?: " . "<br/>" . $human;
			$message .= "Are you human (again)?: " . "<br/>" . $human_again;
			
			$redirect = "/site/contact_confirmation";


			$this->Email_model->sendeMail($name, $email, $message, $subject, $redirect);			
		}
	}

	
}

/* End of file email.php */
/* Location: ./application/controllers/email.php */