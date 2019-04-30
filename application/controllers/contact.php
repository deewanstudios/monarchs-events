<?php

	session_start  (  );
	/**
	 * Contact class
	 *
	 * @package Enter product package here
	 * @author  Deewanstudios Limited
	 */
	class Contact extends Controller
	{

		public function __construct  (  )
		{
			$this  ->  m_model  =  'ContactModel';
			$this  ->  m_page_id  =  6;
			// $this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
		}


		protected function ModelLoader  (  )
		{
			$m_data  =  $this  ->  LoadModel  (  $this  ->  m_model  );
			return $m_data;
		}


		private function ContactInformationView  (  )
		{
			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			$this  ->  m_section_text  =  $this  ->  m_loaded_model  ->  ContextualContent  (  );
			/*
			 $this  ->  m_section_heading  =  $this  ->  m_section_text  [  0  ]  [
			 "heading_name"  ];
			 $this  ->  m_section_body  =  $this  ->  m_section_text  [  0  ]  [  "context"
			 ];*/

			require_once VIEWS  .  'templates/layouts/contact-info-section-layout.php';
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_text  );
			return $this  ->  m_content_builder;
		}


		private function FormView  (  )
		{
			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			$this  ->  m_section_text  =  $this  ->  m_loaded_model  ->  ContextualContent  (  );
			/*
			 $this  ->  m_section_heading  =  $this  ->  m_section_text  [  0  ]  [
			 "heading_name"  ];
			 $this  ->  m_section_body  =  $this  ->  m_section_text  [  0  ]  [  "context"
			 ];*/

			require_once VIEWS  .  'templates/layouts/contact-us-form-layout.php';
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_text  );
			return $this  ->  m_contact_form;
		}


		private function MapView  (  )
		{
			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			$this  ->  m_section_text  =  $this  ->  m_loaded_model  ->  ContextualContent  (  );
			/*
			 $this  ->  m_section_heading  =  $this  ->  m_section_text  [  0  ]  [
			 "heading_name"  ];
			 $this  ->  m_section_body  =  $this  ->  m_section_text  [  0  ]  [  "context"
			 ];*/

			require_once VIEWS  .  'templates/layouts/map-section-layout.php';
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_text  );
			return $this  ->  m_content_builder;
		}


		private function MainContentDiv  (  )
		{
			if  (  method_exists  (  $this  ,  'ContactInformationView'  )  &&  method_exists  (  $this  ,  'FormView'  )  )
			{

				$this  ->  m_main_content  =  "<section class=\"content\">";
				$this  ->  m_main_content  .=  "<div class=\"container\">";
				$this  ->  m_main_content  .=  "<div class=\"row\">";


				$this  ->  m_main_content  .=  $this  ->  ContactInformationView  (  );
				$this  ->  m_main_content  .=  $this  ->  FormView  (  );

				$this  ->  m_main_content  .=  "</div>";
				$this  ->  m_main_content  .=  "</div>";
				$this  ->  m_main_content  .=  "</section>";

				return $this  ->  m_main_content;

			}
			else
			{

				$this  ->  m_main_content  =  "<section class=\"content\">";
				$this  ->  m_main_content  .=  "<div class=\"container\">";
				$this  ->  m_main_content  .=  "<div class=\"row\">";

				$this  ->  m_main_content  .=  "<section>";
				$this  ->  m_main_content  .=  "<h2>";
				$this  ->  m_main_content  .=  "There is currently no body content to dispay";
				$this  ->  m_main_content  .=  "</h2>";
				$this  ->  m_main_content  .=  "</section>";

				$this  ->  m_main_content  .=  "</div>";
				$this  ->  m_main_content  .=  "</div>";
				$this  ->  m_main_content  .=  "</section>";
				return $this  ->  m_main_content;

			}


		}


		public function index  (  )
		{

			$this  ->  PageMetaData  (  $this  ->  m_page_id  );

			if  (  isset  (  $_POST  [  'contact-submit'  ]  )  )
			{
				// print_r  (  $_POST  );
				$this  ->  ContactFormProcessor  (  );
			}
			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/contact/contact-us.php';
			require_once '../application/views/templates/core/footer.php';

		}


		public function Confirmation  (  )
		{

			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/contact/contact-confirmation.php';
			require_once '../application/views/templates/core/footer.php';
		}


		private function ConfirmationPageContent  (  )
		{
			$fullname  =  $_SESSION  [  'name'  ];
			$this  ->  m_section_heading  =  "Confirmation Notification";
			$this  ->  m_section_body  =  "Hi "  .  $fullname  .  ", thanks for taking the time to contact us."  .  BR  .  "We will get back to you as soon as possible.";
			$redirect  =  "<p> You will be redirected to the home page in:</p>";
			$countdown  =  10;
			$this  ->  m_section_text  =  array  (  );
			$this  ->  m_section_text  [  ]  =  $this  ->  m_section_heading;
			$this  ->  m_section_text  [  ]  =  $this  ->  m_section_body;
			$this  ->  m_section_text  [  ]  =  $redirect;
			$this  ->  m_section_text  [  ]  =  "<div id=\"counter\">"  .  $countdown  .  "</div>";
			return $this  ->  m_section_text;
		}


		private function ConfirmationView  (  )
		{
			$this  ->  m_section_text  =  $this  ->  ConfirmationPageContent  (  );
			require_once '../application/views/templates/layouts/confirmation-view-layout.php';
			return $this  ->  m_content_builder;
		}


		/*
		 Contact Form Processing
		 */

		public function ContactFormProcessor  (  )
		{
			$sanitiser  =  new FormProcessor  (  );
			$this  ->  m_valid  =  TRUE;
			if  (  ($_SERVER  [  'REQUEST_METHOD'  ]  ==  'POST')  &&  (isset  (  $_POST  [  'contact-submit'  ]  ))  )
			{

				if  (  empty  (  $_POST  [  'name'  ]  )  )
				{
					$this  ->  m_form_field_name_error  =  "Your name is required. Please enter your name";
					$this  ->  m_valid  =  FALSE;
				}
				else
				{
					$this  ->  m_form_field_name  =  $sanitiser  ->  safe_input  (  $_POST  [  'name'  ]  );
					$_SESSION  [  'name'  ]  =  $this  ->  m_form_field_name;

				}

				if  (  empty  (  $_POST  [  'email'  ]  )  )
				{
					$this  ->  m_form_field_email_error  =  "Your email is required. Please enter your email";
					$this  ->  m_valid  =  FALSE;
				}
				else
				{
					$this  ->  m_form_field_email  =  $sanitiser  ->  safe_input  (  $_POST  [  'email'  ]  );
				}


				if  (  empty  (  $_POST  [  'phone-number'  ]  )  )
				{
					$this  ->  m_form_field_phone_number  =  "";
				}
				else
				{
					$this  ->  m_form_field_phone_number  =  $sanitiser  ->  safe_input  (  $_POST  [  'phone-number'  ]  );
				}

				if  (  empty  (  $_POST  [  'message'  ]  )  )
				{
					$this  ->  m_form_field_message  =  "";
				}
				else
				{
					$this  ->  m_form_field_message  =  $sanitiser  ->  safe_input  (  $_POST  [  'message'  ]  );
				}

				if  (  $this  ->  m_valid  ==  TRUE  )
				{
					$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );


					$this  ->  m_loaded_model  ->  InsertContactFormDetails  (  $this  ->  m_form_field_name  ,  $this  ->  m_form_field_email  ,  $this  ->  m_form_field_phone_number  ,  $this  ->  m_form_field_message  );



					$this  ->  EmailSender  (  $this  ->  m_form_field_name  ,  $this  ->  m_form_field_email  ,  $this  ->  m_form_field_message  );


					header  (  'location: '  .  URL  .  "contact/confirmation"  );
				}
				else
				{
					echo "<script>alert('There was a problem, please try again!')</script>";
				}

			}



		}


		// end form processing



		private function EmailSender  (  $fullname  ,  $email  ,  $message  )
		{

			// $to  =  'ogecreations@yahoo.co.uk';
			$to  =  'yinka@monarchsevents.com';
			// note the comma

			$emailSubject  =  'A message from your site visitor';

			$trimmedMessage  =  (($message));
			$wrapped  =  wordwrap  (  $trimmedMessage  ,  70  );
			$body  =  <<<EOD

			Contact Information:<br>

			Full Name: $fullname <br>

			Email Address: $email<br>

			<br><hr><br>
			<p>$wrapped</p>


EOD;

			$headers  =  'MIME-Version: 1.0'  .  "\r\n";
			$headers  .=  'Content-type: text/html; charset=iso-8859-1'  .  "\r\n";
			$headers  .=  'From: Contact Form <noreply@deewanstudios.com/>'  .  "\r\n";
			// $headers  .=  'Bcc: info@deewanstudios.com'  .  "\r\n";

			// Mail it
			mail  (  $to  ,  $emailSubject  ,  $body  ,  $headers  );


		}


	}
?>