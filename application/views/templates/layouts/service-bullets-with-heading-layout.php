<?php
	foreach  (  $this  ->  m_list_headings AS $this->m_list_heading  )
	{
		// $this  ->  m_content_builder  .=  "<div class=\"grid_12\">";

		// $this  ->  m_content_builder  .=  "<div class=\"grid_8\">";
		$this  ->  m_content_builder  .=  "<h6>";
		$this  ->  m_content_builder  .=  $this  ->  m_list_heading  [  "heading_name"  ];
		$this  ->  m_content_builder  .=  "</h6>";
		// $this  ->  m_content_builder  .=  "</div>";
		// $this  ->  m_content_builder  .=  "</div>";
	}
	// $this  ->  m_content_builder  .=  "<div class=\"grid_12\">";

	// $this  ->  m_content_builder  .=  "<div class=\"grid_8\">";

	$this  ->  m_content_builder  .=  "<ul class=\"list\">";
	foreach  (  $this->m_bullet_lists AS $this->m_bullet_list  )
	{
		$this  ->  m_content_builder  .=  "<li>";
		$this  ->  m_content_builder  .=  $this  ->  m_bullet_list  [  "list_context"  ];
		$this  ->  m_content_builder  .=  "</li>";
	}
	$this  ->  m_content_builder  .=  "</ul>";
	// $this  ->  m_content_builder  .=  "</div>";
	// $this  ->  m_content_builder  .=  "</div>";
?>