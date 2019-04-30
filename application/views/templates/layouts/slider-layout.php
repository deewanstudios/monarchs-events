<?php

	$this  ->  m_slider  =  "<div class=\"slider_wrapper\">";
	$this  ->  m_slider  .=  "<div id=\"camera_wrap\" class=\"\">";

	foreach  (  $m_slider_images AS $m_slider_image  )
	{
		$this  ->  m_slider  .=  "<div
	data-src=\"{$this->m_image_directory}{$m_slider_image["image_path"]}.jpg\">";
		$this  ->  m_slider  .=  "</div>";

	}

	$this  ->  m_slider  .=  "</div>";
	$this  ->  m_slider  .=  "</div>";
?>