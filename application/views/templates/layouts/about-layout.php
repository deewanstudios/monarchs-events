<?php



	$this  ->  m_content_builder  =  "<div class=\"grid_12\">";

	$this  ->  m_content_builder  .=  "<h3 class=\"h3__head2\">";
	$this  ->  m_content_builder  .=  "<span>";
	$this  ->  m_content_builder  .=  "About Us";
	$this  ->  m_content_builder  .=  "</span>";
	$this  ->  m_content_builder  .=  "</h3>";

	$this  ->  m_content_builder  .=  "<div class=\"grid_8 body-content\">";

	$this  ->  m_content_builder  .=  $this  ->  VisionSection  (  );
	$this  ->  m_content_builder  .=  $this  ->  MissionStatementSection  (  );
	$this  ->  m_content_builder  .=  $this  ->  ObjectivesSectionLists  (  );
	$this  ->  m_content_builder  .=  $this  ->  CompanyEthosSection  (  );
	// $this  ->  m_content_builder  .=  $this  ->  CompanyEthosSectionLists  (  );

	$this  ->  m_content_builder  .=  "</div>";

	$this  ->  m_content_builder  .=  "</div>";
?>