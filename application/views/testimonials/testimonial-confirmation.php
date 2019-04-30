
			<?php echo $m_confirmation_content_view  =  $this  ->  ConfirmationView  (  ); ?>


<script type="text/javascript">
	function countdown  (  )
	{
		var i  =  document.getElementById  (  'counter'  );
		if  (  parseInt  (  i.innerHTML  )  ===  3  )
		{
			var url = "<?php echo $this->m_base_url ?>";

			//local
			location.href  = url + "testimonials";
			// location.href  =  "http://localhost:8888/MonarchsEvents/";

			//testing remote
			// location.href = "http://chamai.perfectcode.co.uk/";

			//live
			// location.href = "http://www.celestialhonoursandmeritawardinternational.org/";

		}
		i.innerHTML  =  parseInt  (  i.innerHTML  )  -  1;

	}


	setInterval  (  function  (  )
	{
		countdown  (  );
	}  ,  1000  );

</script>