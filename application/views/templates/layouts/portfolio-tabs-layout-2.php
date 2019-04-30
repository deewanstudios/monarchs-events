<?php
	$this  ->  m_content_builder  .=  "<div class=\"gallery-section\">";
	foreach  (  $this  ->  m_portfolio_tabs AS $m_portfolio_tab  )


	{
		$this  ->  m_content_builder  .=  "<div class=\"grid_4\">";

		$this  ->  m_content_builder  .=  "<a class=\"album_item gallery_item\" href=\"{$f_query_string}/portfolio/";
		$this  ->  m_content_builder  .=  str_replace  (  " "  ,  "-"  ,  $m_portfolio_tab  [  "portfolio_name"  ]  );
		$this  ->  m_content_builder  .=  "/{$m_portfolio_tab  [  "id"  ]}\">";


		$this  ->  m_content_builder  .=  "<img
		src=\"{$this->m_portfolio_path}{$m_portfolio_tab["image_path"]}.jpg\"
		alt=\"\">";


		$this  ->  m_content_builder  .=  "<div class=\"gallery_caption\">";

		$this  ->  m_content_builder  .=  "<div class=\"gallery_description\">";
$this  ->  m_content_builder  .=  "<img src=\"{$this->m_image_directory}camera_icon.png\" alt=\"\">";
		$this  ->  m_content_builder  .=  "<div class=\"gall_title\">";
		// $this  ->  m_content_builder  .=  $this  ->  m_portfolio_name;
		$this  ->  m_content_builder  .=  $m_portfolio_tab  [  "portfolio_name"  ];
		$this  ->  m_content_builder  .=  "</div>";

		$this  ->  m_content_builder  .=  wordwrap  (  $m_portfolio_tab  [  "portfolio_description"  ]  ,  35  ,  "<br>\n"  );
		$this  ->  m_content_builder  .=  "</div>";
		$this  ->  m_content_builder  .=  "</div>";
		$this  ->  m_content_builder  .=  "</a>";

		$this  ->  m_content_builder  .=  " <div class=\"clear sep__1\"></div>";

		$this  ->  m_content_builder  .=  "</div>";
	}

	$this  ->  m_content_builder  .=  "</div>";
?>


