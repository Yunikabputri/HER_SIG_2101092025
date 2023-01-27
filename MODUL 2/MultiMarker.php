<!DOCTYPE html>
<html>
<head>
    <title>Multi Marker</title>
    <link rel="stylesheet" href="leaflet.css"/>
    <script src="leaflet.js"></script>
</head>
<body>
    <div id="mapku" style="width: 100%; height: 600px;"></div>

</body>
<script type="text/javascript">
     var mymap = L.map('mapku').setView([-0.9137822,100.4640162],17);
    
     L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom:18,
        id:'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);

    var locations = [[-0.9142460752431351, 100.46618318283979],
                     [-0.9138491588267714, 100.46631192890786],
                     [-0.9138062489416643, 100.46791052539446],
                     [-0.913087508289863, 100.46773886402678],
                     [-0.9131089632367676, 100.465957877337],
                     [-0.9140100708913685, 100.46494936680183],
                     [-0.9147073564199607, 100.46296453222524]];

    for (var i = 0; i < locations.length; i++) {
        marker = new L.marker([locations[i][0], locations[i][1]]).addTo(mymap);
    }
</script>
</html>