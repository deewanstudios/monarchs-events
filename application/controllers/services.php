<?php


	/**
	 * About class
	 *
	 * @package Enter product package here
	 * @author  Deewanstudios Limited
	 */
	class Services extends Controller
	{

		/*private $m_subpage_list_heading_id;*/
		/*
		 public $m_list_headings;
		 public $m_list_heading;
		 public $m_bullet_lists;
		 public $m_bullet_list;*/



		public function __construct  (  )
		{
			$this  ->  m_model  =  'ServicesModel';
			$this  ->  m_page_id  =  3;

		}


		protected function ModelLoader  (  )
		{
			$m_data  =  $this  ->  LoadModel  (  $this  ->  m_model  );
			return $m_data;
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


		/*
		 private function PartnersSection  (  )
		 {
		 $this  ->  m_section_content  =  $this  ->  PartnersSectionHeading  (  );
		 return $this  ->  m_section_content;
		 }*/



		private function PageContent  (  )
		{
			return array  (
				// $this  ->  ServicesSectionHeading  (  )  ,
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


		private function WeddingPackages  (  )
		{
			$this  ->  m_section_body  =  $this  ->  m_loaded_model  ->  GetWeddingPackages  (  );
			include '../application/views/templates/layouts/service-packages-layout.php';
			$lists  =  $this  ->  packageList  (  );
			// return $this->m_content_buider;
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_body  );
		}


		private function packageList  (  )
		{
			$m_bullet_lists  =  $this  ->  m_loaded_model  ->  GetWeddingPackageLists  (  );
			include '../application/views/templates/layouts/service-bullets-layout.php';
			// return $this->m_content_builder;
		}


		private function WeddingContent  (  )
		{
			$this  ->  m_section_heading_id  =  3;
			$this  ->  m_sub_page_id  =  1;

			$this  ->  m_section_heading  =  $this  ->  m_loaded_model  ->  GetServicesHeadings  (  $this  ->  m_section_heading_id  );

			$this  ->  m_section_content  =  $this  ->  m_loaded_model  ->  GetServicesView  (  $this  ->  m_sub_page_id  );


			include '../application/views/templates/layouts/wedding-service-layout.php';
			// $packages  =  $this  ->  WeddingPackages  (  );
			// $m_packagages  =  $this  ->  WeddingPackages  (  );
			// include '../application/views/templates/layouts/service-no-bullet-layout.php';
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_content
			// );
			return $this  ->  m_content_builder;

		}


		private function DestinationWeddingsContent  (  )
		{

			$this  ->  m_section_heading_id  =  1;
			$this  ->  m_sub_page_id  =  2;
			$this  ->  m_section_heading  =  $this  ->  m_loaded_model  ->  GetServicesHeadings  (  $this  ->  m_section_heading_id  );

			$this  ->  m_section_content  =  $this  ->  m_loaded_model  ->  GetServicesView  (  $this  ->  m_sub_page_id  );

			// $this  ->  m_section_image  =  $this  ->  SubPageImageDisplayer  (  $this  ->
			// m_page_id  ,  $this  ->  m_service_id  );


			include '../application/views/templates/layouts/service-no-bullet-layout.php';
			return $this  ->  m_content_builder;

		}


		private function ConsultantsListHeading  (  )
		{
			$this  ->  m_section_heading_id  =  5;

			$head  =  $this  ->  m_loaded_model  ->  GetServicesHeadings  (  $this  ->  m_section_heading_id  );

			return $head;

		}


		private function ConsultantsLists  (  )
		{
			$this  ->  m_subpage_list_heading_id  =  1;
			$this  ->  m_section_content  =  $this  ->  m_loaded_model  ->  GetAllLists  (  $this  ->  m_page_id  ,  $this  ->  m_subpage_list_heading_id  );
			$m_bullet_lists  =  $this  ->  m_section_content;
			include '../application/views/templates/layouts/service-bullets-layout.php';
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $m_bullet_lists  );
			// return $this  ->  m_content_builder;

		}


		private function EventsContent  (  )
		{
			$this  ->  m_section_heading_id  =  5;
			$this  ->  m_sub_page_id  =  3;
			$this  ->  m_section_heading  =  "Events";
			/*$head  =  $this  ->  m_loaded_model  ->  GetServicesHeadings  (  $this  ->
			 * m_section_heading_id  );*/

			$this  ->  m_section_content  =  $this  ->  m_loaded_model  ->  GetServicesView  (  $this  ->  m_sub_page_id  );

			$m_top  =  $this  ->  m_section_content  [  0  ]  [  "context"  ];
			$m_bottom  =  $this  ->  m_section_content  [  1  ]  [  "context"  ];
			$sub  =  $this  ->  ConsultantsListHeading  (  );
			// $m_list  =  $this  ->  ConsultantsLists  (  );
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $m_list  );
			include '../application/views/templates/layouts/event-service-layout.php';
			return $this  ->  m_content_builder;

		}


		/*
		 private function ListSectionBuilder  (  $m_subpage_id  ,  $m_list_heading_id  )
		 {
		 $this  ->  m_list_headings  =  $this  ->  m_loaded_model  ->  GetListHeadings  (
		 $m_list_heading_id  );
		 $this  ->  m_section_content  =  $this  ->  m_loaded_model  ->  GetAllLists  (
		 $m_subpage_id  ,  $m_list_heading_id  );
		 $this  ->  m_bullet_lists  =  $this  ->  m_section_content;
		 require
		 '../application/views/templates/layouts/service-bullets-with-heading-layout.php';
		 return $this  ->  m_content_builder;
		 }*/



		private function SpecialEvents  (  )
		{
			$this  ->  m_subpage_list_heading_id  =  2;
			$this  ->  ListSectionBuilder  (  $this  ->  m_page_id  ,  $this  ->  m_subpage_list_heading_id  );
		}


		private function CorporateAndLuxuryBrands  (  )
		{
			$this  ->  m_subpage_list_heading_id  =  3;
			$this  ->  ListSectionBuilder  (  $this  ->  m_page_id  ,  $this  ->  m_subpage_list_heading_id  );
		}


		private function CharitiesAndNonProfit  (  )
		{
			$this  ->  m_subpage_list_heading_id  =  4;
			$this  ->  ListSectionBuilder  (  $this  ->  m_page_id  ,  $this  ->  m_subpage_list_heading_id  );
		}


		private function EventDesignLists  (  )
		{
			$this  ->  m_subpage_list_heading_id  =  5;
			$this  ->  m_sub_page_id  =  4;
			$this  ->  ListSectionBuilder  (  $this  ->  m_sub_page_id  ,  $this  ->  m_subpage_list_heading_id  );
		}


		private function HostedEventLists  (  )
		{
			return array  (
				$this  ->  SpecialEvents  (  )  ,
				$this  ->  CorporateAndLuxuryBrands  (  )  ,
				$this  ->  CharitiesAndNonProfit  (  )
			);
		}


		private function EventDesignAndStylingLists  (  )
		{
			$this  ->  m_subpage_list_heading_id  =  5;
			$this  ->  m_sub_page_id  =  4;
			$this  ->  ListSectionBuilder  (  $this  ->  m_sub_page_id  ,  $this  ->  m_subpage_list_heading_id  );

		}


		private function EventsDesignManagementContent  (  )
		{
			$this  ->  m_section_heading_id  =  1;
			$this  ->  m_sub_page_id  =  4;

			$this  ->  m_section_content  =  $this  ->  m_loaded_model  ->  GetServicesView  (  $this  ->  m_sub_page_id  );
			$this  ->  m_section_heading  =  $this  ->  m_section_content  [  0  ]  [  "title"  ];
			$m_top  =  $this  ->  m_section_content  [  0  ]  [  "context"  ];
			$m_bottom  =  $this  ->  m_section_content  [  1  ]  [  "context"  ];
			// $m_list  =  $this  ->  EventDesignAndStylingLists  (  );

			// $this  ->  m_section_image  =  $this  ->  SubPageImageDisplayer  (  $this  ->
			// m_page_id  ,  $this  ->  m_service_id  );
			//
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_page_id  );

			include '../application/views/templates/layouts/event-design-and-management-layout.php';
			return $this  ->  m_content_builder;
		}


		private function RentalsContent  (  )
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


		private function ServicesContents  (  $view  )
		{

			return ($view);
		}


		private function ServicesContentsView  (  $view  )
		{

			if  (  method_exists  (  $this  ,  "ServicesContents"  )  )
			{

				$this  ->  m_main_content  =  "<section class=\"content\">";
				$this  ->  m_main_content  .=  "<div class=\"container\">";
				$this  ->  m_main_content  .=  "<div class=\"row\">";

				$this  ->  m_main_content  .=  $this  ->  ServicesContents  (  $view  );

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
			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/services/services.php';
			require_once '../application/views/templates/core/footer.php';

		}


		public function Weddings  (  )
		{
			$this  ->  m_sub_page_id  =  1;
			$purpose ="banner-image";
			$this  ->  PageMetaData  (  $this  ->  m_page_id  );
			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/services/weddings.php';
			require_once '../application/views/templates/core/footer.php';

		}


		public function DestinationWeddings  (  )
		{
			$this  ->  m_sub_page_id  =  2;
			$this  ->  PageMetaData  (  $this  ->  m_page_id  );
			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/services/destination-weddings.php';
			require_once '../application/views/templates/core/footer.php';

		}


		public function Events  (  )
		{
			$this  ->  m_sub_page_id  =  3;
			$this  ->  PageMetaData  (  $this  ->  m_page_id  );
			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/services/events.php';
			require_once '../application/views/templates/core/footer.php';

		}


		public function EventDesignAndManagement  (  )
		{
			$this  ->  m_sub_page_id  =  4;
			$this  ->  PageMetaData  (  $this  ->  m_page_id  );
			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/services/event-design-management.php';
			require_once '../application/views/templates/core/footer.php';

		}


		public function Rentals  (  )
		{
			$this  ->  m_sub_page_id  =  5;
			$purpose ="banner-image";
			$this  ->  PageMetaData  (  $this  ->  m_page_id  );
			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/services/rentals.php';
			require_once '../application/views/templates/core/footer.php';

		}


	}
