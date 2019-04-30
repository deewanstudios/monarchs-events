<?php

	// $this  ->  m_content_builder  =  "<div class=\"grid_12\">";

	$this  ->  m_content_builder  .=  "<h3 class=\"h3__head2\">";
	$this  ->  m_content_builder  .=  "<span>";
	// foreach($this  ->  m_section_heading AS $m_heading){
	$this  ->  m_content_builder  .=  $this  ->  m_section_heading;
	// }

	$this  ->  m_content_builder  .=  "</span>";
	$this  ->  m_content_builder  .=  "</h3>";

	$this  ->  m_content_builder  .=  "<div class=\"grid_8 body-content\">";
	$this  ->  m_content_builder  .=  $m_top;
	$this  ->  m_content_builder  .=  " <div class=\"clear sep__1\"></div>";
	foreach  (  $sub AS $m_sub  )
	{
		$this  ->  m_content_builder  .=  "<h6>";
		$this  ->  m_content_builder  .=  $m_sub  [  "heading_name"  ];
		$this  ->  m_content_builder  .=  "</h6>";
	}
	// $this  ->  m_content_builder  .=  " <div class=\"clear sep__1\"></div>";

	$this  ->  m_content_builder  .=  $this  ->  ConsultantsLists  (  );

	$this  ->  m_content_builder  .=  " <div class=\"clear sep__1\"></div>";

	$this  ->  m_content_builder  .=  $m_bottom;

	$this  ->  m_content_builder  .=  $this  ->  ClearDiv  (  );

	/*Add drop-down list here*/
	foreach  (  $this->HostedEventLists( ) AS $m_hosted_events  )
	{
		$this  ->  m_content_builder  .=  $m_hosted_events;
	}


	$this  ->  m_content_builder  .=  "</div>";


	$this  ->  m_content_builder  .=  "<div class=\"grid_4\">";

	$this  ->  m_content_builder  .=  $this  ->  SubPageImageDisplayer  (  $this  ->  m_page_id  ,  $this  ->  m_sub_page_id  );

	$this  ->  m_content_builder  .=  "</div>";

	// $this  ->  m_content_builder  .=  "</div>";
?>