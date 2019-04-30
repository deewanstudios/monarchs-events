<?php
	// $this  ->  m_sub_page_id = 1;

	echo $m_banner_view  =  $this  ->  SubPageBanners  (  $this  ->  m_page_id  ,  $this  ->  m_sub_page_id  ,  $purpose  );
	$wedding_view  =  $this  ->  WeddingContent  (  );
	echo $m_page_view  =  $this  ->  ServicesContentsView  (  $wedding_view  );
?>