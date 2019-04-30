<?php


	class Navigation
	{

		protected $m_controller;
		protected $m_model  =  'NavigationModel';
		protected $m_loaded_model;
		protected $m_base_url  =  URL;
		protected $m_image_directory  =  IMAGES;
		protected $m_navigation;
		protected $m_sub_navigation;
		protected $m_footer;
		protected $m_slider_jumbotron;
		protected $m_large_spacer;
		protected $m_string_splitter;
		protected $m_project_name;
		protected $m_social_icons_images;
		// protected $m_image_path ="images/";
		public function __construct  (  )
		{
			$this  ->  m_controller  =  new Controller  (  );
			$this  ->  m_string_splitter  =  $this  ->  m_controller  ->  StringSplitter  (  );
			$this  ->  m_project_name  =  $this  ->  m_controller  ->  m_project_name;

		}


		protected function ModelLoader  (  )
		{
			$m_data  =  $this  ->  m_controller  ->  LoadModel  (  $this  ->  m_model  );
			return $m_data;
		}


		public function SocialIcons  (  )
		{

			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			$this  ->  m_social_icons_images  =  $this  ->  m_loaded_model  ->  GetSliderImages  (  );
			include '../application/views/templates/layouts/social-media-icons-layout.php';
			return $this  ->  m_social_icons;
		}


		public function OverlayLogo  (  )
		{

			require_once '../application/views/templates/layouts/big-logo-layout.php';
			return $this  ->  m_overlay_logo;

		}


		public function LandingPageHeader  (  )
		{
			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			$m_navigation  =  $this  ->  m_loaded_model  ->  GetLinks  (  );
			$m_sub_navigation  =  $this  ->  m_loaded_model  ->  GetSubLinks  (  );
			require_once '../application/views/templates/layouts/landing-navigation-layout.php';
			return $this  ->  m_navigation;
		}


		public function PageHeader  (  )
		{
			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			$m_navigation  =  $this  ->  m_loaded_model  ->  GetLinks  (  );
			$m_sub_navigation  =  $this  ->  m_loaded_model  ->  GetSubLinks  (  );

			require_once '../application/views/templates/layouts/main-navigation-layout.php';
			return $this  ->  m_navigation;
		}


		public function SiteFooter  (  )
		{
			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );

			$copy  =  date  (  "Y"  );

			require '../application/views/templates/layouts/site-footer-layout.php';
			return $this  ->  m_footer;

		}


	}
?>