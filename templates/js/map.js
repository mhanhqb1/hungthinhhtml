function LoadMap(obj, zoomLevel, locations) {
        var map_canvas = document.getElementById(obj);
		var latLng = new google.maps.LatLng(locations[0], locations[1]);
        var map_options = {
            center: latLng,
            zoom: zoomLevel,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)

        //begin maps marker
        var infowindow = new google.maps.InfoWindow();
        var marker;
        marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[0], locations[1]),
			map: map
		});
};