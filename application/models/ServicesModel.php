<?php
	/**
	 *
	 */
	class ServicesModel extends MasterModel
	{

		public function __construct  (  )
		{
			parent  ::  __construct  (  );
			$this  ->  m_page_id  =  3;
			$this  ->  m_section_id  =  4;

		}





		public function GetImages  (  )
		{
			try
			{
				$this  ->  m_content_puller  =  $this  ->  GetAllImagesByPageId  (  $this  ->  m_page_id  );
				return $this  ->  m_content_puller;

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


		public function GetServicesHeadings  (  $m_heading_id  )
		{
			try
			{
				$this  ->  m_content_puller  =  $this  ->  GetAllHeadings  (  $m_heading_id  );
				return $this  ->  m_content_puller;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetServicesView  (  $m_subpage_id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM services_content WHERE 1 = 1 AND subpages_id = {$m_subpage_id}  ");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepared_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;
				return $this  ->  m_returned_object;
			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetServicesViewById  (  $m_id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM services_content WHERE 1 = 1 AND id = {$m_id}");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepared_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;
				return $this  ->  m_returned_object;
			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetWeddingPackages  (  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM packages");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepared_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;
				return $this  ->  m_returned_object;
			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetWeddingPackageLists  (  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT list_context FROM package_content_lists");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepared_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;
				return $this  ->  m_returned_object;
			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


/*
		public function GetListHeadings  (  $m_list_heading_id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT heading_name FROM content_lists_heading where 1 = 1 AND id ={$m_list_heading_id}");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepared_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;
				return $this  ->  m_returned_object;
			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetAllLists  (  $m_list_subpage_id  ,  $m_list_heading_id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT list_context FROM content_lists where 1 = 1 AND subpages_id ={$m_list_subpage_id} AND content_lists_heading_id = {$m_list_heading_id}");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepared_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;
				return $this  ->  m_returned_object;
			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}*/



	}
?>