<?php
	echo $m_banner_view  =  $this  ->  SubPageBanners  (  $this  ->  m_page_id  ,  $this  ->  m_sub_page_id  );
	$rentals_view  =  $this  ->  RentalsContent  (  );
	echo $m_page_view  =  $this  ->  ServicesContentsView  (  $rentals_view  );
?>