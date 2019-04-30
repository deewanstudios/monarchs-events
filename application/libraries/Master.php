<?php

	class Master
	{

		private static $_instance;
		protected $m_base_url  =  URL;
		protected $m_model  =  'MasterModel';

		public function __construct  (  )
		{
			$db  =  Database  ::  getInstance  (  );
			$this  ->  connection  =  $db  ->  getConnection  (  );

		}


		public static function getInstance  (  )
		{
			if  (  !  self  ::  $_instance  )
			{
				// If no instance then make one
				self  ::  $_instance  =  new self  (  );
			}
			return self  ::  $_instance;
		}


		protected function ModelLoader  (  )
		{
			$m_data  =  $this  ->  LoadModel  (  $this  ->  m_model  );
			return $m_data;


		}


		public function GrayUnderline  (  )
		{
			$this  ->  m_underline  =  "<hr class=\"hr-sealine-gray offset-top-34\">";
			return $this  ->  m_underline;
		}


		public function MenuButton  (  )
		{
			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			require_once '../application/views/templates/layout/for-dinner-option-section-layout.php';
			return $this  ->  m_menu_button;
		}


		public function PageBanner  (  $page_id  )
		{
			$this  ->  m_loaded_model  =  $this  ->  ModelLoader  (  );
			require_once '../application/views/templates/layout/page-header-section-layout.php';
			return $this  ->  m_page_header_banner;

		}


		public function safe_input  (  $data  )
		{

			$data  =  trim  (  $data  );
			$data  =  stripslashes  (  $data  );
			$data  =  htmlspecialchars  (  $data  );
			$data  =  htmlentities  (  $data  );
			$data  =  addslashes  (  $data  );
			return $data;
		}


		public function Dumper  (  $data  )
		{
			echo "<pre>";
			var_dump  (  $data  );
			echo "</pre>";
			return $data;
		}


	}
?>