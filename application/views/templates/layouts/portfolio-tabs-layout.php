<?php
	foreach  (  $this  ->  m_portfolio_tabs AS $m_portfolio_tab  )

	// $this  ->  m_debugger  =  $this  ->  Dumper  (  $m_portfolio_tab  );

	{
		$this  ->  m_content_builder  .=  "<div class=\"grid_4\">";

		$this  ->  m_content_builder  .=  "<a class=\"gallery_item\" href=\"{$f_query_string}/portfolio/{$f_clean_url}\">";

		// ?portfolio=portfolios&id
		// =urlencode({$m_portfolio_tab["portfolio_name"]}.{$m_portfolio_tab["id"]})
		// {$m_portfolio_tab["portfolio_name"]}
		// {$m_portfolio_tab["subpage_url"]}

		foreach  (  $this->m_portfolio_thumb as $m_portfolio_thumb  )
		{
			$this  ->  m_content_builder  .=  "<img src=\"{$this->m_portfolio_path}{$m_portfolio_thumb["image_path"]}.jpg\" alt=\"\">";
		}

		$this  ->  m_content_builder  .=  "<div class=\"gallery_caption\">";

		$this  ->  m_content_builder  .=  "<div class=\"gall_title\">";
		$this  ->  m_content_builder  .=  $m_portfolio_tab  [  "portfolio_name"  ];
		// $this  ->  m_content_builder  .=  $m_portfolio_tab  [  "portfolio_name"  ];
		$this  ->  m_content_builder  .=  "</div>";

		$this  ->  m_content_builder  .=  $m_portfolio_tab  [  "portfolio_description"  ];
		$this  ->  m_content_builder  .=  "</div>";
		$this  ->  m_content_builder  .=  "</a>";

		$this  ->  m_content_builder  .=  " <div class=\"clear sep__1\"></div>";

		$this  ->  m_content_builder  .=  "</div>";
	}
?>