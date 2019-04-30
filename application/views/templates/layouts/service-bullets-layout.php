<?php
/*
	$this  ->  m_content_builder  .=  "<div class=\"grid_12\">";
	$this  ->  m_content_builder  .=  "<div class=\"grid_8\">";*/

	$this  ->  m_content_builder  .=  "<ul class=\"list\">";
	foreach  (  $m_bullet_lists AS $m_bullet_list  )
	{
		$this  ->  m_content_builder  .=  "<li>";
		// $this->m_content_builder .= "<a href=\"#\">";
		$this  ->  m_content_builder  .=  $m_bullet_list  [  "list_context"  ];
		// $this->m_content_builder .= "True Black &amp; White Papers / Artistic
		// Borders";
		// $this->m_content_builder .= "</a>";
		$this  ->  m_content_builder  .=  "</li>";
	}
	$this  ->  m_content_builder  .=  "</ul>";
/*
	$this  ->  m_content_builder  .=  "</div>";
	$this  ->  m_content_builder  .=  "</div>";*/

?>