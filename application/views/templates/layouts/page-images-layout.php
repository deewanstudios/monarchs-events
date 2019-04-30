<?php


	 foreach  (  $f_section_images AS $m_section_image  )
	 {

	 $this  ->  m_content_builder  .=  "<div class=\"block4\">";

	 $this  ->  m_content_builder  .=  " <img
	src=\"{$this->m_image_directory}{$m_section_image["image_path"]}.jpg\"
	alt=\"\"/>";

	 $this  ->  m_content_builder  .=  "</div>";
	 }




/*
	$this  ->  m_content_builder  .=  "<div class=\"block4\">";

	$this  ->  m_content_builder  .=  " <img src=\"{$this->m_image_directory}monarchs-events-28.jpg\" alt=\"\"/>";

	$this  ->  m_content_builder  .=  "</div>";



	$this  ->  m_content_builder  .=  "<div class=\"block4\">";

	$this  ->  m_content_builder  .=  " <img src=\"{$this->m_image_directory}monarchs-events-29.jpg\" alt=\"\"/>";

	$this  ->  m_content_builder  .=  "</div>";



	$this  ->  m_content_builder  .=  "<div class=\"block4\">";

	$this  ->  m_content_builder  .=  " <img src=\"{$this->m_image_directory}monarchs-events-30.jpg\" alt=\"\"/>";

	$this  ->  m_content_builder  .=  "</div>";



	$this  ->  m_content_builder  .=  "<div class=\"block4\">";

	$this  ->  m_content_builder  .=  " <img src=\"{$this->m_image_directory}monarchs-events-31.jpg\" alt=\"\"/>";

	$this  ->  m_content_builder  .=  "</div>";*/




?>