<?php
session_start  (  );

	/**
	 * About class
	 *
	 * @package Enter product package here
	 * @author  Deewanstudios Limited
	 */
	class Testimonials extends Controller
	{


		public function __construct  (  )
		{
			$this  ->  m_model  =  'TestimonialsModel';
			$this  ->  m_page_id  =  5;

		}


		protected function ModelLoader  (  )
		{
			$m_data  =  $this  ->  LoadModel  (  $this  ->  m_model  );
			return $m_data;
		}


		private function TestimonialViews  (  )
		{
			$this  ->  m_section_text  =  $this  ->  m_loaded_model  ->  GetAllComments  (  );
			$this  ->  m_testimonials  =  $this  ->  m_section_text;
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_testimonials  );
			require_once VIEWS  .  'templates/layouts/testimonial-slider-layout.php';
			return $this  ->  m_testimonial_slide;
		}


		private function PageContent  (  )
		{

			return array  (
				$this  ->  FormView  (  )  ,
				$this  ->  TestimonialViews  (  )  ,
			);

		}


		private function MainContentDiv  (  )
		{
			if  (  method_exists  (  $this  ,  'PageContent'  )  )
			{

				$this  ->  m_main_content  =  "<section class=\"content\">";
				$this  ->  m_main_content  .=  "<div class=\"container\">";
				$this  ->  m_main_content  .=  "<div class=\"row\">";

				foreach  (  $this-> PageContent() AS $m_page_element  )
				{
					$this  ->  m_main_content  .=  $m_page_element;

				}
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



			if  (  isset  (  $_POST  [  'testimonial-submit'  ]  )  )
			{
				// print_r  (  $_POST  );
				$this  ->  FormProcessor  (  );
			}

			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/testimonials/testimonials.php';
			require_once '../application/views/templates/core/footer.php';

		}


		public function Confirmation  (  )
		{

			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/testimonials/testimonial-confirmation.php';
			require_once '../application/views/templates/core/footer.php';
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

			require_once VIEWS  .  'templates/layouts/testimonial-form-layout.php';
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_text  );
			return $this  ->  m_form_builder;
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

		public function FormProcessor  (  )
		{
			$sanitiser  =  new FormProcessor  (  );
			$this  ->  m_valid  =  TRUE;
			if  (  ($_SERVER  [  'REQUEST_METHOD'  ]  ==  'POST')  &&  (isset  (  $_POST  [  'testimonial-submit'  ]  ))  )
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


					$this  ->  m_loaded_model  ->  InsertTestimonials  (  $this  ->  m_form_field_name  ,  $this  ->  m_form_field_email  ,  $this  ->  m_form_field_message  );


					/*

					 $this  ->  EmailSender  (  $this  ->  m_form_field_name  ,  $this  ->
					 m_form_field_email  ,  $this  ->  m_form_field_message  );*/



					header  (  'location: '  .  URL  .  "testimonials/confirmation"  );
				}
				else
				{
					echo "<script>alert('There was a problem, please try again!')</script>";
				}

			}



		}


	}
