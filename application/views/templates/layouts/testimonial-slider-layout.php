<?php


	$this  ->  m_testimonial_slide  =  "<div id=\"testimonial-wrapper\" class=\"body-content\">";


	foreach  (  $this->m_testimonials AS $this->m_testimonial  )
	// $this  ->  m_debugger  =  $this  ->  Dumper  (  $this  ->  m_testimonial  );
	{
		$this  ->  m_testimonial_slide  .=  "<div class=\"blog\">";
		$this  ->  m_testimonial_slide  .=  " <time datetime=\"2014-01-01\">";
		$this  ->  m_testimonial_slide  .=  date  (  'd'  ,  strtotime  (  $this  ->  m_testimonial  [  "date_posted"  ]  )  );
		$this  ->  m_testimonial_slide  .=  "<span>";
		$this  ->  m_testimonial_slide  .=  date  (  'F'  ,  strtotime  (  $this  ->  m_testimonial  [  "date_posted"  ]  )  );
		$this  ->  m_testimonial_slide  .=  "</span>";

		$this  ->  m_testimonial_slide  .=  "<span>";
		$this  ->  m_testimonial_slide  .=  date  (  'Y'  ,  strtotime  (  $this  ->  m_testimonial  [  "date_posted"  ]  )  );
		$this  ->  m_testimonial_slide  .=  "</span>";
		// "27<span>may</span>";
		$this  ->  m_testimonial_slide  .=  "</time>";
		$this  ->  m_testimonial_slide  .=  "<div class=\"extra_wrapper\">";
		$this  ->  m_testimonial_slide  .=  "<div class=\"text2 color2\">";
		$this  ->  m_testimonial_slide  .=  $this  ->  m_testimonial  [  "name"  ];
		$this  ->  m_testimonial_slide  .=  "</div>";



		$this  ->  m_testimonial_slide  .=  "</div>";
		$this  ->  m_testimonial_slide  .=  " <div class=\"clear\"></div>";
		$this  ->  m_testimonial_slide  .=  "<div class=\"testimony text-center\">";

		$this  ->  m_testimonial_slide  .=  " <div class=\"h3 text-center text-italic \">";
		$this  ->  m_testimonial_slide  .=  "<span class=\"\"><i class=\"fa fa-quote-left\"
		aria-hidden=\"true\"></i></span>";
		$this  ->  m_testimonial_slide  .=  $this  ->  m_testimonial  [  "comment"  ];

		$this  ->  m_testimonial_slide  .=  "<span class=\"\"><i class=\"fa fa-quote-right\"
		aria-hidden=\"true\"></i></span>";
		$this  ->  m_testimonial_slide  .=  "</div>  ";

		$this  ->  m_testimonial_slide  .=  "</div>";
		$this  ->  m_testimonial_slide  .=  " <div class=\"clear sep__0\"></div>";
		$this  ->  m_testimonial_slide  .=  " </div>";
	}


	$this  ->  m_testimonial_slide  .=  "</div>";

?>