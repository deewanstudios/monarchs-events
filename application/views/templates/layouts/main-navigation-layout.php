<?php

	$this  ->  m_navigation  =  "<header>";
	$this  ->  m_navigation  .=  "<!--==============================";
	$this  ->  m_navigation  .=  "Stuck menu";
	$this  ->  m_navigation  .=  "==================================-->";
	$this  ->  m_navigation  .=  "<section id=\"stuck_container\">";
	$this  ->  m_navigation  .=  "<div class=\"container\">";
	$this  ->  m_navigation  .=  "<div class=\"row\">";
	$this  ->  m_navigation  .=  "<div class=\"grid_12\">";

	$this  ->  m_navigation  .=  " <div id=\"logo\">";
	$this  ->  m_navigation  .=  "<a href=\"{$this->m_base_url}\" class=\"navbar-brand\">";
	$this  ->  m_navigation  .=  "<img style=\"margin-top: -5px;margin-left: -15px;\" width=\"\" height=\"\" src=\"{$this->m_image_directory}logo-small-1.png\" alt=\"\"/>";
	$this  ->  m_navigation  .=  "</a>";
	$this  ->  m_navigation  .=  "</div> ";

	$this  ->  m_navigation  .=  "<div class=\"navigation\">";
	$this  ->  m_navigation  .=  "<nav>";
	$this  ->  m_navigation  .=  "<ul class=\"sf-menu\">";

	foreach  (  $m_navigation as $m_links  )
	{



		$this  ->  m_navigation  .=  "<li class=\"\">";
		$this  ->  m_navigation  .=  "<a href=\"";
		$this  ->  m_navigation  .=  $this  ->  m_base_url;
		$this  ->  m_navigation  .=  strtolower  (  $m_links  [  "url"  ]  );
		$this  ->  m_navigation  .=  "\"";
		$this  ->  m_navigation  .=  ">";
		$this  ->  m_navigation  .=  ucwords  (  $m_links  [  "name"  ]  );
		$this  ->  m_navigation  .=  "</a>";

		if  (  $m_links  [  "name"  ]  ==  'services'  )
		{
			$this  ->  m_navigation  .=  "<ul class=\"\">";
			foreach  (  $m_sub_navigation as $this->m_sub_navigation  )
			{
				$this  ->  m_navigation  .=  "<li class=\"\">";
				$this  ->  m_navigation  .=  "<a href=\"";
				$this  ->  m_navigation  .=  $this  ->  m_base_url;
				$this  ->  m_navigation  .=  strtolower  (  $this  ->  m_sub_navigation  [  "subpage_url"  ]  );
				$this  ->  m_navigation  .=  "\"";
				$this  ->  m_navigation  .=  ">";
				$this  ->  m_navigation  .=  ucwords  (  $this  ->  m_sub_navigation  [  "name"  ]  );
				$this  ->  m_navigation  .=  "</a>";
				$this  ->  m_navigation  .=  "</li>";

			}
			$this  ->  m_navigation  .=  "</ul>";
		}
		$this  ->  m_navigation  .=  "</li>";


	}

	$this  ->  m_navigation  .=  "</ul>";

	$this  ->  m_navigation  .=  "</nav>";


	$this  ->  m_navigation  .=  "<div class=\"clear\"></div>";

	$this  ->  m_navigation  .=  "</div>";

	/*Social icons go here*/

	$this  ->  m_navigation  .=  "<div class=\"header_socials\">";
	// $this  ->  m_navigation  .=  $this  ->  SocialIcons  (  );
	$this  ->  m_navigation  .=  "</div>";

	$this  ->  m_navigation  .=  "<div class=\"clear\"></div> ";
	$this  ->  m_navigation  .=  "</div>";
	$this  ->  m_navigation  .=  "</div>";
	$this  ->  m_navigation  .=  "</div>";
	$this  ->  m_navigation  .=  "</section>";

	/*logo goes here*/

	$this  ->  m_navigation  .=  "</header>";
?>