<?php
	/**
	 *
	 */
	class ContactModel extends MasterModel
	{

		public function __construct  (  )
		{

			parent  ::  __construct  (  );
			$this  ->  m_page_id  =  6;
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


		public function GetBusinessInfo  (  )
		{
			$this  ->  m_content_puller  =  $this  ->  GetInformation  (  );
			return $this  ->  m_content_puller;
		}


		public function GetOperatioanlHours  (  )
		{
			$this  ->  m_content_puller  =  $this  ->  GetOpeningHours  (  );
			return $this  ->  m_content_puller;
		}


		public function InsertContactFormDetails  (  $name  ,  $email  ,  $phone_number  ,  $message  )
		{

			$query  =  ("INSERT INTO contact(name, email, phone_number, message, date) VALUES(?, ?, ?,?,NOW())");
			$data  =  $this  ->  connection  ->  prepare  (  $query  );

			$data  ->  bindParam  (  1  ,  $name  );

			$data  ->  bindParam  (  2  ,  $email  );

			$data  ->  bindParam  (  3  ,  $phone_number  );

			$data  ->  bindParam  (  4  ,  $message  );

			$data  ->  execute  (  );

		}


	}
?>