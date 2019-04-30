<?php
	/**
	 *
	 */
	class PortfolioModel extends MasterModel
	{

		public function __construct  (  )
		{
			parent  ::  __construct  (  );
			$this  ->  m_page_id  =  2;
			$this  ->  m_section_id  =  4;

		}


		public function ContextualContent  (  )
		{
			try
			{
				$this  ->  m_content_puller  =  $this  ->  GetAllPageContents  (  $this  ->  m_page_id  ,  $this  ->  m_section_id  );
				return $this  ->  m_content_puller;

			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
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


		/*
		 public function GetAllPortfolios  (  )
		 {

		 try
		 {
		 $this  ->  m_select_statement  =  ("SELECT id, portfolio_name,
		 portfolio_description
		 FROM portfolio ORDER BY id");
		 $this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this
		 ->  m_select_statement  );
		 $this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
		 $this  ->  m_prepared_statement  ->  execute  (  );
		 $this  ->  m_executed_statement  =  $this  ->  m_prepared_statement  ->
		 fetchAll  (  PDO  ::  FETCH_ASSOC  );
		 $this  ->  m_returned_object  =  $this  ->  m_executed_statement;
		 return $this  ->  m_returned_object;
		 }
		 catch(PDOException $e)
		 {
		 echo $e  ->  getMessage  (  );
		 }
		 }*/




		public function GetAllPortfolios  (  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT p.id, p.portfolio_name, p.portfolio_description,pt.image_name,pt.image_description,pt.image_caption,pt.image_path
FROM portfolio AS p
LEFT JOIN portfolio_thumbs AS pt ON p.id=pt.portfolio_id
ORDER BY p.id DESC");
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


		public function GetAllPortfolioThumb  (  $id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT image_name, image_description, image_caption, image_path, portfolio_id FROM portfolio_images WHERE portfolio_id = {$id} LIMIT 1");
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


		public function GetAllPortfoliImagesById  (  $id  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT image_name, image_description, image_caption, image_path, portfolio_id FROM portfolio_images WHERE portfolio_id = {$id}");
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


		public function GetAllPortfoliosWithPictures  (  )
		{

			try
			{
				$this  ->  m_select_statement  =  ("SELECT p.id, p.portfolio_name, p.portfolio_description, i.image_name, i.image_description, i.image_caption, i.image_path
FROM portfolio_images AS i
LEFT JOIN portfolio AS p ON p.id = i.portfolio_id");
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


		public function GetPortfoliosPictures  (  )
		{

			try
			{
				$project_images_id  =  ("SELECT * FROM portfolio_images LEFT JOIN portfolio ON
				porfolio.id portfolio_images.portfolio_id");
				if  (  isset  (  $_GET  [  "id"  ]  )  )
				{
					$proj_images  =  $_GET  [  "id"  ];
					$this  ->  m_select_statement  =  ("SELECT * FROM portfolio_images WHERE portfolio_id = '{$proj_images}");
					$this  ->  m_prepare_statement  =  $this  ->  connection  ->  prepare  (  $this  ->  m_select_statement  );
					$this  ->  m_prepared_statement  =  $this  ->  m_prepare_statement;
					$this  ->  m_prepared_statement  ->  execute  (  );
					$this  ->  m_executed_statement  =  $this  ->  m_prepared_statement  ->  fetchAll  (  PDO  ::  FETCH_ASSOC  );
					$this  ->  m_returned_object  =  $this  ->  m_executed_statement;
				}

				return $this  ->  m_returned_object;
			}
			catch(PDOException $e)
			{
				echo $e  ->  getMessage  (  );
			}
		}


		public function GetPortfolioPictures  (  $portfolio_id  )
		{

			try
			{


				$this  ->  m_select_statement  =  ("SELECT * FROM portfolio_images WHERE 1=1 AND portfolio_id = {$portfolio_id} ");
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
?>