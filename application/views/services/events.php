<?php
	echo $m_banner_view  =  $this  ->  SubPageBanners  (  $this  ->  m_page_id  ,  $this  ->  m_sub_page_id  );
	$events_view  =  $this  ->  EventsContent  (  );
	echo $m_page_view  =  $this  ->  ServicesContentsView  (  $events_view  );
?>