<?php
	$this  ->  m_content_builder  =  "<section class=\"content\">";
	$this  ->  m_content_builder  .=  "<div class=\"container\">";
	$this  ->  m_content_builder  .=  "<div class=\"row\">";
	$this  ->  m_content_builder  .=  "<div class=\"grid_12\">";
	$this  ->  m_content_builder  .=  "<h3>";
	$this  ->  m_content_builder  .=  "<span>";
	$this  ->  m_content_builder  .=  $this  ->  m_portfolio_name;
	$this  ->  m_content_builder  .=  "</span>";
	$this  ->  m_content_builder  .=  "</h3>";
	$this  ->  m_content_builder  .=  "</div>";
	$this  ->  m_content_builder  .=  "<div class=\"clear\"></div>";
	$this  ->  m_content_builder  .=  "<div class=\"gallery-section\">";
	$this  ->  m_content_builder  .=  "<div class=\"gallery\">";


	foreach  (  $this->m_section_image AS $gallery_image  )
	{
		$this  ->  m_content_builder  .=  "<div class=\"grid_4\">";

		$this  ->  m_content_builder  .=  "<a class=\"album_item gallery_item\" href=\"{$path}{$gallery_image["image_path"]}.jpg\">";
		$this  ->  m_content_builder  .=  "<img src=\"{$path}{$gallery_image["image_path"]}.jpg\" alt=\"\">";

		$this  ->  m_content_builder  .=  "</a>";

		$this  ->  m_content_builder  .=  "</div>";
	}


	$this  ->  m_content_builder  .=  "</div>";
	$this  ->  m_content_builder  .=  "</div>";
	$this  ->  m_content_builder  .=  "</div>";
	$this  ->  m_content_builder  .=  "</div>";
	$this  ->  m_content_builder  .=  "</section>";
?>