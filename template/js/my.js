google.maps.event.addDomListener(window, 'load', function()
        {
       //alert('12221');
         var lat00 =document.adddetail_f1.lat.value;
         var lng00 =document.adddetail_f1.lng.value;
     
		 
		  var latlng = new google.maps.LatLng(lat00, lng00);
		  var mapOptions = {
				zoom: 16,
				center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scaleControl: true
				};
            var mapObj = new google.maps.Map(document.getElementById('gmap'), mapOptions);

            var marker = new google.maps.Marker({
                position: latlng,
                map: mapObj
            });
      });
		