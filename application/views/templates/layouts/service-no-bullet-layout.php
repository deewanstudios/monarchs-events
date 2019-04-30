<?php


	foreach  (  $this  ->  m_section_content AS $m_section_content  )
	{



		$this  ->  m_content_builder  .=  "<h3 class=\"h3__head2\">";
		$this  ->  m_content_builder  .=  "<span>";
		$this  ->  m_content_builder  .=  $m_section_content  [  "title"  ];
		$this  ->  m_content_builder  .=  "</span>";
		$this  ->  m_content_builder  .=  "</h3>";
	}

	// $this  ->  m_content_builder  =  "<div class=\"grid_12\">";

	$this  ->  m_content_builder  .=  "<div class=\"grid_8 body-content\">";

	foreach  (  $this->m_section_heading AS $m_sub_title  )
	{

		$this  ->  m_content_builder  .=  "<h5>";
		$this  ->  m_content_builder  .=  $m_sub_title  [  "heading_name"  ];
		$this  ->  m_content_builder  .=  "</h5>";
	}

	$this  ->  m_content_builder  .=  $m_section_content  [  "context"  ];
	// $this  ->  m_content_builder  .=  $this  ->  ClearDiv  (  );

	$this  ->  m_content_builder  .=  " <div class=\"clear sep__1\"></div>";



	$this  ->  m_content_builder  .=  "</div>";



	$this  ->  m_content_builder  .=  "<div class=\"grid_4\">";

	// include 'page-images-layout.php';


	$this  ->  m_content_builder  .=  $this  ->  SubPageImageDisplayer  (  $this  ->  m_page_id  ,  $this  ->  m_sub_page_id  );
	// $this  ->  m_content_builder  .=  $images;


	$this  ->  m_content_builder  .=  "</div>";


	// $this  ->  m_content_builder  .=  "</div>";


	// $this  ->  m_content_builder  .=  " <div class=\"clear sep__1\"></div>";
?>