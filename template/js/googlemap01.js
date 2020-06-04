 
google.maps.event.addDomListener(window, 'load', function()
        {
         alert('aaaaa');
		 var params = $('#myjs').data('myjs-params');
         alert(params.foo); // FOO
         alert(params.bar); // BAR
		 alert('bbbbb');
		  var lng = $('#myjs').data('lng01');
		  var lat = $('#myjs').data('lat01');
		 
		  var latlng = new google.maps.LatLng(lat, lng);
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
		