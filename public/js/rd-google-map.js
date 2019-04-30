/**
 * Global variables
 */
"use strict";


var $document  =  $  (  document  )  ,
    plugins  =
{
	rdGoogleMaps  :  $  (  ".rd-google-map"  ),
};

/**
 * Initialize All Scripts
 */
$document.ready  (  function  (  )
{


	/**
	 * isScrolledIntoView
	 * @description  check the element whas been scrolled into the view
	 */
	function isScrolledIntoView  (  elem  )
	{
		var $window  =  $  (  window  );
		return elem.offset  (  ).top  +  elem.outerHeight  (  )  >=  $window.scrollTop  (  )  &&  elem.offset  (  ).top  <=  $window.scrollTop  (  )  +  $window.height  (  );
	}


	/**
	 * initOnView
	 * @description  calls a function when element has been scrolled into the view
	 */
	function lazyInit  (  element  ,  func  )
	{
		var $win  =  jQuery  (  window  );
		$win.on  (  'load scroll'  , function  (  )
		{
			if  (  (  !      element.hasClass  (  'lazy-loaded'  )  &&  (      isScrolledIntoView  (  element  )  )  )  )
			{
				func.call  (  );
				element.addClass  (  'lazy-loaded'  );
			}
		}  );
	}


	/**
	 * RD Google Maps
	 * @description Enables RD Google Maps plugin
	 */
	if  (  plugins.rdGoogleMaps.length  )
	{
		var i;

		$.getScript  (  "https://maps.google.com/maps/api/js?key=AIzaSyBOE2kvY3BKjUy33lm8SIyPvZKtq02SR3g&sensor=false&libraries=geometry,places&v=3.7"  , function  (  )
		{
			var head  =  document.getElementsByTagName('head')  [  0  ]  ,
			    insertBefore  =  head.insertBefore;

			head.insertBefore  = function  (  newElement  ,  referenceElement  )
			{
				if  (  newElement.href  &&  newElement.href.indexOf  (  'https://fonts.googleapis.com/css?family=Roboto'  )  !=  -  1  ||  newElement.innerHTML.indexOf  (  'gm-style'  )  !=  -  1  )
				{
					return;
				}
				insertBefore.call  (  head  ,  newElement  ,  referenceElement  );
			};

			for  ( i  =  0  ;  i  <  plugins.rdGoogleMaps.length  ;  i  ++  )
			{

				var $googleMapItem  =  $  (  plugins.rdGoogleMaps  [  i  ]  );

				lazyInit  (  $googleMapItem  ,  $.proxy  (  function  (  )
				{
					var $this  =  $  (  this  )  ,
					    styles  =  $this.attr  (  "data-styles"  );

					$this.googleMap  (
					{
									styles: styles ? JSON.parse(styles) : [
									{
									"featureType": "all",
									"elementType": "labels.text.fill",
									"stylers": [{
										"saturation": 100
									}, {
										"color": "#efef18"
									}, {
										"lightness": 100
									}]
								}, {
									"featureType": "all",
									"elementType": "labels.text.stroke",
									"stylers": [{
										"visibility": "on"
									}, {
										"color": "#000000"
									}, {
										"lightness": 16
									}]
								}, {
									"featureType": "all",
									"elementType": "labels.icon",
									"stylers": [{
										"visibility": "on"
									}]
								}, {
									"featureType": "administrative",
									"elementType": "geometry.fill",
									"stylers": [{
										"color": "#9b111e"
									}, {
										"lightness": 20
									}]
								}, {
									"featureType": "administrative",
									"elementType": "geometry.stroke",
									"stylers": [{
										"color": "#000000"
									}, {
										"lightness": 17
									}, {
										"weight": 1.2
									}]
								}, {
									"featureType": "landscape",
									"elementType": "geometry",
									"stylers": [{
										"color": "#141413"
									}, {
										"lightness": 2
									}]
								}, {
									"featureType": "poi",
									"elementType": "geometry",
									"stylers": [{
										"color": "#141413"
									}, {
										"lightness": 10
									}]
								}, {
									"featureType": "road.highway",
									"elementType": "geometry.fill",
									"stylers": [{
										"color": "#000000"
									}, {
										"lightness": 17
									}]
								}, {
									"featureType": "road.highway",
									"elementType": "geometry.stroke",
									"stylers": [{
										"color": "#000000"
									}, {
										"lightness": 29
									}, {
										"weight": 1.2
									}]
								}, {
									"featureType": "road.arterial",
									"elementType": "geometry",
									"stylers": [{
										"color": "#ffffff"
									}, {
										"lightness": 18
									}]
								}, {
									"featureType": "road.local",
									"elementType": "geometry",
									"stylers": [{
										"color": "#ffffff"
									}, {
										"lightness": 16
									}]
								}, {
									"featureType": "transit",
									"elementType": "geometry",
									"stylers": [{
										"color": "#9b111e"
									}, {
										"lightness": 19
									}]
								}, {
									"featureType": "water",
									"elementType": "geometry",
									"stylers": [{
										"color": "#256d7b"
									}, {
										"lightness": 17
									}]
								}],


						onInit  : function  (  map  )
						{
							var inputAddress  =  $  (  '#rd-google-map-address'  );

							if  (  inputAddress.length  )
							{
								var input  =  inputAddress;
								var geocoder  =  new google.maps.Geocoder  (  );
								var marker  =  new google.maps.Marker  (
								{
									map  :  map  ,
									icon  :  "images/gmap_marker.png",
								}  );
								var autocomplete  =  new google.maps.places.Autocomplete  (  inputAddress  [  0  ]  );
								autocomplete.bindTo  (  'bounds'  ,  map  );
								inputAddress.attr  (  'placeholder'  ,  ''  );
								inputAddress.on  (  'change'  , function  (  )
								{
									$  (  "#rd-google-map-address-submit"  ).trigger  (  'click'  );
								}  );
								inputAddress.on  (  'keydown'  , function  (  e  )
								{
									if  (  e.keyCode  ==  13  )
									{
										$  (  "#rd-google-map-address-submit"  ).trigger  (  'click'  );
									}
								}  );


								$  (  "#rd-google-map-address-submit"  ).on  (  'click'  , function  (  e  )
								{
									e.preventDefault  (  );
									var address  =  input.val  (  );
									geocoder.geocode  (
									{
										'address'  :  address
									}  , function  (  results  ,  status  )
									{
										if  (  status  ==  google.maps.GeocoderStatus.OK  )
										{
											var latitude  =  results  [  0  ].geometry.location.lat  (  );
											var longitude  =  results  [  0  ].geometry.location.lng  (  );

											map.setCenter  (  new google.maps.LatLng  (  parseFloat  (  latitude  )  ,  parseFloat  (  longitude  )  )  );
											marker.setPosition  (  new google.maps.LatLng  (  parseFloat  (  latitude  )  ,  parseFloat  (  longitude  )  )  )
										}
									}  );
								}  );
							}
						}


					}  );
				}  ,  $googleMapItem  )  );
			}
		}  );
	}

}  );

