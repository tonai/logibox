<?php
require_once(ROOT_PATH.'/lib/module.lib.php');

class googleMap extends module {
 
    function __construct(&$core) {
        parent::__construct($core);
    }
    
    public function displayHead() {
?>
    <!-- http://tuxp.vinci.ec-lille.fr ABQIAAAAwRS_SQFFMUyBfLGcOF2WYBQet4urAXb9QzI3oit0BpDooNvs8RQ8mJ2jCYI8WLbOOzFNLSywQ3dnMA -->
	<!-- portable: ABQIAAAAwRS_SQFFMUyBfLGcOF2WYBTgjE5MxKldF_VFFvyArDG31rk1HxTus3HonsKDjcumcS_Vgfsq6fadxA -->
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAwRS_SQFFMUyBfLGcOF2WYBTgjE5MxKldF_VFFvyArDG31rk1HxTus3HonsKDjcumcS_Vgfsq6fadxA" type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[
    
    var map = null;
	var marker = null;
    var mm = null;
	
    function load() {
        if (GBrowserIsCompatible()) {
            map = new GMap2(document.getElementById("map"));
            map.setCenter(new GLatLng(50.609859366667, 3.14920545), 17);
            // Controles de direction et zoom
            map.addControl(new GLargeMapControl());
            map.addControl(new GMapTypeControl());
			map.disableDoubleClickZoom();
			map.enableScrollWheelZoom();
			mm=new GMarkerManager(map,{trackMarkers:true});
			marker=new GMarker(new GLatLng(50.609859366667, 3.14920545));
			mm.addMarker(marker,3);
			txt2map("./data/curseur.txt");						
        }
    }
    
    function txt2map(file) {
		GDownloadUrl(file,function(doc) {
                            var line=doc.split('|');
                            if (line.length==3) {
                                var lng = parseFloat(line[2]);
                                var lat = parseFloat(line[1]);
                                var id = line[0];
                                var point = new GLatLng(lat,lng);
                                marker.setPoint(point);
                                map.setCenter(point);
                            }
                        }
        );
        setTimeout("txt2map('./data/curseur.txt')",500);	
	}
    //]]>
    </script>            
<?php    
    }
    
    public function displayPage() {
?>    
    <div id="map"></div>
<?php
    }
}

?>