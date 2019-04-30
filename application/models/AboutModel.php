<?php
	/**
	 *
	 */
	class AboutModel extends MasterModel
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
				$this  ->  m_content_puller  =  $this  ->  GetAllContentsById  (  $this  ->  m_page_id  );
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


	}
?>