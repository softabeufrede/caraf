<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Site_web extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->module('template');
		$this->load->model('common_model');

		/*if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		$this->ion_auth->get_user_group();*/
	}


	public function  index() {
$sess_id = $this->session->userdata('user_id');

   if(!empty($sess_id))
   {
       if(isset($_SESSION)){
				if (isset($_SESSION) AND $_SESSION['user_id'] == 1){
					  redirect('users/auth/', 'refresh');
					  //var_dump($this->session->userdata);
				  }
		   }

   }else{
	
              
   }
	//	echo "ok";
		$data['liste_alaune'] = $this->common_model->alaune_liste('categories');
		$data['alaune'] = $this->common_model->alaune_text('100','categories');
		$data['art_activite'] = $this->common_model->get_3_p_activit('15','article');
	
     view("siteweb/index",$data);
	 

		
	}


	public function  about() {

		$data['page_about'] = $this->common_model->page('about','t_page');

		view("siteweb/about",$data);
	}
	public function  lepays() {
		$data['page_lepays'] = $this->common_model->page('lepays','t_page');
		view("siteweb/lepays",$data);
	}
	public function  projetdurable() {

		$data['all_projets_durable'] = $this->common_model->projets('1','projets');
		view("siteweb/projetdurable",$data);
	}

	public function  petitprojets() {
		$data['all_projets_durable'] = $this->common_model->projets('2','projets');
		view("siteweb/petitprojet",$data);
	}

	public function  detailsprojet($id) {
		$data['projets_by_id'] = $this->common_model->projets_by_id($id,'projets');
		view("siteweb/details_projets",$data);
	}

	public function  details_article($id) {
		$data['article_by_id'] = $this->common_model->projets_by_id($id,'article');
		view("siteweb/details_articles",$data);
	}




	public function  msante() {
		$data['all_article_sante'] = $this->common_model->projets('11','article');
		view("siteweb/event_sante",$data);
	}


	public function  urbani() {
		$data['all_article_urbani'] = $this->common_model->projets('12','article');
		view("siteweb/event_urbani",$data);
	}

	public function  necrolo() {
		$data['all_article_necro'] = $this->common_model->projets('13','article');
		view("siteweb/event_necrolo",$data);
	}

	public function  alaune($id="") {
		$data['all_article_sante'] = $this->common_model->projets($id,'article');
		view("siteweb/event_sante",$data);
	}



	public function  contact() {
		view("siteweb/contact");

		if($this->input->post())
		{



			$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
			$data = array(
				//'name' => $this->input->post('name'),
				'nom_prenoms'  => $this->input->post('name'),
				'tel'   => $this->input->post('phone'),
				'email'      => $this->input->post('email'),
				'message'    => $this->input->post('message'),
				'pays'=> $getloc->country,
			);
             $table="message_contact";
			$insert_data_contact = $this->common_model->add_page($table,$data);

			if ($insert_data_contact)
			{
				$to = "abeufrederic@gmail.com";

				$subject = "FORMULAIRE DE DEMANDE D'INFORMATION";

//$body = "Hi,\n\nHow are you?";



				$message = '<html><body>';

				$message .= '<img src="http://actionmedicale.com/demo/images/logoactm.png" alt="" />';

				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

				$message .= "<tr style='background: #eee;'><td><strong>Nom :</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";


				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
				$message .= "<tr><td><strong>Contact:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
				$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";
				$cleanedFrom = trim(strip_tags($_POST['email']));
				$headers = "From: info@sweet-comm.com\r\n";
				$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				if (mail($to, $subject, $message, $headers)) {

					echo "<SCRIPT> //not showing me this

    alert('MESSAGE ENVOYE MERCI');

    window.location.replace('./');

</SCRIPT>";

				}




			}


else {
	echo "<SCRIPT> //not showing me this

    alert('MESSAGE  NON ENVOYER MERCI DE REPRENDRE ');

    window.location.replace('http://actionmedicale.com/demo/');

</SCRIPT>";

}

		}

	}

	
	
	public function  monagenda() {
			if (!$this->ion_auth->logged_in())
        {
            redirect('users/auth', 'refresh');
        }

			 $sess_id = $this->session->userdata('user_id');

                                    if(!empty($sess_id)){
						$this->load->view("siteweb/monagenda");
				}else{view("siteweb/index");}

				
		}



	public function  yafeca() {



		view("siteweb/yafeca/accueil");


		if($this->input->post())
		{



			$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
			$data = array(
				//'name' => $this->input->post('name'),
				'nom_prenoms'  => $this->input->post('name'),
				'tel'   => $this->input->post('phone'),
				'email'      => $this->input->post('email'),
				'message'    => $this->input->post('message'),
				'type'    => $this->input->post('typeuser'),
				'pays'=> $getloc->country,
			);
			$table="message_contact";
			$insert_data_contact = $this->common_model->add_page($table,$data);

			if ($insert_data_contact)
			{

				echo "<SCRIPT> //not showing me this
							alert('MESSAGE ENVOYE MERCI');
							window.location.replace('./');
						 </SCRIPT>";
			}
		}


	}
	public function dashboard($value='')
	{
		$data['sidebar'] = $this->template->load_sidebar();
		view('extra/dashboard',$data);
	}
	

	public function layout_boxed()
	{
		// $data['sidebar'] = $this->template->load_sidebar();
		view('extras/layout/layout-boxed');
	}

	public function mega_menu($value='')
	{
		view("extras/layout/mega_menu");
	}

	public function layout_horizontal($value='')
	{
		view("extras/layout/layout-horizontal");
	}

	public function layout_sidebar_scroll($value='')
	{
		$data['page'] = "extras/layout/layout-sidebar-scroll";
		$this->template->template_view($data);
	}

	public function layout_static_leftbar($value='')
	{
		$data['page'] = "extras/layout/layout-static-leftbar";
		$this->template->template_view($data);
	}

	public function app_inbox()
	{
		view("extras/layout/email_template");
	}

	public function email_compose()
	{
		$data['page'] = "extras/extra/inbox_compose";
		$this->template->template_view($data);
	}

	public function userguide()
	{
		view('userguide/index');
	}
}

/* End of file Extras.php */
/* Location: ./application/controllers/Extras.php */