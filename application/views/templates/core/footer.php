<?php
	$m_navigation_class  =  new Navigation  (  );
	$m_footer  =  $m_navigation_class  ->  SiteFooter  (  );
?>
</div>
<?php echo $m_footer;?>

<!-- Java script-->

<script src="<?php echo URL; ?>js/jquery.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/jquery-migrate-1.1.1.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/script.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/superfish.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/jquery.equalheights.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/jquery.mobilemenu.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/tmStickUp.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/jquery.ui.totop.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/touchTouch.jquery.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/camera.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/monarchs-events-core.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/rd-google-map.js" type="text/javascript"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="<?php echo URL; ?>js/jquery.mobile.customized.min.js" type="text/javascript"></script>

<!--<![endif]-->


<script>
        $(document).ready(function(){

        $().UItoTop({ easingType: 'easeOutQuart' });
        $('#stuck_container').tmStickUp({});
        $('.gallery .gallery_item').touchTouch();
 });
</script>
<script src="<?php echo URL; ?>js/imagesloaded.pkgd.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/masonry.pkgd.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/masonry.js" type="text/javascript"></script>

</body>

</html>