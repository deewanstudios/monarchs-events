<?

	/**
	 * Controller class
	 * This is the class that holds all the universal methods and properties to be
	 * used site wide
	 * This is the parent class to all controller classes
	 *
	 * @package com.kspiceafroresturant.application.libraries.Controller
	 * @author  Deewanstudios Limited
	 */

	class Controller
	{

		/*
		 model related variables
		 */
		protected $m_model;
		protected $m_loaded_model;
		protected $m_pulled_content;

		/*
		 site wide related variables
		 */
		public $m_project_name  =  "Monarchs Events";
		protected $m_base_url  =  URL;
		protected $m_link;
		protected $m_image_directory  =  IMAGES;
		protected $m_thumb_directory  =  THUMBS;
		protected $m_page_id;
		protected $m_sub_page_id;

		protected $m_underline;
		protected $m_large_spacer;
		protected $m_br_tag_no_css_class  =  BR;
		protected $space  =  " ";
		protected $m_divider_with_link;
		protected $m_link_button;

		protected $m_menu_button;
		protected $m_secondary_jubotron_button;

		protected $m_substring_start;
		protected $m_substring_end;

		protected $m_table_reservation_section;
		protected $m_reservation_form_builder;
		protected $m_reservation_form_builder_2;
		protected $m_reservation_form_modal_builder;

		/*
		 Debugger variable
		 */
		protected $m_debugger;



		//  Page meta data variables
		protected $m_meta_data;
		protected $m_final_page_meta_data;
		protected $m_page_meta_data;
		protected $m_page_meta_datum;
		protected $m_page_name;
		protected $m_page_title;
		protected $m_page_keywords;
		protected $m_page_description;
		protected $m_page_url;
		protected $m_page_author  =  "Monarchs Events Limited";
		protected $m_open_graph_title;
		protected $m_open_graph_keywords;
		protected $m_open_graph_description;
		protected $m_open_graph_url;
		protected $m_open_graph_site_name  =  "Monarchs Events";
		protected $m_open_graph_type  =  "Website";
		protected $m_page_developed_by  =  "Perfect Code Services. A Subsidary of Deewanstudios Limited";
		protected $m_page_developer_website  =  "http://deewanstudios.com/";


		/*
		 Additional  Class Loader
		 Member Variables To Load Exteternal Classes
		 */

		protected $m_meta_data_class;


		/*
		 individual page related variables
		 */
		// protected $m_section_heading_id;
		protected $m_section_heading;
		protected $m_section_body;
		protected $m_section_image;
		protected $m_section_image_name;
		protected $m_section_image_description;
		protected $m_section_image_caption;
		protected $m_section_image_path;
		protected $m_content_builder;
		protected $m_main_content;
		protected $m_section_text;


		/*
		 Servicee Page related variables
		 */

		protected $m_service_names;
		protected $m_service_id;
		protected $m_service_descriptions;
		protected $m_service_images;
		protected $m_service_image_id;
		protected $m_services_tabs;

		/*
		 page headings/banner variables
		 */
		protected $m_page_header_banner;
		protected $m_top_banner;
		protected $m_top_banner_page_name;
		protected $m_top_banner_page_image;

		/*
		 Under Construction variables
		 */
		protected $m_page_underconstruction;

		protected $m_heading_1;
		protected $m_heading_2;
		protected $m_heading_3;
		protected $m_heading_4;
		protected $m_heading_5;
		protected $m_heading_6;


		protected $m_clear;



		protected $m_subpage_list_heading_id;
		protected $m_list_headings;
		protected $m_list_heading;
		protected $m_bullet_lists;
		protected $m_bullet_list;



		public function __construct  (  )
		{
			$this  ->  m_model  =  'MasterModel';

		}


		private function ModelLoader  (  )
		{
			$m_data  =  $this  ->  LoadModel  (  $this  ->  m_model  );
			return $m_data;
		}


		public function LoadModel  (  $model  )
		{
			require_once MODELS  .  $model  .  '.php';

			return new $model  (  );

		}


		public function HeaderOne  (  $m_header_text  )
		{
			include '../application/views/templates/layouts/heading-h1-layout.php';
			return $this  ->  m_heading_1;

		}


		public function HeaderTwo  (  $m_header_text  )
		{
			include '../application/views/templates/layouts/heading-h2-layout.php';
			return $this  ->  m_heading_2;

		}


		public function HeaderThree  (  $m_header_text  )
		{
			include '../application/views/templates/layouts/heading-h3-layout.php';
			return $this  ->  m_heading_3;

		}


		public function HeaderFour  (  $m_header_text  )
		{
			include '../application/views/templates/layouts/heading-h4-layout.php';
			return $this  ->  m_heading_4;

		}


		public function HeaderFive  (  $m_header_text  )
		{
			include '../application/views/templates/layouts/heading-h5-layout.php';
			return $this  ->  m_heading_5;

		}


		public function HeaderSix  (  $m_header_text  )
		{
			include '../application/views/templates/layouts/heading-h6-layout.php';
			return $this  ->  m_heading_6;

		}


		public function ClearDiv  (  )
		{
			$this  ->  m_clear  =  "<div class=\"clear\"></div>";
			return $this  ->  m_clear;
		}


		/*
		 public function Slider  (  )
		 {

		 $this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
		 $m_slider_images  =  $this  ->  m_loaded_model  ->  GetSliderImages  (  );
		 require_once '../application/views/templates/layouts/slider-layout.php';
		 return $this  ->  m_slider;
		 }*/



		public function StringSplitter  (  )
		{
			return $this  ->  m_br_tag_no_css_class;

		}


		public function LinkButton  (  $link_href  ,  $link_text  )
		{


			$this  ->  m_link_button  =  "<div class=\"cell-xs-12 offset-top-47\">";
			$this  ->  m_link_button  .=  "<div class=\"divider-with-link text-center\">";
			$this  ->  m_link_button  .=  "<hr class=\"hr-sealine-gray hr-fullwidth\">";
			$this  ->  m_link_button  .=  "<a href=\"{$link_href}\" class=\"btn-link btn-link-primary btn-link-variant-1\">";
			$this  ->  m_link_button  .=  "<span>";
			$this  ->  m_link_button  .=  $link_text;
			$this  ->  m_link_button  .=  "</span>";
			$this  ->  m_link_button  .=  "<span class=\"overlay\">";
			$this  ->  m_link_button  .=  "</span>";
			$this  ->  m_link_button  .=  "</a>";
			$this  ->  m_link_button  .=  "</div>";
			$this  ->  m_link_button  .=  "</div>";
			return $this  ->  m_link_button;


		}


		public function MainPageBanners  (  $page_id  )
		{

			$this  ->  m_top_banner  =  $this  ->  m_loaded_model  ->  GetAllPagesById  (  $page_id  );
			// $f_sub_page  =  $this  ->  m_loaded_model  ->  GetAllSubPagesById  (
			// $subpage_id  );

			$main_page_name  =  $this  ->  m_top_banner  [  0  ]  [  "name"  ];
			$main_page_url  =  $this  ->  m_top_banner  [  0  ]  [  "url"  ];
			// $sub_page_name  =  $f_sub_page  [  0  ]  [  "name"  ];
			// $sub_page_url  =  $f_sub_page  [  0  ]  [  "subpage_url"  ];

			$f_breadcrumbs  =  array  ( array  (
					"name"  =>  $main_page_name  ,
					"url"  =>  $main_page_url
				)  );


			$purpose  =  "banner-image";
			$this  ->  m_top_banner_page_image  =  $this  ->  m_loaded_model  ->  GetAllImagesByPageIdAndPurpose  (  $page_id  ,  $purpose  );

			$i  =  1;

			// $this  ->  Dumper  (  $main_page_name  );
			// $this  ->  Dumper  (  $sub_page_name  );
			// $this  ->  Dumper  (  $f_sub_page  );
			// $this  ->  Dumper  (  $f_breadcrumbs  );
			// $this  ->  Dumper  (  $this  ->  m_top_banner_page_image  );
			include '../application/views/templates/layouts/page-banner-section-layout.php';
			return $this  ->  m_page_header_banner;
		}


		public function SubPageBanners  (  $page_id  ,  $subpage_id  )
		{

			$this  ->  m_top_banner  =  $this  ->  m_loaded_model  ->  GetAllPagesById  (  $page_id  );
			$f_sub_page  =  $this  ->  m_loaded_model  ->  GetAllSubPagesById  (  $subpage_id  );

			$main_page_name  =  $this  ->  m_top_banner  [  0  ]  [  "name"  ];
			$main_page_url  =  $this  ->  m_top_banner  [  0  ]  [  "url"  ];
			$sub_page_name  =  $f_sub_page  [  0  ]  [  "name"  ];
			$sub_page_url  =  $f_sub_page  [  0  ]  [  "subpage_url"  ];

			$f_breadcrumbs  =  array  (
				array  (
					"name"  =>  $main_page_name  ,
					"url"  =>  $main_page_url
				)  ,
				array  (
					"name"  =>  $sub_page_name  ,
					"url"  =>  $sub_page_url
				)
			);
			$purpose  =  "banner-image";
			$this  ->  m_top_banner_page_image  =  $this  ->  m_loaded_model  ->  GetAllSubImagesByPageIdAndPurpose  (  $page_id  ,  $subpage_id  ,  $purpose  );

			$i  =  1;

			// $this  ->  Dumper  (  $main_page_name  );
			// $this  ->  Dumper  (  $sub_page_name  );
			// $this  ->  Dumper  (  $f_sub_page  );
			// $this  ->  Dumper  (  $this  ->  m_top_banner_page_image  );
			include '../application/views/templates/layouts/page-banner-section-layout.php';
			return $this  ->  m_page_header_banner;
		}


		public function UnderConstruction  (  )
		{
			$this  ->  m_page_id  =  6;
			$m_section_id  =  4;
			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			$this  ->  m_pulled_content  =  $this  ->  m_loaded_model  ->  GetAllPageContents  (  $this  ->  m_page_id  ,  $m_section_id  );
			$this  ->  m_section_heading  =  $this  ->  m_pulled_content  [  0  ]  [  "heading_name"  ];
			$this  ->  m_section_body  =  $this  ->  m_pulled_content  [  0  ]  [  "context"  ];
			$this  ->  m_section_text  =  array  (  );
			$this  ->  m_section_text  [  ]  =  $this  ->  m_section_heading;
			$this  ->  m_section_text  [  ]  =  $this  ->  m_section_body;
			require_once '../application/views/templates/layout/underconstruction-section-layout.php';
			return $this  ->  m_content_builder;
		}


		public function Dumper  (  $data  )
		{
			echo "<pre>";
			var_dump  (  $data  );
			echo "</pre>";
			return $data;
		}


		public function AllPageMetaData  (  $m_pages_id  )
		{

			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			$this  ->  m_pulled_content  =  $this  ->  m_loaded_model  ->  GetAllPageMetaData  (  $m_pages_id  );
			$this  ->  m_page_meta_data  =  $this  ->  m_pulled_content;
			foreach  (  $this->m_page_meta_data AS $this->m_page_meta_datum  )
			{
				$this  ->  m_page_name  =  $this  ->  m_page_meta_datum  [  "page_name"  ];
				$this  ->  m_page_title  =  $this  ->  m_page_meta_datum  [  "page_title"  ];
				$this  ->  m_page_keywords  =  $this  ->  m_page_meta_datum  [  "page_keywords"  ];
				$this  ->  m_page_description  =  $this  ->  m_page_meta_datum  [  "page_description"  ];
				$this  ->  m_page_url  =  URL  .  $this  ->  m_page_meta_datum  [  "page_url"  ];
				$this  ->  m_page_author;
				$this  ->  m_open_graph_title  =  $this  ->  m_page_title;
				$this  ->  m_open_graph_keywords  =  $this  ->  m_page_keywords;
				$this  ->  m_open_graph_description  =  $this  ->  m_page_description;
				$this  ->  m_open_graph_url  =  $this  ->  m_page_url;
				$this  ->  m_open_graph_site_name;
				$this  ->  m_open_graph_type;

			}

		}


		public function PageMetaData  (  $m_pages_id  )
		{
			$this  ->  m_final_page_meta_data  =  $this  ->  AllPageMetaData  (  $m_pages_id  );
			return $this  ->  m_final_page_meta_data;
		}


		public function MapSectionView  (  )
		{
			$this  ->  m_section_heading  =  "Find Us Here";
			require_once '../application/views/templates/layouts/map-section-layout.php';
			return $this  ->  m_content_builder;
		}


		public function ListSectionBuilder  (  $m_subpage_id  ,  $m_list_heading_id  )
		{
			$this  ->  m_list_headings  =  $this  ->  m_loaded_model  ->  GetListHeadings  (  $m_list_heading_id  );
			$this  ->  m_section_content  =  $this  ->  m_loaded_model  ->  GetAllLists  (  $m_subpage_id  ,  $m_list_heading_id  );
			$this  ->  m_bullet_lists  =  $this  ->  m_section_content;
			include '../application/views/templates/layouts/service-bullets-with-heading-layout.php';
			return $this  ->  m_content_builder;
		}


		public function MainPageImageDisplayer  (  $m_page_id  )
		{
			$this  ->  m_section_image  =  $this  ->  m_loaded_model  ->  GetAllImagesByPageId  (  $m_page_id  );
			// $this  ->  Dumper  (  $this  ->  m_section_image  );
			include VIEWS  .  'templates/layouts/page-images-layout.php';
			// return $this  ->  m_content_builder;

		}


		public function SubPageImageDisplayer  (  $m_page_id  ,  $m_subpage_id  )
		{

			$this  ->  m_section_image  =  $this  ->  m_loaded_model  ->  GetAllSubPagesImages  (  $m_page_id  ,  $m_subpage_id  );
			$f_section_images  =  $this  ->  m_section_image;
			// $this  ->  Dumper  (    );
			include '../application/views/templates/layouts/page-images-layout.php';
			// return $this  ->  m_content_builder;

		}


	}
?>
