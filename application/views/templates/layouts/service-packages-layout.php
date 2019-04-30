<?php




		// $this  ->  m_content_builder  .=  "<div class=\"grid_12\">";

		// $this  ->  m_content_builder  .=  "<div class=\"grid_8\">";



foreach  (  $this  ->  m_section_body AS $m_section_package  )
	{
		$this  ->  m_content_builder  .=  "<h5>";
		$this  ->  m_content_builder  .=  $m_section_package  [  "package_name"  ];
		$this  ->  m_content_builder  .=  "</h5>";


		$this  ->  m_content_builder  .=  $m_section_package  [  "package_content"  ];

		$this  ->  m_content_builder  .=  $this  ->  ClearDiv  (  );
		$this  ->  m_content_builder  .=  " <div class=\"clear sep__1\"></div>";
	}
		// $this  ->  m_content_builder  .=  "</div>";



		// $this  ->  m_content_builder  .=  "<div class=\"grid_4\">";
//
		// $this  ->  m_content_builder  .=  "</div>";

		// $this  ->  m_content_builder  .=  "</div>";





?>