<?php
	echo $m_banner_view  =  $this  ->  SubPageBanners  (  $this  ->  m_page_id  ,  $this  ->  m_sub_page_id  );
	$destination_wedding_view  =  $this  ->  DestinationWeddingsContent  (  );
	echo $m_page_view  =  $this  ->  ServicesContentsView  (  $destination_wedding_view  );
?>