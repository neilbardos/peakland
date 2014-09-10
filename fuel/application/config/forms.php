<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* CONTACT FORM
 */
$config['contact']['form'] = array(
  'required_text' => '* required fields',
  'css_class' => 'contact-form',
  'form_attrs' => array('method' => 'post'),
  'submit_value' => 'Send'
);

/* Setup fields */
$config['contact']['fields'] = array(
  'name' => array('type' => 'text', 'label' => 'Name: ', 'required' => TRUE),
  'email' => array('type' => 'email', 'label' => 'Email: ', 'required' => TRUE),
  'message' => array('type' => 'textarea', 'label' => 'Message: ', 'required' => TRUE) 
);

/* End of file forms.php */
/* Location: ./application/config/forms.php */
