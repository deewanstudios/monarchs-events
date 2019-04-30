<?php


	$this  ->  m_content_builder  .=  "<h3 class=\"h3__head2\">";
	$this  ->  m_content_builder  .=  "<span>";

	$this  ->  m_content_builder  .=  $this  ->  m_section_heading;


	$this  ->  m_content_builder  .=  "</span>";
	$this  ->  m_content_builder  .=  "</h3>";


	$this  ->  m_content_builder  .=  "<div class=\"grid_8\">";
	$this  ->  m_content_builder  .=  $m_top;


	$this  ->  m_content_builder  .=  $this  ->  ClearDiv  (  );

	/*Add drop-down list here*/


	$this  ->  m_content_builder  .=  $this  ->  EventDesignAndStylingLists  (  );

	$this  ->  m_content_builder  .=  $m_bottom;

	$this  ->  m_content_builder  .=  "</div>";


	$this  ->  m_content_builder  .=  "<div class=\"grid_4\">";

	$this  ->  m_content_builder  .=  $this  ->  SubPageImageDisplayer  (  $this  ->  m_page_id  ,  $this  ->  m_service_id  );

	$this  ->  m_content_builder  .=  "</div>";
?>