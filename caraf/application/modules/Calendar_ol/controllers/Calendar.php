<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Company Parexons
Date 26/1/2016
*/

class Calendar extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library(array('form_validation'));
		$this->lang->load('auth');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->module('template');

		$this->load->helper(array('html','language','form','country'));
        //$this->load->model('Users_modal');
		$this->load->model('calendar_model');

		if (!$this->ion_auth->logged_in())
        {
            redirect('users/auth', 'refresh');
        }

	}

	public function index()
	{


		/* if (!$this->ion_auth->is_admin())
    {
      return show_error("You Must Be An Administrator To View This Page");
    }
        // set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
*/
		// list the users
	

        

        $data['page'] = "calendar/calendrier/accueil";
		$this->template->template_view($data);		
	}

	 public function get_events()
 	{
     // Our Start and End Dates
     $start = $this->input->get("start");
     $end = $this->input->get("end");

     $startdt = new DateTime('now'); // setup a local datetime
     $startdt->setTimestamp($start); // Set the date based on timestamp
     $start_format = $startdt->format('Y-m-d H:i:s');

     $enddt = new DateTime('now'); // setup a local datetime
     $enddt->setTimestamp($end); // Set the date based on timestamp
     $end_format = $enddt->format('Y-m-d H:i:s');

     $events = $this->calendar_model->get_events($start_format, $end_format);

     $data_events = array();

     foreach($events->result() as $r) {

         $data_events[] = array(
             "id" => $r->ID,
             "title" => $r->title,
             "description" => $r->description,
             "end" => $r->end,
             "start" => $r->start
         );
     }

     echo json_encode(array("events" => $data_events));
     exit();
 }

 public function add_event() 
{
    /* Our calendar data */
    $name = $this->input->post("name");
    $desc = $this->input->post("description");
    $start_date = $this->input->post("start_date");
    $end_date = $this->input->post("end_date");

    if(!empty($start_date)) {
       $sd =  $start_date;
       $start_date = $sd;
       $start_date_timestamp = $sd;
    } else {
       $start_date = date("Y-m-d H:i:s", time());
       $start_date_timestamp = time();
    }

    if(!empty($end_date)) {
       $ed =  $end_date;
       $end_date = $ed;
       $end_date_timestamp = $ed;
    } else {
       $end_date = date("Y-m-d H:i:s", time());
       $end_date_timestamp = time();
    }

    $this->calendar_model->add_event(array(
       "title" => $name,
       "description" => $desc,
       "start" => $start_date,
       "end" => $end_date
       )
    );

    redirect(site_url("calendar"));
}
	
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */