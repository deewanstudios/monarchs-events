<?php

	$this  ->  m_content_builder  =  "<section class=\"section-70 section-sm-top-50 section-sm-bottom-98 text-left offset-top-30\">";
	$this  ->  m_content_builder  .=  "<div class=\"shell\">";

	$this  ->  m_content_builder  .=  "<h3 class=\"text-center\">";
	$this  ->  m_content_builder  .=  "<span>";
	$this  ->  m_content_builder  .=  ucwords  (  $this  ->  m_section_text  [  0  ]  );
	$this  ->  m_content_builder  .=  "</span>";
	$this  ->  m_content_builder  .=  "</h3>";
	$this  ->  m_content_builder  .=  "<div class=\"text-center\">";
	$this  ->  m_content_builder  .=  "<div class=\"cell-sm-12 cell-md-10 text-size-1point5em\">";
	$this  ->  m_content_builder  .=  $this  ->  m_section_text  [  1  ];
	$this  ->  m_content_builder  .=  $this  ->  m_section_text  [  2  ];
	$this  ->  m_content_builder  .=  $this  ->  m_section_text  [  3  ];

	$this  ->  m_content_builder  .=  "<button  class=\"btn-link btn-link-primary btn-link-variant-1\">";
	$this  ->  m_content_builder  .=  "<a class=\"\" href=\"{$this->m_base_url}\">";
	$this  ->  m_content_builder  .=  $this->m_page_author;
	$this  ->  m_content_builder  .=  "</a>";
	$this  ->  m_content_builder  .=  "</button>";
	$this  ->  m_content_builder  .=  "<div class=\"cell-xs-12 offset-top-20 offset-sm-top-40\">";
	$this  ->  m_content_builder  .=  "<hr class=\"hr-gray hr-fullwidth\">";
	$this  ->  m_content_builder  .=  "</div>";
	$this  ->  m_content_builder  .=  "</div>";
	$this  ->  m_content_builder  .=  "</div>";



	$this  ->  m_content_builder  .=  "</div>";
	$this  ->  m_content_builder  .=  "</section>";
?>
