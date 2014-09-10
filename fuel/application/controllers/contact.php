<?php
class Contact extends CI_Controller {

	public $form_data;

	public function __construct(){
		parent::__construct();
		$this->load->config('forms');
		$this->form_data = $this->config->item('contact');
		$this->load->library('form_builder', $this->form_data['form']);
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index(){
		/* validators */
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[128]|xss_clean');   
		$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[256]|valid_email|xss_clean');
		$this->form_validation->set_rules('message', 'Message', 'trim|min_length[8]|max_length[1024]|xss_clean');
		if($this->form_validation->run() == FALSE) {
			if($this->input->post('Send'))
			{
				foreach($this->form_data['fields'] as $key => $val)
				{
					$this->form_data['fields'][$key]['value'] = $this->input->post($key);
					$this->form_data['fields'][$key]['after_html'] = form_error($key);
				}
			}
		}else{
			if ($this->_process($this->input->post())) {
				$this->session->set_flashdata('success', TRUE);
				redirect('contact');
			}
		}
		$data['form'] = $this->form_builder->render_divs($this->form_data['fields']);
		$this->fuel->pages->render('contact', $data);  
	}
	
	function _process($data){
		$this->load->library('email');
			// send email
		$this->email->from($data['email'], $data['name'] );

			/*********************************************************************
			YOU MUST FILL OUT THE CORRECT dev_email config in application/config/MY_config.php
			AND/OR THE CORRECT TO email address
			*********************************************************************/
			// check config if we are in dev mode
			if ($this->config->item('dev_mode')){
				$this->email->to($this->config->item('dev_email'));
			}else{
				// need to fill this out to work
				$this->email->to($this->config->item('dev_email'));
			}
			$this->email->subject('Website Contact Form');
			$msg = "The following information was submitted:\n";
			foreach($data as $key => $val)
			{
				$msg .= $val."\n";
			}
			$this->email->message($msg);
			
			// let her rip
			if (!$this->email->send())
			{
				add_error('There was an error notifying');
				return FALSE;
			} 
			return TRUE;
		}
	}