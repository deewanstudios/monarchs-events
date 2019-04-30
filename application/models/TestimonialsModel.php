<?php
	/**
	 *
	 */
	class TestimonialsModel extends MasterModel
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


		public function GetAllComments  (  )
		{
			try
			{
				$this  ->  m_select_statement  =  ("SELECT name, comment, date_posted FROM testimonials where 1 = 1 ORDER BY id DESC");
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


		public function InsertTestimonials  (  $name  ,  $email  ,  $message  )
		{

			$query  =  ("INSERT INTO testimonials(name, email, comment, date_posted) VALUES(?, ?, ?,NOW())");
			$data  =  $this  ->  connection  ->  prepare  (  $query  );

			$data  ->  bindParam  (  1  ,  $name  );

			$data  ->  bindParam  (  2  ,  $email  );

			$data  ->  bindParam  (  3  ,  $message  );

			$data  ->  execute  (  );

		}


	}
?>