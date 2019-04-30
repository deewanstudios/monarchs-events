<?php
	foreach  (  $this  ->  m_services_tabs AS $m_service_tab  )
	{
		$this  ->  m_content_builder  .=  "<div class=\"grid_4 service-tab\">";
		foreach  (  $m_service_tab[0] AS $m_service_tab_text  )
		{
			$this  ->  m_content_builder  .=  "<a class=\"gallery_item\" href=\"{$m_service_tab_text["subpage_url"]}\">";
			foreach  (  $m_service_tab[1] as $m_service_tab_image  )
			{
				$this  ->  m_content_builder  .=  "<img src=\"{$this->m_image_directory}{$m_service_tab_image["image_path"]}.jpg\" alt=\"\">";
				$this  ->  m_content_builder  .=  "<div class=\"gallery_caption\">";

				$this  ->  m_content_builder  .=  "<div class=\"gallery_description\">";
				foreach  (  $m_service_tab[0] AS $m_service_tab_text  )
				{
					$this  ->  m_content_builder  .=  "<div class=\"gall_title\">";
					$this  ->  m_content_builder  .=  $m_service_tab_text  [  "name"  ];
					$this  ->  m_content_builder  .=  "</div>";
				}
				/*
				$this  ->  m_content_builder  .= "<p class=\"gall_desc\">";
								$this  ->  m_content_builder  .=  $m_service_tab_image  [  "image_description"  ];
								$this  ->  m_content_builder  .=  "</p>";*/


				$this  ->  m_content_builder  .=  "</div>";

				$this  ->  m_content_builder  .=  "</div>";
				$this  ->  m_content_builder  .=  "</a>";
			}

			foreach  (  $m_service_tab[0] as $m_service_tab_text  )
			{
				$this  ->  m_content_builder  .=  "<div class=\"text1\">";
				$this  ->  m_content_builder  .=  "<span>";
				$this  ->  m_content_builder  .=  "<a href=\"{$m_service_tab_text["subpage_url"]}\">";
				$this  ->  m_content_builder  .=  $m_service_tab_text  [  "name"  ];
				// $this  ->  m_content_builder  .=  "Sed ut perspiciatis unde omnis";
				$this  ->  m_content_builder  .=  "</a>";
				$this  ->  m_content_builder  .=  "</span>";
				$this  ->  m_content_builder  .=  "</div>";
			}

			$this  ->  m_content_builder  .=  " <div class=\"clear sep__1\"></div>";
		}
		$this  ->  m_content_builder  .=  "</div>";
	}
?>