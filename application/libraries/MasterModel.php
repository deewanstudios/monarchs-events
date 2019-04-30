<?php

	class MasterModel
	{

		protected $m_select_statement;
		protected $m_prepare_statement;
		protected $m_prepared_statement;
		protected $m_executed_statement;
		protected $m_returned_object;

		protected $m_page_id;
		protected $m_section_id;
		protected $m_limit;
		protected $m_image_purpose;

		protected $m_content_puller;

		protected $m_page_visibility  =  1;
		protected $m_order_by;


		public function __construct  (  )

		{
			$db  =  Database  ::  getInstance  (  );
			$this  ->  connection  =  $db  ->  getConnection  (  );

		}


		public function GetAllPages  (  $page_visibility  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM pages where 1 = 1 and page_visibility = '{$page_visibility}'");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepare_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;

				return $this  ->  m_returned_object;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetAllSubPages  (  $page_visibility  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM subpages where 1 = 1 and page_visibility = '{$page_visibility}' ");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepare_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;

				return $this  ->  m_returned_object;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetAllPagesById  (  $page_id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT id, name, title, keywords, url FROM pages where 1 = 1 AND page_visibility = '{$this->m_page_visibility}' AND id = '{$page_id}'");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepare_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;

				return $this  ->  m_returned_object;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetAllSubPagesById  (  $subpage_id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT id, name, title, description, keywords, subpage_url FROM subpages where 1 = 1 AND page_visibility = '{$this->m_page_visibility}' AND id = '{$subpage_id}'");
				$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
				$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
				$this  ->  m_prepared_statement  ->  execute  (  );
				$this  ->  m_executed_statement  =  $this  ->  m_prepare_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
				$this  ->  m_returned_object  =  $this  ->  m_executed_statement;

				return $this  ->  m_returned_object;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetAllImages  (  $image_purpose  ,  $page_id  ,  $order_by  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM images where 1 = 1 AND image_purpose ='{$image_purpose}' AND pages_id = '{$page_id}' AND image_visibility = '{$this->m_page_visibility}' ORDER BY id {$order_by}");
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


		public function GetAllSubPagesImages  (  $page_id  ,  $subpage_id  )
		{

			try
			{

				$this  ->  m_select_statement  =  ("SELECT * FROM images where 1 = 1 AND pages_id = '{$page_id}' AND  subpages_id = '{$subpage_id}' AND image_purpose = 'section-image' AND image_visibility = '{$this->m_page_visibility}' ORDER BY id");
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


		public function GetAllImagesByPageId  (  $m_page_id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM images where 1 = 1 AND pages_id ={$m_page_id} AND image_visibility = '1'");
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


		public function GetAllImagesByPageIdAndPurpose  (  $m_page_id  ,  $image_purpose  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM images where 1 = 1 AND pages_id ={$m_page_id} AND image_purpose = '{$image_purpose}' AND image_visibility = '1'");
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


		public function GetAllSubImagesByPageIdAndPurpose  (  $m_page_id  ,  $subpage_id  ,  $image_purpose  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM images where 1 = 1 AND pages_id ={$m_page_id} AND subpages_id = {$subpage_id} AND image_purpose = '{$image_purpose}' AND image_visibility = '1'");
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


		public function GetAllImagesByPurpose  (  $image_purpose  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM images where 1 = 1 AND image_purpose ='{$image_purpose}'AND image_visibility = '{$this->m_page_visibility}'");
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


		public function GetAllPageContents  (  $page_id  ,  $region_id  )
		{

			try
			{

				$this  ->  m_select_statement  =  ("SELECT P.id, H.heading_name, C.context from content AS C LEFT JOIN headings AS H on C.id = H.content_id LEFT JOIN pages AS P on C.pages_id = P.id LEFT JOIN region AS R on C.region_id = R.id WHERE P.id = {$page_id} AND R.id = {$region_id}");
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


		public function GetAllContentsById  (  $page_id  )
		{

			try
			{

				$this  ->  m_select_statement  =  (" SELECT * FROM content WHERE Pages_id = {$page_id} ");
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


		public function GetAllContentsByIdAndRegion  (  $f_page_id  ,  $f_region_id  )
		{

			try
			{

				$this  ->  m_select_statement  =  (" SELECT * FROM content WHERE Pages_id = {$f_page_id} AND region_id = {$f_region_id} ");
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


		public function GetAllAlbums  (  )
		{
			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM albums");
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


		public function GetAllGalleryImages  (  )
		{
			try
			{
				$this  ->  m_select_statement  =  ("SELECT GI.image_name, GI.image_description, GI.image_dimension, GI.image_caption, GI.image_path AS original_image, GIT.image_name, GIT.image_description, GIT.image_path AS thumb_image_path, A.id
FROM gallery_images AS GI
LEFT JOIN gallery_images_thumbs AS GIT ON GI.gallery_images_thumbs_id = GIT.id
LEFT JOIN albums AS A ON GI.albums_id = A.id");
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


		public function GetAllPageMetaData  (  $page_id  )
		{
			try
			{
				$this  ->  m_select_statement  =  ("SELECT name AS page_name, title AS page_title, description AS page_description, keywords AS page_keywords, url AS page_url
FROM pages
WHERE 1=1 AND page_visibility =1 AND id = {$page_id}");
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


		public function GetGalleryView  (  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT * FROM gallery_images WHERE 1 = 1 ");
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


		public function GetServicesImagesById  (  $m_service_image_id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT id, image_name, image_description, image_caption, image_path FROM services_images WHERE id = {$m_service_image_id} ");
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


		public function GetAllHeadings  (  $m_heading_id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT heading_name FROM headings WHERE 1 = 1 AND id = {$m_heading_id}");
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
		}


	}
