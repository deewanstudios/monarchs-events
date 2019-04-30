<?php
	/**
	 *
	 */
	class HomeModel extends MasterModel
	{

		private $m_services_tab_images;


		public function __construct  (  )
		{

			parent  ::  __construct  (  );

			$this  ->  m_page_id  =  1;
			$this  ->  m_section_id  =  4;


		}


		public function GetSliderImages  (  )
		{

			try
			{
				$this  ->  m_page_id  =  7;
				$this  ->  m_image_purpose  =  "slider";
				$this  ->  m_order_by  =  "ASC";

				$this  ->  m_slider_images_getter  =  $this  ->  GetAllImages  (  $this  ->  m_image_purpose  ,  $this  ->  m_page_id  ,  $this  ->  m_order_by  );
				return $this  ->  m_slider_images_getter;

				// echo "<pre>";
				// var_dump ( $this -> m_slider_images_getter );
				// echo "</pre>";


			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}

		}


		public function GetServicesTabImages  (  $m_service_image_id  )
		{
			try
			{
				$this  ->  m_services_tab_images  =  $this  ->  GetServicesImagesById  (  $m_service_image_id  );
				return $this  ->  m_services_tab_images;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}

		}


		public function ContextualContent  (  )
		{
			try
			{
				$this  ->  m_content_puller  =  $this  ->  GetAllContentsByIdAndRegion  (  $this  ->  m_page_id  ,  $this  ->  m_section_id  );
				return $this  ->  m_content_puller;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetServicesTabNames  (  $m_service_id  )
		{
			try
			{
				$this  ->  m_content_puller  =  $this  ->  GetAllSubPagesById  (  $m_service_id  );
				return $this  ->  m_content_puller;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


	}
?>