$(function() {
	function myMap(latitude, longitude) {
		if (latitude === undefined) {
			latitude = -22.608500;
		}
		if (longitude === undefined) {
			longitude = -43.183562;
		}
		var myCenter = new google.maps.LatLng(latitude, longitude);
		var mapProp = {center:myCenter, zoom:15, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
	}
});