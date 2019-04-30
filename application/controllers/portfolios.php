<?php


	/**
	 * About class
	 *
	 * @package Enter product package here
	 * @author  Deewanstudios Limited
	 */
	class Portfolios extends Controller
	{


		private $m_portfolio_tabs;
		private $m_portfolio_thumb;
		private $m_portfolio_path  =  PORTFOLIO;
		private $m_portfolio_id;
		private $m_portfolio_name;


		public function __construct  (  )
		{
			$this  ->  m_model  =  'PortfolioModel';
			$this  ->  m_page_id  =  4;

		}


		protected function ModelLoader  (  )
		{
			$m_data  =  $this  ->  LoadModel  (  $this  ->  m_model  );
			return $m_data;
		}


		private function AllPortfoliosView  (  )
		{
			if  (  isset  (  $_SERVER  [  "QUERY_STRING"  ]  )  )
			{
				$f_query_string  =  ltrim  (  $_SERVER  [  "QUERY_STRING"  ]  ,  "url="  );
				// return $f_query_string;
			}
			$this  ->  m_portfolio_tabs  =  $this  ->  m_loaded_model  ->  GetAllPortfolios  (  );
			// $this  ->  m_portfolio_tabs  =  $this  ->  m_loaded_model  ->
			// GetAllPortfoliosWithPictures  (  );
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_portfolio_tabs
			// );

			require '../application/views/templates/layouts/portfolio-tabs-layout-2.php';

			return $this  ->  m_content_builder;

		}


		private function PortfolioView  (  $portfolio  ,  $id  )
		{
			$path  =  $this  ->  m_portfolio_path;
			// $this  ->  m_portfolio_tabs  =  $this  ->  m_loaded_model  ->
			// GetAllPortfolios  (  );
			// $this  ->  m_portfolio_id  =  $this  ->  m_portfolio_tabs  [  1  ]  [  "id"
			// ];
			// $this  ->  m_portfolio_name  =  $this  ->  m_portfolio_tabs  [  1  ]  [
			// "portfolio_name"  ];
			$m_portfolio_id  =  $this  ->  m_portfolio_id;
			$m_portfolio_name  =  $this  ->  m_portfolio_name;
			// $this  ->  m_section_image  =  $this  ->  m_loaded_model  ->
			// GetPortfolioPictures  (  );

			/*

			 if  (  isset  (  $_GET  [  "portfolio-name"  ]  )  &&  isset  (  $_GET  [  "id"
			 ]  )  )
			 {
			 $portfolio  =  $_GET  [  "portfolio_name"  ];
			 $id  =  $_GET  [  "id"  ];

			 }*/


			if  (  isset  (  $_GET  [  "url"  ]  )  )
			{
				$f_query_string  =  ltrim  (  $_GET  [  "url"  ]  ,  "url="  );
				// return $f_query_string;
				$f_query_string  =  explode  (  "/"  ,  $f_query_string  );
				$name  =  isset  (  $f_query_string  [  2  ]  )  ?  $f_query_string  [  2  ]  :  null;
				$id  =  isset  (  $f_query_string  [  3  ]  )  ?  $f_query_string  [  3  ]  :  null;
				$this  ->  m_portfolio_name  =  str_replace  (  "-"  ,  " "  ,  $name  );
				$this  ->  m_section_image  =  $this  ->  m_loaded_model  ->  GetPortfolioPictures  (  $id  );
			}




			/*
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_portfolio_name  );
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_portfolio_id  );
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_image  );
			 $this  ->  m_debugger  =  $this  ->  Dumper  (  $f_clean_url  );*/
			// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_portfolio_tabs
			// );
/*
			$this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_section_image  );
			$this  ->  m_debugger  =  $this  ->  Dumper  (  $f_query_string  );
			$this  ->  m_debugger  =  $this  ->  Dumper  (  $name  );
			$this  ->  m_debugger  =  $this  ->  Dumper  (  $id  );
			$this  ->  m_debugger  =  $this  ->  Dumper  (  $_GET  [  "url"  ]  );
			$this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_portfolio_name  );*/



			require '../application/views/templates/layouts/portfolio-view-layout.php';

			return $this  ->  m_content_builder;

		}


		private function PageContent  (  )
		{
			return array  (  $this  ->  AllPortfoliosView  (  )  ,  );
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
			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/portfolios/portfolios.php';
			require_once '../application/views/templates/core/footer.php';

		}


		public function Portfolio  (  )
		{
			/*
			 if  (  isset  (  $_GET  [  "portfolio-name"  ]  )  &&  isset  (  $_GET  [  "id"
			 ]  )  )
			 {
			 $portfolio  =  $_GET  [  "portfolio_name"  ];
			 $id  =  $_GET  [  "id"  ];

			 }*/

			$this  ->  PageMetaData  (  $this  ->  m_page_id  );
			require_once '../application/views/templates/core/header.php';
			require_once '../application/views/portfolios/portfolio.php';
			require_once '../application/views/templates/core/footer.php';

		}


	}
