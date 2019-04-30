<?php


	/**
	 * Home class
	 *
	 * @package Enter product package here
	 * @author  Deewanstudios Limited
	 */
	class Home extends Controller
	{
		private $m_featured_menu_category;
		protected $m_featured_menu;
		protected $m_featured_menu_list_item;


		public function __construct  (  )
		{
			$this  ->  m_model  =  'HomeModel';
			$this  ->  m_page_id  =  1;
			$m_clear  =  $this  ->  ClearDiv  (  );

		}


		protected function ModelLoader  (  )
		{
			$m_data  =  $this  ->  LoadModel  (  $this  ->  m_model  );
			return $m_data;
		}


		public function Slider  (  )
		{

			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			$m_slider_images  =  $this  ->  m_loaded_model  ->  GetSliderImages  (  );
			// $this->m_debugger = $this->Dumper($m_slider_images);
			require_once '../application/views/templates/layouts/slider-layout.php';
			return $this  ->  m_slider;
		}


		private function ServicesSectionHeading  (  )
		{
			$this  ->  m_section_heading  =  "our services";
			$m_header  =  $this  ->  HeaderThree  (  $this  ->  m_section_heading  );
			return $m_header;
		}


		private function PartnersSectionHeading  (  )
		{
			$this  ->  m_section_heading  =  "our partners";
			$m_header  =  $this  ->  HeaderThree  (  $this  ->  m_section_heading  );
			return $m_header;
		}


		private function WeddingService  (  )
		{

			$this  ->  m_service_id  =  1;
			$this  ->  m_service_image_id  =  1;
			$this  ->  m_service_names  =  $this  ->  m_loaded_model  ->  GetServicesTabNames  (  $this  ->  m_service_id  );


			$this  ->  m_service_images  =  $this  ->  m_loaded_model  ->  GetServicesTabImages  (  $this  ->  m_service_image_id  );


			/*
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_names  );
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_images
			 );*/


			return array  (
				$this  ->  m_service_names  ,
				$this  ->  m_service_images
			);
		}


		private function DestinationWeddingService  (  )
		{

			$this  ->  m_service_id  =  2;
			$this  ->  m_service_image_id  =  14;
			$this  ->  m_service_names  =  $this  ->  m_loaded_model  ->  GetServicesTabNames  (  $this  ->  m_service_id  );


			$this  ->  m_service_images  =  $this  ->  m_loaded_model  ->  GetServicesTabImages  (  $this  ->  m_service_image_id  );


			/*
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_names  );
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_images
			 );*/


			return array  (
				$this  ->  m_service_names  ,
				$this  ->  m_service_images
			);
		}


		private function EventsService  (  )
		{

			$this  ->  m_service_id  =  3;
			$this  ->  m_service_image_id  =  13;
			$this  ->  m_service_names  =  $this  ->  m_loaded_model  ->  GetServicesTabNames  (  $this  ->  m_service_id  );


			$this  ->  m_service_images  =  $this  ->  m_loaded_model  ->  GetServicesTabImages  (  $this  ->  m_service_image_id  );


			/*
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_names  );
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_images
			 );*/


			return array  (
				$this  ->  m_service_names  ,
				$this  ->  m_service_images
			);
		}


		private function EventDesignManagementService  (  )
		{

			$this  ->  m_service_id  =  4;
			$this  ->  m_service_image_id  =  15;
			$this  ->  m_service_names  =  $this  ->  m_loaded_model  ->  GetServicesTabNames  (  $this  ->  m_service_id  );


			$this  ->  m_service_images  =  $this  ->  m_loaded_model  ->  GetServicesTabImages  (  $this  ->  m_service_image_id  );


			/*
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_names  );
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_images
			 );*/


			return array  (
				$this  ->  m_service_names  ,
				$this  ->  m_service_images
			);
		}


		private function RentalsService  (  )
		{

			$this  ->  m_service_id  =  5;
			$this  ->  m_service_image_id  =  16;
			$this  ->  m_service_names  =  $this  ->  m_loaded_model  ->  GetServicesTabNames  (  $this  ->  m_service_id  );


			$this  ->  m_service_images  =  $this  ->  m_loaded_model  ->  GetServicesTabImages  (  $this  ->  m_service_image_id  );


			/*
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_names  );
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_service_images
			 );*/


			return array  (
				$this  ->  m_service_names  ,
				$this  ->  m_service_images
			);
		}


		private function ServicesSectionTabs  (  )
		{
			$this  ->  m_section_content  =  array  (  );
			$this  ->  m_section_content  [  ]  =  $this  ->  WeddingService  (  );
			$this  ->  m_section_content  [  ]  =  $this  ->  DestinationWeddingService  (  );
			$this  ->  m_section_content  [  ]  =  $this  ->  EventsService  (  );
			$this  ->  m_section_content  [  ]  =  $this  ->  EventDesignManagementService  (  );
			$this  ->  m_section_content  [  ]  =  $this  ->  RentalsService  (  );
			$this  ->  m_services_tabs  =  array_merge  (  $this  ->  m_section_content  );
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_services_tabs  );
			$this  ->  m_content_builder  =  "<section class=\"\">";
			require_once '../application/views/templates/layouts/services-tab-layout.php';
			$this  ->  m_content_builder  .=  "</section>";
			return $this  ->  m_content_builder;
		}


		private function PartnersSectionTabs  (  )
		{


		}


		private function ServicesSection  (  )
		{

			$this  ->  m_section_content  =  $this  ->  ServicesSectionTabs  (  );
			return $this  ->  m_section_content;

		}


		private function PartnersSection  (  )
		{
			$this  ->  m_section_content  =  $this  ->  PartnersSectionHeading  (  );
			return $this  ->  m_section_content;
		}


		private function PageContent  (  )
		{
			return array  (
				$this  ->  ServicesSectionHeading  (  )  ,
				$this  ->  ServicesSection  (  )  ,
				// $this  ->  PartnersSection  (  )  ,
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

				$this  ->  m_main_content  .=  "<h2>";
				$this  ->  m_main_content  .=  "There is currently no body content to dispay";
				$this  ->  m_main_content  .=  "</h2>";

				$this  ->  m_main_content  .=  "</div>";
				$this  ->  m_main_content  .=  "</div>";
				$this  ->  m_main_content  .=  "</section>";
				return $this  ->  m_main_content;

			}


		}


		public function index  (  )
		{

			$this  ->  PageMetaData  (  $this  ->  m_page_id  );
			require_once '../application/views/templates/core/landing-header.php';
			require_once '../application/views/home/index.php';
			require_once '../application/views/templates/core/landing-footer.php';
		}


	}
?>