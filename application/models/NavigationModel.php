<?
	/**
	 * NavigationModel class
	 * This is the class that holds all the methods for retrieving data from the
	 * database for the website linksS page
	 *
	 * @package com.Monarchs Events.Navigation
	 * @author  Deewanstudios Limited
	 */
	class NavigationModel extends MasterModel
	{

		protected $m_link_getter;
		protected $m_slider_images_getter;
		protected $m_page_visibility  =  TRUE;
		protected $m_page_id;
		protected $m_image_purpose;



		public function GetLinks  (  )
		{

			try
			{
				$this  ->  m_link_getter  =  $this  ->  GetAllPages  (  $this  ->  m_page_visibility  );
				return $this  ->  m_link_getter;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}

		}


		public function GetSubLinks  (  )
		{

			try
			{
				$this  ->  m_link_getter  =  $this  ->  GetAllSubPages  (  $this  ->  m_page_visibility  );
				return $this  ->  m_link_getter;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}

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


		public function JumbotronSectionText  (  )
		{
			$this  ->  m_page_id  =  1;
			$this  ->  m_section_id  =  2;

			$this  ->  m_content_puller  =  $this  ->  GetAllContentsByIdAndRegion  (  $this  ->  m_page_id  ,  $this  ->  m_section_id  );
			return $this  ->  m_content_puller;

		}


		public function GetBusinessInfo  (  )
		{
			$this  ->  m_content_puller  =  $this  ->  GetInformation  (  );
			return $this  ->  m_content_puller;
		}


	}
?>