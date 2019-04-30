<?php

	$this  ->  m_page_header_banner  =  "<div class=\"header_banner\">";
	// header_banner destination_wedding_banner
	// $this  ->  m_page_header_banner  .=  "<div class=\"\">";
	// $this  ->  m_page_header_banner  .=  "<div class=\"\">";

	// header banner image
	if  (  !  empty  (  $this  ->  m_top_banner_page_image  )  )
	{

		$this  ->  m_page_header_banner  .=  "<div class=\"banner_image\">";
		$this  ->  m_page_header_banner  .=  "<img
	src=\"{$this->m_image_directory}{$this  ->  m_top_banner_page_image[0]["image_path"]}.jpg \" alt=\"\"/>";
		// {$this  ->  m_top_banner_image  [  0  ]  [  "name"  ]}
		// $this  ->  m_page_header_banner  .=  $this  ->  m_top_banner_name  [  0  ]  [
		// "name"  ];
		$this  ->  m_page_header_banner  .=  "</div>";
	}
	else
	{


		$this  ->  m_page_header_banner  .=  "<div class=\"banner_image\">";
		$this  ->  m_page_header_banner  .=  "<img
	src=\"{$this->m_image_directory}default-header-banner.jpg \" alt=\"\"/>";
		// {$this  ->  m_top_banner_image  [  0  ]  [  "name"  ]}
		// $this  ->  m_page_header_banner  .=  $this  ->  m_top_banner_name  [  0  ]  [
		// "name"  ];
		$this  ->  m_page_header_banner  .=  "</div>";

	}


	// header banner ends


/*
	$this  ->  m_page_header_banner  .=  " <h1>";


	$this  ->  m_page_header_banner  .=  "</h1>";*/



	// $this  ->  m_page_header_banner  .=  "<div class=\"\">";
	$this  ->  m_page_header_banner  .=  "<ol class=\"breadcrumb\">";
	$this  ->  m_page_header_banner  .=  "<li>";
	$this  ->  m_page_header_banner  .=  "<a href=\"{$this->m_base_url}\">";
	$this  ->  m_page_header_banner  .=  "Home";
	$this  ->  m_page_header_banner  .=  "</a>";
	$this  ->  m_page_header_banner  .=  "</li>";


	foreach  (  $f_breadcrumbs AS $crumb_trails  )
	{
		if  (  $i  ==  sizeof  (  $f_breadcrumbs  )  )
		{
			$this  ->  m_page_header_banner  .=  "<li>";

			$this  ->  m_page_header_banner  .=  $crumb_trails  [  "name"  ];

			$this  ->  m_page_header_banner  .=  "</li>";

		}

		else
		{
			$this  ->  m_page_header_banner  .=  "<li>";
			$this  ->  m_page_header_banner  .=  "<a href=\"{$this->m_base_url}{$crumb_trails  [ "url"  ]}\">";
			$this  ->  m_page_header_banner  .=  $crumb_trails  [  "name"  ];
			$this  ->  m_page_header_banner  .=  "</a>";
			$this  ->  m_page_header_banner  .=  "</li>";
			$i  ++  ;
		}

	}

	$this  ->  m_page_header_banner  .=  "</ol>";
	// $this  ->  m_page_header_banner  .=  "</div>";

	// $this  ->  m_page_header_banner  .=  "</div>";
	// $this  ->  m_page_header_banner  .=  "</div>";
	$this  ->  m_page_header_banner  .=  "</div>";
?>