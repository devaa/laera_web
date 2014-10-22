var ContactPage = function () {

    return {
        
    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 40.350317,
				lng: -3.826122,
				zoom: 17
			  });
			  
			  var marker = map.addMarker({
				lat: 40.350317,
				lng: -3.826122,
	            title: 'AREAL S.L. Reformas Integrales'
		       });
			});
        },

        //Panorama Map
        initPanorama: function () {
		    var panorama;
		    $(document).ready(function(){
		      panorama = GMaps.createPanorama({
		        el: '#panorama',
		        lat : 40.350317,
		        lng : -3.826122
		      });
		    });
		}        

    };
}();