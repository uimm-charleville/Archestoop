<?php
session_start();
?>
    <head><link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="/archestop/assets/css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     </head>   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <style>
        html, body { height: 100% }
    </style>

    <body onload="initialize()">
        <div id="map" style="width:100%; height:50%"></div>
    </body>
</html>

<script type="text/javascript">
    tab = []
</script>
<?php if (isset($_GET["geolat"]) and isset($_GET["geolng"])) {
/*
le code est fonctionnel, le principe est de récuperer 2 champs de la table user qu'il faut créer :
- lat 
- lng
il faut mettre le type de champ en decimal et la valeur à 10,6
l'email est aussi récupéré pour donner le nom du waypoints
*/
$mysqli=pg_connect("host=postgresql11.db.huma-num.fr port=5432 dbname=valeurt user=user_valeurt password=JPzkcrfL_whKBF48x");
$sql=pg_query($mysqli,"SELECT sa_nom_site as nom
, ST_X(ST_Transform(geom, 4326)) as lng
, ST_Y(ST_Transform(geom, 4326)) as lat
, (6371 * ACOS(COS(RADIANS(ST_Y(ST_Transform(geom, 4326)))) * COS(RADIANS(".$_GET["geolat"].")) * COS(RADIANS(ST_X(ST_Transform(geom, 4326))) - RADIANS(".$_GET["geolng"].")) + SIN(RADIANS(ST_Y(ST_Transform(geom, 4326)))) * SIN(RADIANS(".$_GET["geolat"].")))) AS distance 
FROM bdd_valeurt.gisement_archeo");
//HAVING distance > 20 ORDER BY distance");

if(pg_numrows($sql) > 0){ 
    while($row = pg_fetch_assoc($sql)){

echo"<script>";
echo"const modal = document.getElementById('modal');";
    echo"tab.push({\"title\": '" modal.showModal() "', \"lat\": '".$row['lat']."', \"lng\": '".$row['lng']."'})";
echo"</script>";
//echo $row['nom']."/".$row['lat']."/".$row['lng'];

    }
  }
}
?>
    </tbody>
</table>
<script>
    function initialize() {
        var map = L.map('map').setView([48.726167, 1.374461], 7); // LIGNE 18

        //map.on('locationfound', function(e) {
        var geolat = 48.726167//e.latlng.lat;
        var geolng = 1.374461//e.latlng.lng;
        if(window.location.href.indexOf("?") == -1){
            location.href = window.location.href+"?geolat="+geolat+"&geolng="+geolng
        }
        //});

        var osmLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { // LIGNE 20
            attribution: '© OpenStreetMap contributors',
        });
    
        map.addLayer(osmLayer);

        /*var lc = L.control.locate({
            position: "topright",
            initialZoomLevel: 14,
            strings: {
            title: "MSRP01"
            },
        }).addTo(map);
        
        lc.start();*/
        for (var i = 0; i < 200; i++) {
                    var marker = L.marker([tab[i].lat, tab[i].lng]).addTo(map);
                    marker.bindPopup(tab[i].title);
                }

        /*map.on('zoom', function() {
            console.log(map.getZoom());
            if(typeof marker !== 'undefined') {
                map.removeLayer(marker);
            }
        //(6371 * ACOS(COS(RADIANS(ST_Y(ST_Transform(geom, 4326)))) * COS(RADIANS(".$_GET["geolat"].")) * COS(RADIANS(ST_X(ST_Transform(geom, 4326))) - RADIANS(".$_GET["geolng"].")) + SIN(RADIANS(ST_Y(ST_Transform(geom, 4326)))) * SIN(RADIANS(".$_GET["geolat"]."))))
            if(map.getZoom() < 12){
                for (var i = 0;i < tab.length; i++) {
                    if(6371 * Math.acos(Math.cos((Math.PI/180)*(tab[i+1].lat)) * Math.cos((Math.PI/180)*(tab[i].lat)) * Math.cos((Math.PI/180)*(tab[i+1].lng) - (Math.PI/180)*(tab[i].lng)) + Math.sin((Math.PI/180)*(tab[i+1].lat)) * Math.sin((Math.PI/180)*(tab[i].lat))) <= 1 ) {
                        var marker = L.marker([tab[i].lat, tab[i].lng]).addTo(map);
                        marker.bindPopup(tab[i].title);
                    }
                }
            } else {
                for (var i = 0; i < tab.length; i++) {
                    var marker = L.marker([tab[i].lat, tab[i].lng]).addTo(map);
                    marker.bindPopup(tab[i].title);
                }
            }
        });*/
    }
</scrip>


    <button type="submit" name="submit" class="btn-connexion">Se Connecter</button>

<?php require_once("./content/include/navbar.php");
if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
}
require_once("./content/include/footer.php");

        $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= '/archestop/content/include/modal.php';
        include_once($path);    

?>

</body>
</html>
