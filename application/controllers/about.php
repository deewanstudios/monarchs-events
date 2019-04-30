<?php


	/**
	 * About class
	 *
	 * @package Enter product package here
	 * @author  Deewanstudios Limited
	 */
	class About extends Controller
	{

		private $m_arrayIndexer;

		public function __construct  (  )
		{
			$this  ->  m_model  =  'AboutModel';
			$this  ->  m_page_id  =  2;

		}


		protected function ModelLoader  (  )
		{
			$m_data  =  $this  ->  LoadModel  (  $this  ->  m_model  );
			return $m_data;
		}


		private function AllBodyContent  (  $arrayIndex  )
		{
			$this  ->  m_section_body  =  $this  ->  m_loaded_model  ->  ContextualContent  (  );
			$this  ->  m_section_text  =  $this  ->  m_section_body  [  $arrayIndex  ];

			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_text  );

			return $this  ->  m_section_text;
		}


		private function VisionSection  (  )
		{
			$this  ->  m_arrayIndexer  =  0;
			$this  ->  m_section_text  =  $this  ->  AllBodyContent  (  $this  ->  m_arrayIndexer  );

			$this  ->  m_section_heading  =  $this  ->  m_section_text  [  "title"  ];

			$this  ->  m_section_body  =  $this  ->  m_section_text  [  "context"  ];

			include VIEWS  .  "templates/layouts/about-content-section-layout.php";
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_body  );
			// return $this  ->  m_content_builder;

		}


		private function MissionStatementSection  (  )
		{
			$this  ->  m_arrayIndexer  =  1;
			$this  ->  m_section_text  =  $this  ->  AllBodyContent  (  $this  ->  m_arrayIndexer  );

			$this  ->  m_section_heading  =  $this  ->  m_section_text  [  "title"  ];

			$this  ->  m_section_body  =  $this  ->  m_section_text  [  "context"  ];

			include VIEWS  .  "templates/layouts/about-content-section-layout.php";

			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_body  );
		}

		private function ObjectivesSectionLists  (  )
		{
			$this  ->  m_subpage_list_heading_id  =  6;
			$this  ->  m_page_id  =  6;

			$this  ->  ListSectionBuilder  (  $this  ->  m_page_id  ,  $this  ->  m_subpage_list_heading_id  );

			/*	$this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  ListSectionBuilder
			 * (  $this  ->  m_page_id  ,  $this  ->  m_subpage_list_heading_id  )  );*/
		}


		private function CompanyEthosSection  (  )
		{
			$this  ->  m_arrayIndexer  =  2;
			$this  ->  m_section_text  =  $this  ->  AllBodyContent  (  $this  ->  m_arrayIndexer  );

			$this  ->  m_section_heading  =  $this  ->  m_section_text  [  "title"  ];

			$this  ->  m_section_body  =  $this  ->  m_section_text  [  "context"  ];

			include VIEWS  .  "templates/layouts/about-content-section-layout.php";

			// $this->CompanyEthosSectionLists();


			$this  ->  m_subpage_list_heading_id  =  1;
			$this  ->  m_page_id  =  6;

			$this  ->  ListSectionBuilder  (  $this  ->  m_page_id  ,  $this  ->  m_subpage_list_heading_id  );

		}




		private function AboutPageContentBuilder  (  )
		{


			include VIEWS  .  'templates/layouts/about-layout.php';
			return $this  ->  m_content_builder;

		}


		private function PageContent  (  )
		{


			$view  =  $this  ->  AboutPageContentBuilder  (  );
			return $view;

			// $this->m_debugger = $this->Dumper($view);

			/*
			 $this  ->  visionSection  (  )  ,
			 $this  ->  MissionStatementSection  (  )  ,
			 $this  ->  ObjectivesSection  (  )  ,
			 $this  ->  CompanyEthosSection  (  )  ,*/




		}


		private function MainContentDiv  (  )
		{
			if  (  method_exists  (  $this  ,  'PageContent'  )  )
			{

				$this  ->  m_main_content  =  "<section class=\"content\">";
				$this  ->  m_main_content  .=  "<div class=\"container\">";
				$this  ->  m_main_content  .=  "<div class=\"row\">";


				$this  ->  m_main_content  .=  $this  ->  PageContent  (  );

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
			require_once '../application/views/about/about.php';
			require_once '../application/views/templates/core/footer.php';

		}


	}
